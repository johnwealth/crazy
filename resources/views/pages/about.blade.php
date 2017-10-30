@extends('layouts.app')
@section('title', 'About')
@section('content')


 <section id="home" class="sliderwrapper clearfix">
    
 
    
    <section id="home" class="sliderwrapper clearfix">
    
       <div class="tp-banner-container">
         
           
            <section id="contact" class="contact-wrapper">
                <div class="title text-center">
                <h2>About Us</h2>
                    <p>We are Screenbook.ng</p>
               </div>
            </div>
        </div>
    </section><!-- end slider-wrapper -->  
         
   
    
     <section id="features" class="feature-wrapper">
     <div class="container">
  <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true"> <div class="media row">

        <div class="container text-center">
                <h2>Who we are</h2>
               </div>
                        <div class="col-sm-4 col-sm-offset-2   ">
                                <div class="media-body">        
                                    <h3>Vision</h3>
                                    <p>"To make thousands of classes across Africa  noisy. " </p>
                                </div>
                            </div>                      
                
                        <div class="col-sm-4 ">                  
                                <div class="media-body"><h3>Mission</h3>
                                    <p>"To make learning super simple, fun and interesting."</p>
                                </div>
                              </div> 
                            </div>
                          </div> 
                        </div> 
                    </div>
                </div><!-- end col-lg-6 -->

    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper">
        <div class="container">
            <div class="title text-center">
                <div class="container">
            <div class="title text-center">
                <div class="clearfix"></div>
       
                    <div class="title text-center">
                        <h2>The Team</h2>
                    </div><!-- end title -->
            <div class="col-md-12"> 
            <div class="row text-center">  
          @foreach ( $teams->chunk(4) as $chunk ) 
               @foreach( $chunk as $team) 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="team-box" data-effect="helix">
                            <img class=" aligncenter" src="{{asset('/demos/team2.png')}}" alt="">               
                            <h3>{{ $team->name }}</h3>
                            <p>{{ $team->role }}</p>
                        <div class="clearfix"></div> 
                    </div> <!-- end teambox -->
                </div> <!-- end column 2 -->
                @endforeach
            @endforeach 
        </div>  
    </div><!-- end container -->
</section><!-- Service and Testimonial End --> 
      </div>

     </div>
    </div>
   </div>
    </section><!--/ Video Parallex  End -->  
        
    
    <!--/ PORTFOLIO SECTION -->     
   
 <!-- SECTION CLOSED -->
     @endsection
    
