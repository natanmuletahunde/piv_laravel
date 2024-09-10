<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;


class AdminController extends Controller
{
    public function view_category(){
        return view('admin.category');
    }
    public function add_category(Request $request)
    {
         $category = new Category;

         $category->category_name = $request->category;

         $category->save();

         return redirect()->back();
    }
}
