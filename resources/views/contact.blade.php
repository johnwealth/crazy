@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    
    <section id="home" class="sliderwrapper clearfix">
    
       <div class="tp-banner-container">
         
            <div class="tp-dottedoverlay twoxtwo"></div>
                    <section id="contact" class="contact-wrapper">
                  <div class="title text-center">
                <h2>Contact Us</h2>
                <p>Want to work with us? Get in touch!</p>
                <hr>
               </div>
            </div>
        </div>
    </section><!-- end slider-wrapper -->  
         
   
    
     <section id="features" class="feature-wrapper">
     <div class="container">
  <div data-scroll-reveal="enter from the bottom after 0.3s" class="title text-center" data-scroll-reveal-id="2" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="contact_tab text-center">
                    <ul id="myTab" class="container text-center nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Contact Details</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">Location Maps</a></li>
                    </ul>
           <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="container">
                        <p><b>Send us your request, we will feed you back like </b> <i> "Just In Time"</i></p>
                            <div id="message"></div>
                            <form id="contactform" action="contact.php" name="contactform" method="post" data-scroll-reveal="enter from the bottom after 0.4s">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"> 
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address"> 
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"> 
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Message"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-contact btn-primary">SUBMIT</button>
                                </div>
                            </form> <!-- End Form -->
                        </div> <!-- End Container -->
                    </div><!-- End Tab Pane -->
                       <!-- /Google Map -->     
                  <div class="tab-pane fade" id="tab2">
                   <div id="map"></div>
                  </div>   
            </div><!-- /end my tab content -->  
        </div><!-- /contact_tab --> 
     </div>
</div><!-- end col-lg-6 -->

    <!--/ SERVICE SECTION -->   
    <section id="services" class="white-wrapper">
        <div class="container">
            <div class="title text-center">
                <div class="container">
            <div class="title text-center">
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="#"><i class="fa fa-envelope-o aligncenter"></i></a>
                        <h2>info@screenbook.ng</h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box" data-scroll-reveal="enter from the bottom after 0.6s">
                        <a title="" href="#"><i class="fa fa-map-marker
                         aligncenter"></i></a>
                        <h2>362 Peridot fuel Station <br/>Isheri Lagos, Nigeria</h2>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-box"  data-scroll-reveal="enter from the bottom after 0.6s">
                         <a title="" href="#"><i class="fa fa-phone aligncenter"></i></a>
                        <h2>(+234) 0813-618-1285 </h2>
                    </div>
                </div>
            </div> <!-- end title -->
        </div><!-- end container -->
    </section><!-- Service and Testimonial End --> 
    
 
        
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
    
