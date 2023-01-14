<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index()
    {
        $featured_products = Product::where('favorite', '1')->take(2)->get();
        $trending_category = Category::where('favorites', '1')->take(2)->get();
        return view('frontend.index', compact('featured_products', 'trending_category'));
    }

    public function category()
    {
        $category = Category::where('status','0')->get();
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
                return view('frontend.products.view', compact('products'));

            }
            else{
                return redirect('/')->with('status', "The link was broken");
            }
        }
        else{
            return redirect('/')->with('status',"No such category found");
        }

    }
}
