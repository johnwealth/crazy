@extends('layouts.app')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', " $titleTag")
@include('partials.blogcss')
@section('content')


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=152250022047218";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <section id="home" class="sliderwrapper clearfix">
    <div class="tp-banner-container">      
     <header class="masthead" style="background-image: url('/{{ $post->image }}')">
        <div class="row">
          <div class="col-lg-8 col-md-10 col-md-offset-2 mx-auto">
            <div class="site-heading">
              <h1>{{ $post->title }}</h1>
              <hr class ="small">
              <h2 class="subheading">{{ $post->seo_title }}</h2>
              <span class="#">Posted by
                <a href="#">Screenbook.ng</a>
                 {{Date('F, nS Y g:i A', strtotime($post->created_at))}}</span>
            </div>
          </div> 
        </div>
    </div>
    </section><!-- end slider-wrapper -->  
         
   
  
   <section id="features" class="feature-wrapper">
     <div class="container">
  <div data-scroll-reveal="enter from the bottom after 0.3s" class="title " data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
   
    <div class ="col-md-10 col-md-offset-1">
    <div class="row">
    
            {!! $post->body !!}
          </div>
        </div>
      </div>
    </div>
</div>
</div><!-- end col-lg-6 -->
 </section><!-- end grey-wrapper
  
            
    
    
    

    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper">
        <div class="container">
        <div class="col-lg-8 col-md-offset-2 col-md-10 mx-auto">
            <div class="title text-center">

<div class="fb-comments" data-href="https://localhost:8000" data-numposts="5"></div>
                <h2>Post Comment</h2>
                <p>Leave Us Comment</p>
                <hr>
            </div><!-- end title -->
        
              <div class="service-box">      
                <ul>
                <p><span class="glyphicon glyphicon-comment"></span> {{ $post->comments()->count() }} Comments 
                </p>

                      @foreach($comment as $c)
                  <li>
                    <div class="comment">
                      <div class="comment-img">
                        <img src="http://placehold.it/170x170" alt="">
                      </div>
                      <div class="comment-detail">
                        <div class="comment-name">
                        <div class="comment-name">
                          <strong>{{$c->name}}</strong>
                          <i>{{ Date('F j, Y ', strtotime($c->created_at)) }}</i>                         
                        </div>              
                        {{$c->comment}}
                        </div>   
                    </div><!-- Comment -->
                    </li>
                  @endforeach
                </ul>
              </div> 
            </div>
        </section>
                    </div>
                </div>
             </div>

        </div> 
        </div>
    </section>
    <!--/ VIDEO PARALLAX SECTINO  -->   
    <section class="videobg clearfix text-center">
        <div class="videooverlay" data-scroll-reveal="enter from the bottom after 0.4s">
        <div class="container">
         <div class="service-box">
        <div class="col-lg-8 col-md-offset-2 col-md-10 mx-auto">
         <form action = "{{ URL::to('add/comment')}}" method="post" >
            {{csrf_field()}}

        <textarea name ="comment" class ="form-control" id="" rows="6" cols="30"></textarea>
        <input type="hidden" class ="form-control "name = "post_id" value="{{ $post->id }}" >
        <input type="submit" class ="form-control jtbtn" value ="Add Comment">
        </form>   
             
     </div><!-- end col-lg-6 -->
     </div><!-- end container -->
    </section><!-- end grey-wrapper -->
       </div>
      </div>
      </div>
     <div class="col-lg-8  col-md-10 col-md-offset-8 mx-auto">
    <a href="{{url('blog')}}" class ="jtbtn btn-primary" >ALL Post</a>
    </div>
     </div>
    </div>
   </div>
</section><!--/ Video Parallex  End -- >
    
@include('partials.blogscr')
@endsection
    
