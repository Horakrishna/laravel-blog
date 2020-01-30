<?php

namespace App\Http\Controllers;
use App\Category;
use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function addBlog(){

        $categories =Category::where('publication_status', 1)->get();
         return view('admin.blog.add-blog',['categories' =>$categories]);
    }

    public function manageBlog(){
        $blogs   =DB::table('blogs')
                ->join('categories','blogs.category_id','=','categories.id')
                ->select('blogs.*','categories.category_name')
                ->orderBy('blogs.id','desc')
                ->get();
        return view('admin.blog.manage-blog',['blogs'=>$blogs]);
    }

    private function imageUpload($blogImage){

        $imageName  = $blogImage->getClientOriginalName();
        $directory  ='blog-images/';
        $blogImage  ->move($directory, $imageName);
        return $directory.$imageName;
    }
    public function saveBlog(Request $request){
       // return $request->all();
        // $image =$_FILES['blog_image'];
        // print_r($image);
        // exit();
        //return $image->getClientOriginalName();
        $blog = new Blog();
        $blog->category_id           =$request->category_id;
        $blog->blog_title            =$request->blog_title;
        $blog->blogshort_dis         =$request->blogshort_dis;
        $blog->bloglong_dis          =$request->bloglong_dis;
        $blog->blog_image            =$this->imageUpload($request->file('blog_image'));
        $blog->publication_status    =$request->publication_status;
        $blog->save();
        return redirect('/blog/add-blog')->with('message','Blog info save successfully');


    }
    public function editBlog($id){

        return view('admin.blog.edit-blog',[
            'category' => Category::where('publication_status',1)->get(),
            'blog'     => Blog::find($id)
        ]);
    }
    public function updateBlog(Request $request){

        $blog      = Blog::find($request->id);
        $blogImage = $request->file('blog_image');
        if($blogImage){

            unlink($blog->blog_image);
           $imagePath  = $this->imageUpload($blogImage);
        }
        $blog->category_id           =$request->category_id;
        $blog->blog_title            =$request->blog_title;
        $blog->blogshort_dis         =$request->blogshort_dis;
        $blog->bloglong_dis          =$request->bloglong_dis;

        if(isset($imagePath)){
            $blog->blog_image        =$imagePath;
        }
        $blog->publication_status    =$request->publication_status;
        $blog->save();
    return redirect('/blog/manage-blog')->with('message','Blog info Update successfully');
    }

    public function deleteBlog(Request $request){
        $blog=Blog::find($request->id);
        if(file_exists($blog->blog_image)){
            unlink($blog->blog_image);
        }
        $blog->delete();
        return redirect('/blog/manage-blog')->with('message','Blog info Delete successfully');
    }
    public function manageComment(){
        return view('admin.comment.manage-comment', [
            'comments'  =>DB::table('comments')
                            ->join('visitors','comments.visitor_id', '=' ,'visitors.id')
                            ->join('blogs','comments.blog_id', '=','blogs.id')
                            ->select('comments.*','visitors.first_name','visitors.last_name','blogs.blog_title')
                            ->orderBy('comments.id','desc')
                            ->get()


        ]);
    }
    public function unpublishedComment($id){

        $comment =Comment::find($id);
        $comment->publication_status = 0;
        $comment->save();

       return redirect('/comment/manage-comment')->with('message', 'Comment unPublished info save Successfully');
    }
    public function publishedComment($id){

        $comment =Comment::find($id);
        $comment->publication_status = 1;
        $comment->save();

       return redirect('/comment/manage-comment')->with('message', 'Comment Published info save Successfully');
    }
}
