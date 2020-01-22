<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){

        $categories =Category::where('publication_status', 1)->get();
         return view('admin.blog.add-blog',['categories' =>$categories]);
    }

    public function manageBlog(){
        return view('admin.blog.manage-blog');
    }

    public function saveBlog(Request $request){
        return $request->all();
    }
}
