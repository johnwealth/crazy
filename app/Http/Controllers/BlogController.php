<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Auth;

use App\Comment;

class BlogController extends Controller
{
    public function index(){

    	$posts = Post::simplePaginate(3);
    	return view('pages.index')->withPosts($posts);
    }

/*
    	 public function Comment(Request $request){

        $comment = strip_tags($request->comment);

        if($comment != ''){

          $c = new Comment();
          $c->comment = $comment;
          $c->user_id = Auth::user()->id;
          $c->post_id = $request->post_id;

          $c->save();
          return redirect()->back();
            
        }

  
     }
*/

      public function show($id){

      if($id != ''){

        $post = Post::find($id);

        if($post){

         // $comment = Comment::where('post_id', $post->id)->get();
          return view('post.blog-single', 'post');
        }

      }

        
       return redirect()->route('post.blog-single');

    }


      public function detail($slug){

    	$post = Post::findBySlug($slug);

       // $comment = Comment::where('post_id', $post->id)->get();

    	return view('post/blog-single')->withPost($post);
    }
}
