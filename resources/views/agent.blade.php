@extends('layouts.app')

@section('content') 



<section id="accordion" class="accordion-group">
     <div class="container">
            <div class="title text-center">
                <h2>Work with Us</h2>
                <hr>
            </div><!-- end title -->
        <div class="container">
            <div class="media row">
            <div class="col-sm-8 col-sm-offset-2">
             <div class="widget">
                    <div id="accordion-second" class="clearfix">
                        <div class="accordion" id="accordion2">
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <em class="fa fa-plus icon-fixed-width"></em>WHAT WE DO
                              </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse">
                              <div class="accordion-inner">
                                We at screenbok.ng are on a mission to make learning ridiculously simple, fun and interesting. 
                                 Our first product is a mobile App which has successfully transform the boring, error – infested, 
                                 19th century paper – past question into a product that employs motivation, dynamism and great 
                                 features to help students achieve their goal of gaining admission.
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                <em class="fa fa-plus icon-fixed-width"></em>OUR APP IS SUPERIOR
                              </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                              <div class="accordion-inner">
                               <ul>
                             <li>Great aesthetics</li>
                             <li>Detailed explanations to questions</li>
                             <li>Study plan that aids focus study</li>
                             <li> Weekly challenge that motivates students</li>
                              
                               <P>We need your help to bring this unique opportunity to thousands of students in Nigeria</p>
                              </ul>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                <em class="fa fa-plus icon-fixed-width"></em>WHAT YOU GAIN
                              </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                              <div class="accordion-inner">
                              <ul>
                                <li>Life is about purpose</li>
                                <li>Get the opportunity to influence young minds positively</li>

                                <li> Many times, network is the X – factor</li> 
                                <li>Join a team of talented Nigerians who are making a difference</li>

                                <li> You are not working for free</li>
                                <p>Earn a bonus up to 15× what the telecommunication companies pay recharge card vendors</p>
                                </ul>
                                
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                <em class="fa fa-plus icon-fixed-width"></em>TOOLS NEEDED
                              </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                              <div class="accordion-inner">
                                <ul>  
                                <li> An android phone</li>
                                   <li>A functional bank account</li>
                                   <li>An ATM card</li>
                                   <li>A valid ID card</li>
                              </ul>
                              </div>
                            </div>
                          </div> 
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                                <em class="fa fa-plus icon-fixed-width"></em>HOW IT WORKS
                              </a>
                            </div>
                            <div id="collapseFive" class="accordion-body collapse">
                              <div class="accordion-inner">
                                   <ul>
                                   <li>Introduce Screenbook.ng App to a student</li>
                                   <li>Transfer the mobile App</li>
                                   <li>Accept payment</li>
                                   <li>Subscribe on student’s behalf</li>
                                   <li>Get your bonus immediately</li>
                                   <h6>REGISTRATION IS SUPER EASY!</h6>

                                   <a class="jtbtn pull-right" href="#">Join Us</a>
                                  </ul>
                                    
                              </div>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                      </div><!-- end accordion -->
                  </div><!-- end accordion first -->
              </div>
           </div>
        </div>
        @endsection