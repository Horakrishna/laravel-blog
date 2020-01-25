<?php

namespace App\Http\Controllers;
use App\Category;
use App\Blog;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manage-category',['categories'=>$categories]);
    }

    public function saveCategory(Request $request){

        // $category =new Category();
        // $category->saveCategoryInfo($request);

        Category::saveCategoryInfo($request);
        return redirect('/category/add-category')->with('message','Category info save Successfully');
    }

    public function unpublishedCategory($id){

        $category =Category::find($id);
        $category->publication_status = 0;
        $category->save();

       return redirect('/category/manage-category')->with('message', 'Category unPublished info save Successfully');
    }
    public function publishedCategory($id){

        $category =Category::find($id);
        $category->publication_status = 1;
        $category->save();

       return redirect('/category/manage-category')->with('message', 'Category Published info save Successfully');
    }

    public function editCategory($id){
        $category =Category::find($id);
        return view('admin.category.edit-category',['category' =>$category]);
    }

    public function updateCategory(Request $request){

        //return $request->all();
       // $category = Category::find($request->id);
         $category =new Category();

        $category->category_name      = $request->category_name;
        $category->cat_dis            = $request->cat_dis;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/manage-category')->with('message', 'Category  info Update Successfully');
    }

    public function deleteCategory(Request $request){

        $blog = Blog::where('category_id', $request->id)->first();

        if ($blog) {
            return redirect('/category/manage-category')->with('message', 'Category  info Could not Delete Successfully');
        } else {
            $category =Category::find($request->id);
            $category->delete();
            return redirect('/category/manage-category')->with('message', 'Category  info Delete Successfully');
        }

    }
}
