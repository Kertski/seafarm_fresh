<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;


class CheckoutController extends Controller
{
    public function index() {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout', compact('cartitems'));
    }

    public function placeOrder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->first_name = $request->input('first_name');
        $order->last_name = $request->input('last_name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address_1 = $request->input('address_1');
        $order->address_2 = $request->input('address_2');
        $order->city = $request->input('city');
        $order->province = $request->input('province');
        $order->zip_code = $request->input('zip_code');
        $order->payment_mode = $request->input('payment_mode');
        $order->payment_id = $request->input('payment_id');
        $order->tracking_number = 'sff'.rand(1000,9999);
        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total += $prod->products->selling_price*$prod->prod_qty;
        }
        $order->total_price = $total;

        $order->save();

        $order->id;

        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach( $cartitems as $item )
        {
            OrderItem::create([
                'order_id'=> $order->id,
                'prod_id' => $item->prod_id,
                'qty' => $item->prod_qty,
                'price' => $item->products->selling_price,
            ]);
        }

        if(Auth::user()->address_1 == NULL)
        {
            $user = User::where('id', Auth::id())->first();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->phone = $request->input('phone');
            $user->address_1 = $request->input('address_1');
            $user->address_2 = $request->input('address_2');
            $user->city = $request->input('city');
            $user->province = $request->input('province');
            $user->zip_code = $request->input('zip_code');
            $user->update();
        }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);
        if($request->input('payment_mode') == "Paid by Paypal")
        {
            return response()->json(['status' => "Order placed successfully"]);
        }else
        {
        return redirect('/')->with('status', "Order placed successfully");
        }
    }
}
