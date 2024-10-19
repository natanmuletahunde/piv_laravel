<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function home()
    {
        $product = Product::all();
        return view("home.index", compact('product')) ;
    }

    public function login_home()
    {
        $product = Product::all();
        return view("home.index", compact('product')) ;
    }

    public function product_details($id){
        $data = Product::find($id);
        return view("home.product_details",compact('data')) ;
    }
   public function add_cart($id)
{
    // Check if the user is authenticated
    if (Auth::check()) {
        $product_id = $id;
        $user = Auth::user();  // Get the authenticated user
        $user_id = $user->id;  // Access the user's ID

        // Create a new Cart instance and save
        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();

        return redirect()->back()->with('success', 'Product added to cart!');
    } else {
        // Redirect to login page if the user is not authenticated
        return redirect()->route('login')->with('error', 'Please login to add items to the cart.');
    }
}

}
