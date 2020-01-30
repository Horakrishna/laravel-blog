<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function newComment(Request $request){
        // return $request->all();

        $comment = new Comment();
        $comment->visitor_id   =$request->visitor_id;
        $comment->blog_id      =$request->blog_id;
        $comment->comment      =$request->comment;
        $comment->save();

        return redirect('/blog-details/'.$request->blog_id)->with('message', 'Your comment post successfully');
    }
}
