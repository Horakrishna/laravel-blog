<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function manageCategory(){
        return view('admin.category.manage-category');
    }

    public function saveCategory(Request $request){

        $category =new Category();
        $category->saveCategoryInfo($request);
       // Category::saveCategoryInfo($request);
        return redirect('/category/add-category')->with('message','Category info save Successfully');
    }
}
