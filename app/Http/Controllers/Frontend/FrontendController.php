<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Review;
use App\Models\Blog;


class FrontendController extends Controller
{
    public function index()
    {
        $favorite_seafood_meat = Product::where('cat_id', "1")->where('favorite', "1")->orwhere('cat_id', "2")->where('favorite', "1")->take(8)->get();
        $favorite_vegetable_fruit = Product::where('cat_id', "3")->where('favorite', "1")->orwhere('cat_id', "4")->where('favorite', "1")->take(8)->get();
        $seafood = Product::where('cat_id', "1")->where('favorite', "0")->get();
        $meat = Product::where('cat_id', "2")->where('favorite', "0")->get();
        $vegies = Product::where('cat_id', "3")->where('favorite', "0")->get();
        $fruits = Product::where('cat_id', "4")->where('favorite', "0")->get();
        $category = Category::where('status', "1")->get();
        $blog = Blog::where('status', "1")->orderBy('created_at', 'DESC')->take(4)->get();
        return view('frontend.index', compact('category', 'favorite_seafood_meat','favorite_vegetable_fruit', 'seafood', 'meat', 'vegies', 'fruits', 'blog'));
    }

    public function category()
    {
        $category = Category::where('status','1')->get();
        return view ('frontend.category', compact('category'));
    }

    public function viewcategory($slug)
    {
        if(Category::where('slug', $slug)->exists())
        {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('cat_id', $category->id)->where('status', '1')->get();
            return view('frontend.products.index', compact('category','products'));
        }else{
            return redirect('/')->with('status'."The Link is Broken");
        }
    }

    public function productview($cat_slug, $prod_slug)
    {
        if(Category::where('slug', $cat_slug)->exists())
        {
            if(Product::where('slug', $prod_slug)->exists())
            {
                $products = Product::where('slug', $prod_slug)->first();
                $ratings = Rating::where('prod_id', $products->id)->get();
                $rating_sum = Rating::where('prod_id', $products->id)->sum('stars_rated');
                $user_rating = Rating::where('prod_id', $products->id)->where('user_id', Auth::id())->first();
                $reviews = Review::where('prod_id',  $products->id)->get();

                if($ratings->count() > 0)
                {
                    $rating_value = $rating_sum/$ratings->count();
                }
                else{
                    $rating_value = 0;
                }

                return view('frontend.products.view', compact('products', 'ratings', 'rating_value', 'user_rating', 'reviews'));

            }
            else{
                return redirect('/')->with('status', "The link was broken");
            }
        }
        else{
            return redirect('/')->with('status',"No such category found");
        }

    }

    public function productListAjax()
    {
        $products = Product::select('name')->where('status', '1')->get();
        $data = [];

        foreach ($products as $item) {
            $data[] = $item['name'];
        }

        return $data;
    }

    public function searchProduct(Request $request)
    {
        $searched_product = $request->product_name;

        if($searched_product != "")
        {
            $product = Product::where("name", "LIKE", "%$searched_product%")->first();
            if($product)
            {
                return redirect('category/'.$product->category->slug.'/'.$product->slug);
            }
            else
            {
                return redirect()->back()->with("status", "No product matched your search");

            }

        }
        else
        {
            return redirect()->back();
        }
    }

    public function blogs()
    {
        $blog = Blog::where('status', '1')->get();
        return view('frontend.blog', compact('blog'));
    }

    public function blogView($slug)
    {
        if(Blog::where('slug', $slug)->exists());
        {
            $blog = Blog::where('slug', $slug)->first();
            return view('frontend.blogs.view', compact('blog'));
        }
        {
            return redirect('/')->with('status', "No link was broken");
        }
    }

    public function aboutView()
    {
        return view('frontend.aboutus');
    }

    public function contactView()
    {
        return view('frontend.contactus');
    }
}
