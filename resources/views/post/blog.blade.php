@extends('layouts.app')
@section('title', 'Blog')
@section('content')
@include('partials.blogcss')
<section id="home" class="sliderwrapper clearfix">
    
       <div class="tp-banner-container">
         
            <div class="tp-dottedoverlay twoxtwo"></div>
            <section id="contact" class="contact-wrapper">
                <div class="title text-center">
                <h2>SCREENBOOK.NG BLOG</h2>
                <h5><p>Education Information Orientation Entertainment</p></h5>
               </div>
            </div>
        </div>
    </section> 
         
  
   <section id="features" >
  <div  class="title text-center" >
            <h2>blog Posts</h2>
            <hr>
        </div>
    </div>
    </section>        
    <!--/ SERVICE SECTION -->   
    <section >
    <div class="blog" id="blog">   
        <div class="container">
           <div class=" main-content col-lg-8  col-md-10 col-md-offset-2 mx-auto">
          @foreach($posts as $post)

          <div class="post-preview">
            <a href="/post/{{$post->slug}}">

              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{$post->excerpt}}
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{ $post->author->name }}</a>
              {{Date('F, nS Y g:i A', strtotime($post->created_at))}}</p>
            <hr>
            </div>
             @endforeach
            
            </div>
        </div><!-- end #testimonial -->
        </div><!-- end customnav -->
    </div> <!-- end container -->
    </section><!-- Service and Testimonial End --> 
       
    <!--/ VIDEO PARALLAX SECTINO  -->   
    <section class="videobg clearfix text-center">
        
                 <div class ="col-md-10 " > 
                 {{ $posts->links() }}
                  </div>
               </div><!-- end container -->
            </div>
     </div>
    </div>
   </div>
</section><!--/ Video Parallex  End --> 
@include('partials.blogscr') 
 @endsection
    
