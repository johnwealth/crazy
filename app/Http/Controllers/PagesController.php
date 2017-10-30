<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; 

use Mail;

use App\Comment;

use Auth;

use App\Page;

use App\Team;

use Session;


class PagesController extends Controller
{


  // public function getPage($name)
  //   {
  //       if($page != ''){

  //         $page = Page::where('title', $name)->first();

  //         if($page){

  //           return view('page', compact('page'));
  //         }
  //       }

  //         return redirect()->back();    
          
  //   }


     public function index()
    {
        return view('pages.index');
    }



     public function practice()
    {
        return view('pages.practice');
    }


     public function about()
    {
        $teams = Team::all();
        return view('pages.about', compact('teams'));
    }


    public function agent()
    {
        return view('pages.agent');
    }




    public function video()
    {
        return view('pages.video');
    }




     public function blog()
    {
            $posts = Post::simplePaginate(3);
        return view('post.blog')->withPosts($posts);
    }


    public function blogSingle($id){

      if($id != ''){

        $post = Post::find($id);

        if($post){

          //$comment = Comment::where('post_id', $post->id)->get();
          return view('post.blog-single', compact('post', 'comment'));
        }

      }

        
       return redirect()->route('blog-single');

    }

/*

     public function blogSingle($slug)
    {
        
        $page = Page::findBySlug($slug);
        return view('blog-single', ['page'=> $page]);
    }
*/


      public function getContact()
    {
        return view('pages.contact');
    }



   

      public function postContact(Request $request)
    {
      $this->validate($request, [
       'email' => 'required|email',
       'subject' => 'min:3',
       'message' => 'min:10'
       ]);

      $data = array(
        'name'=>$request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'bodyMessage' => $request->message
      );

      \Mail::send('emails.contact', $data , function($message) use ($data){
          $message->from( $data['email']);
          $message->to('johnwealth.ise@gmail.com');
          $message->subject($data['subject']);
      });



         Session::flash('success', ' the Mail is successfully saved!');

        return redirect('/');
    }

 

}
