<?php

namespace App\Http\Controllers;
use App\Blog;
use App\Category;
use App\Comment;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $categories= Category::where('publication_status', '1')->get();
        $blogs =Blog::where('publication_status', '1')->orderBy('id','desc')->take(3)->get();
        return view('front-end.home.home',[
            'blogs' => $blogs,
            'categories'=>$categories
        ]);
    }

    public function categoryBlog($id,$name){

        return view('front-end.category.category-blog',[
            'categories' =>Category::where('publication_status', '1')->get(),
            'blogs'      =>Blog::where('category_id',$id)->where('publication_status', '1')->get()
        ]);
    }

    public function blogDetails($id){
        return view('front-end.blog.blog-details',[
            'categories' =>Category::where('publication_status', '1')->get(),
            'blog'       =>Blog::find($id),
            'comments'   => DB::table('comments')
                                ->join('visitors','comments.visitor_id', '=' ,'visitors.id')
                                ->select('comments.*','visitors.first_name','visitors.last_name')
                                ->where('comments.blog_id',$id)
                                ->where('publication_status',1)
                                ->orderBy('comments.id','desc')
                                ->get()
        ]);
    }


}
