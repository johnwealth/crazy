@extends('layouts.app')
@section('title', 'Blog')
@include('partials.blogcss')
@section('content')


    
    <section id="home" class="sliderwrapper clearfix">
  
    <div class="tp-banner-container">
               
    <header class="masthead" style="background-image:url('/img/home-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 col-md-offset-2 mx-auto">
            <div class="site-heading">
              <h2>SCREENBOOK.NG BLOG</h2>
              <hr class ="small">
              <span class="subheading">Orientation Education Information Entertainment</span>
            </div>
          </div>
        </div>
    </div>
    </section><!-- end slider-wrapper -->  
         
   
  
   <section id="features" class="feature-wrapper">
     <div class="container">
  <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
            <h2>blog Posts</h2>
            <hr>
        </div>
    </div>
            
    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper">
        <div class="container">
           <div class="col-lg-8  col-md-10 col-md-offset-2 mx-auto">
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
    
