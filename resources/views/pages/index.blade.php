@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="animationload"><div class="loader">Loading...</div></div> <!-- End Preloader -->
    
    <section id="home" class="sliderwrapper clearfix">
	
       <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
       			  <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('/demos/slider2.jpg')}}" class="img-responsive"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
        				<div class="tp-dottedoverlay twoxtwo"></div>
 
                        <!-- LAYER NR. 3 -->
                         <div class="tp-caption rev-video  customin customout start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="140"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><hr class="topline"><h2>Do You Want to "Jam" JAMB <br>at One Sitting?</h2><hr class="bottomline">
                        </div>
    
                        <!-- LAYER NR. 4 -->
                         <div class="tp-caption rev-video2 customin customout start"
                            data-x="center"
                            data-hoffset="0"
                            data-y="340"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="2200"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><p>Join The Screen Trybe<br>and Prep like a newSchool!</p>
                            <a class="jtbtn" align-right href="#">TRY IT FOR FREE</a>
                        </div>
                    </li>
                    
                     <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('/demos/slide1.jpg')}}"  alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
        				<div class="tp-dottedoverlay twoxtwo"></div>
                        
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rev-video skewfromleft customout"
                            data-x="center"
                            data-y="140"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 6"><hr class="topline"><h2>Think Virtual Learning ?<br></h2><hr class="bottomline">
                        </div>
    
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-video2 skewfromright customout"
                            data-x="center" data-hoffset="0"
                            data-y="340"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1700"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 7"><p>...think Screenbook.ng </p>
                            <a class="jtbtn btn" align-center href="#">TRY IT FOR FREE</a>
                        </div>
                    </li>
					
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('/demos/parallax_02.jpg')}}"  alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
        				<div class="tp-dottedoverlay twoxtwo"></div>
                        
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rev-video skewfromleft customout"
                            data-x="center"
                            data-y="140"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1500"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 6"><hr class="topline"><h2>Screenbook.ng</h2><hr class="bottomline">
                        </div>
    
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-video2 skewfromright customout"
                            data-x="center" data-hoffset="0"
                            data-y="340"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="1700"
                            data-easing="Power4.easeOut"
                            data-endspeed="300"
                            data-endeasing="Power1.easeIn"
                            data-captionhidden="on"
                            style="z-index: 7"><p>...making learning super simple!</p>
                        </div>
                    </li>
		          </ul>
		         
            </div>
		</div>
    </section><!-- end slider-wrapper -->  
         
   
	
	 <section id="features" class="feature-wrapper">
     <div class="container">
  <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
         <div class="container">
            <div class="title text-center">
                <h2>Why Us ?</h2>
                <p>We are in business to teach, mentor and motivate!</p>
                <hr>
            </div><!-- end title -->
        
            <div class="row">
                <div data-scroll-reveal="enter from the bottom after 0.3s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-pencil-square-o alignleft"></i></div>
                        <h3>JAMB Q & A</h3>
                        <p>Access thousands of JAMB </br>
                        question with detailed and simplified answers.</p>
                    </div>
                </div>
            
                <div data-scroll-reveal="enter from the bottom after 0.6s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-car alignleft"></i></div>
                        <h3>Practice on the go!</h3>
                        <p>Prep everywhere even when </br>
                        you are on the toilet slab.</p>
                    </div>
                </div>
            
                <div data-scroll-reveal="enter from the bottom after 0.9s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-clock-o alignleft"></i></div>
                        <h3>Set your time</h3>
                        <p>Time yourself as you practice</br>
                              JAMB is just 2hrs exam</p>
                    </div>
                </div>
            </div> <!-- end row 1 -->
        
            <div class="row">
                <div data-scroll-reveal="enter from the bottom after 1.2s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-gamepad alignleft"></i></div>
                        <h3>Personalize Your study</h3>
                        <p>You can practice topically or</br>
                        yearly which    ever way you like it.</p>
                    </div>
                </div>
            
                <div data-scroll-reveal="enter from the bottom after 1.5s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-trophy alignleft"></i></div>
                        <h3>Challenge yourself</h3>
                        <p>Join the weekly challenge,</br>
                         beat other to the top.</p>
                    </div>
                </div>
            </b>
                              
                <div data-scroll-reveal="enter from the bottom after 1.8s" class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                    <div class="service-box">
                        <div class="service-border"><i class="fa fa-mobile alignleft"></i></div>
                        <h3>Screen TRYBE</h3>
                        <p>Join the Screen Trybe,</br>
                          Don't go archaic!.</p>
                    </div>
                </div>
                <p><a class="jtbtn" href="#">TRY IT FOR FREE</a></p>
            </div> <!-- end row 2 -->
                                  
                   
   </div><!-- end col-lg-6 -->
  </div><!-- end container -->
    </section><!-- end grey-wrapper
	
            
    
    
    
    <!--/ COUNT SECTION -->       
    <section id="count_parallax" class="parallax" style="background-image: url('/demos/parallax_01.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
  
				</div><!-- stat -->
  </div><!-- end container -->
 </div><!-- end overlay -->
    </section>  
       
    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper">
       
    <!-- TESTIMONIAL SECTION -->              
            <div class="testimonial text-center">
                <h2 class="three" data-scroll-reveal="enter from the bottom after 0.2s">And What They Say</h2>
            </div><!-- end title -->
            
            <div id="testimonial" class="owl-carousel owl-theme text-center">
                <div class="testimonial"  data-scroll-reveal="enter from the bottom after 0.3s">
                    <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    <h1> DANIEL Smith </h1>
                </div>
                <div class="testimonial">
                    <p>A dsfadsfads In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    <h1> DANIEL Smith </h1>
                </div>
                <div class="testimonial">
                    <p>Quisque est enim lacinia lobortis da viverra interdum, quam. In sagittis, eros faucibus ullamcorper nibh dolor</p>
                    <h1> DANIEL Smith </h1>
                </div>
                </div>
            </div><!-- end #testimonial -->
            
            <div class="customNavigation">
                <a class="btn prev"><i class="fa fa-angle-left fa-2x"></i></a>
                <a class="btn next"><i class="fa fa-angle-right fa-2x"></i></a>
            </div><!-- end customnav -->
       </div> <!-- end container -->
    </section><!-- Service and Testimonial End --> 
            <section>
        <div class="container"> 
         <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
            <div class="block-gray">
                 
                     <div class="general-title text-center">
                     <div class="title">
                    <h2>Patners</h2>
                    <hr>
                    </div>
                </div>
                      <div class="row">  
                      <div class="col-md-10 col-md-offset-1">
                            <div class="logos-carousel">
                                <img src="{{asset('/demos/wblogo.jpg')}}" alt="" />
                                <img src="{{asset('/demos/Gems-logo.png')}}" alt="" />
                                <img src="{{asset('/demos/logo-asovilla.png')}}" alt="" />
                                <img src="{{asset('/demos/fmiti.jpg')}}" alt="" />
                                <img src="{{asset('/demos/sourcegig.png')}}" alt="" />
                            </div><!-- Logos Carousel -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
 
        
   
            
                   
  
    
    <!--/ VIDEO PARALLAX SECTINO  -->   
    <section class="videobg clearfix text-center">
        <div class="videooverlay" data-scroll-reveal="enter from the bottom after 0.4s">
            <div class="container">
                <div class="general-title text-center">
                    <div class="title">
                    <h2>BECOME A SCREENBOOK AGENT</h2>
                    <p>GET THE OPPORTUNITY TO REACH, SHAPE LIVES AND EARN A ROBUST BONUS...</p>
                    <a class="jtbtn"  href="{{('agent')}}">SEE HOW </a>
                 </div><!-- end container -->
               </div><!-- end overlay -->

             
   </div><!-- end col-lg-6 -->
  </div><!-- end container -->
    </section><!-- end grey-wrapper -->
       </div>
      </div>
      </div>

     </div>
    </div>
   </div>
    </section><!--/ Video Parallex  End -->  
        
    
    <!--/ PORTFOLIO SECTION -->     
   
 <!-- SECTION CLOSED -->
     @endsection
    
