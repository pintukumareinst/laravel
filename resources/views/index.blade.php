@extends('layouts.master')

@section('content')
<!-- Start slider -->
  <div>
  <div class="carousel slide  " data-ride="carousel" data-interval="2000" id="jpweb" data-pause="hover">  <!--data-pause="false" -->
    <div class="carousel-inner">
       
      
      <div class="carousel-item active" id="A">
        <!-- <img src="images/12.jpg"> -->
        <!-- Start Header Jumbotron-->
        
  <header class="jumbotron">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-light font-weight-bold wow bounceInDown">Welcome to Versatile Technical Education</h1>
      <p class="font-italic font-weight-bold st text-light wow bounceInLeft delay-1s"> 3C - Create Challenge Conquer</p>
      <a href="/#contact" class="btn btn-outline-danger mr-4 wow swing delay-2s">Contact Us</a>
      <!-- <a href="#" target="_blank" class="btn btn-outline-danger">Join Us</a> -->
    </div>
  </header> <!-- End Header Jumbotron -->


        <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px;">
          <h3>Versatile Education</h3>
          <p style="padding-bottom: 10px;">We Support You Grow</p>
        </div>
      </div>
      
      <div class="carousel-item" id="B">
        <!-- <img src="images/bg3.jpg"> -->
        <!-- Start Header Jumbotron-->
        
  <header class="jumbotron">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-light font-weight-bold">Welcome to Versatile Technical Education</h1>
      <p class="font-italic font-weight-bold st text-light"> 3C - Create Challenge Conquer</p>
      <a href="/#contact" class="btn btn-outline-danger mr-4">Contact Us</a>
      <!-- <a href="#" target="_blank" class="btn btn-outline-danger">Join Us</a> -->
    </div>
  </header> <!-- End Header Jumbotron -->

        
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px;">
          <h3>Versatile Education</h3>
          <p style="padding-bottom: 10px;">We Support You Grow</p>
        </div>
      </div>

      <div class="carousel-item" id="C">
        <!-- <img src="images/bg2.jpg"> -->
        <!-- Start Header Jumbotron-->
        
  <header class="jumbotron">
    <div class="text-center" style="margin-top: 120px;">
      <h1 class="text-uppercase text-light font-weight-bold">Welcome to Versatile Technical Education</h1>
      <p class="font-italic font-weight-bold st text-light"> 3C - Create Challenge Conquer</p>
      <a href="/#contact" class="btn btn-outline-danger mr-4">Contact Us</a>
      <!-- <a href="#" target="_blank" class="btn btn-outline-danger">Join Us</a> -->
    </div>
  </header> <!-- End Header Jumbotron -->

        
        <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px;">
          <h3>Versatile Education</h3>
          <p style="padding-bottom: 10px;">We Support You Grow</p>
        </div>
      </div>


    </div>

      <a href="#jpweb" class="carousel-control-next" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
      <a href="#jpweb" class="carousel-control-prev" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      
      <ul class="carousel-indicators" >
        <li data-target="#jpweb" data-slide-to="0" class="active"></li>
        <li data-target="#jpweb" data-slide-to="1"></li>
        <li data-target="#jpweb" data-slide-to="2"></li>
     </ul>
     
    
  </div>
</div>
<!-- End slider -->


<!-- Cousre Section-->
          <div class="container-fluid" id="courses">
            
            <section class="jumbotron ">
              <h2 class="text-center wow bounceInDown ">Courses</h2>
              <hr> 
                <div class="container-fluid">
                  <div class="row">

                 <!--First Course -->
                    <div class="col-lg-4 t">
                          @if (Auth::guest())
                              <a href="/login">
                          @else
                              <a href="/cprogram">
                          @endif  
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/c.png" id="img">
                            </div>
                          </a>
                            <div>
                            <h1 class="text1">C</h1>
                            <p>VERSATILE provides real-time and placement oriented C course in online and offline mode.VERSATILE’s
                            <span id="show" class="text-primary"><a>read more</a></span>
                            <span class="pera">C training course content is basically designed from basic to advanced levels.VERSATILE is having best C Training infrastructure.
                            </span>
                            <a id="hide" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                      <!--Second Course -->
                       <div class="col-lg-4">
                          @if (Auth::guest())
                              <a href="/login">
                          @else
                              <a href="/cppprogram">
                          @endif
                            <div id="ZoomEffect" class="wow zoomIn delay-1s ">
                            <img src="images/c++.png" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">C++</h1>
                            <p>VERSATILE provides real-time and placement oriented C++ course in online and offline mode. VERSATILE’s 
                            <span id="show2" class="text-primary"><a>read more</a></span>
                            <span class="pera2">C++ training course content is basically designed from basic to advanced levels. VERSATILE is having best C++ Training infrastructure.
                            </span>
                            <a id="hide2" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                         <!--Third Course -->
                            <div class="col-lg-4" >
                           @if (Auth::guest())
                              <a href="/login">
                          @else
                              <a href="/java">
                          @endif
                             <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/java.png" id="img">
                          </div>
                           </a>
                          <div>
                            <h1 class="text1">JAVA</h1>
                            <p>VERSATILE provides real-time and placement oriented java traning in online and offline mode. VERSATILE’s
                            <span id="show3" class="text-primary"><a>read more</a></span>
                            <span class="pera3">Java training course content is basically designed from basic to advanced levels. VERSATILE is having best java Training infrastructure.
                            </span>
                            <a id="hide3" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>
                  </div>
 
                    <!--Fourth Course -->
                     <div class="row">

                    <div class="col-lg-4">
                          @if (Auth::guest())
                              <a href="/login">
                          @else
                              <a href="/phpprogram">
                          @endif
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/php.jpg" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">PHP</h1>
                            <p>VERSATILE provides real-time and placement oriented PHP course in online mode. VERSATILE’s
                            <span id="show4" class="text-primary"><a>read more</a></span>
                            <span class="pera4">PHP training course content is basically designed from basic to advanced levels. VERSATILE is having best PHP Training infrastructure.
                            </span>
                            <a id="hide4" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                      <!--Fifth Course -->
                       <div class="col-lg-4">
                          @if (Auth::guest())
                              <a href="/login">
                          @else
                              <a href="/frontend">
                          @endif
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/web.jpg" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">FrontEnd</h1>
                            <p>VERSATILE provides real-time and placement oriented Frontend course in online mode. VERSATILE’s
                            <span id="show5" class="text-primary"><a>read more</a></span>
                            <span class="pera5">Frontend training course content is basically designed from basic to advanced levels. VERSATILE is having best Frontend Training infrastructure.
                            </span>
                            <a id="hide5" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                          <!--sixth Course -->
                           <div class="col-lg-4">
                          @if (Auth::guest())
                              <a href="/login">
                          @else
                              <a href="/python">
                          @endif
                            <div id="ZoomEffect" class="wow zoomIn delay-1s">
                            <img src="images/python.png" id="img">
                            </div>
                          </a>
                            <div>
                            <h1 class="text1">PYTHON</h1>
                            <p>VERSATILE provides real-time and placement oriented Python course in Jalandhar. VERSATILE’s
                            <span id="show6" class="text-primary"><a>read more</a></span>
                            <span class="pera6">Python training course content is basically designed from basic to advanced levels. VERSATILE is having best Python Training infrastructure in the region.
                            </span>
                            <a id="hide6" class="text-primary">Read less</a>
                            </p>
                             </div>
                          </div>
                     

                  </div>
                </div>
            </section>
          </div>
          <hr>
    <!-- Course Section End-->


  <!-- Start Services -->
  <div class="container text-center border-bottom" id="services"> 
    <h2 class="wow zoomIn">Our Services</h2>

    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="/serversecurity"><i class="fa fa-database fa-5x text-danger wow bounceIn delay-1s"></i></a>
            <h4 class="mt-4">Server Security</h4>
          </div>
            
      
      <div class="col-sm-4 mb-4">
        <a href="/webapplication"><i class="fa fa-desktop fa-5x  text-primary wow bounceIn delay-1s"></i></a>
        <h4 class="mt-4">Web Application</h4>
      </div>

      <div class="col-sm-4 mb-4">
          <a href="/android"><i class="fa fa-android fa-5x text-success wow bounceIn delay-1s"></i></a>
          <h4 class="mt-4">Android Application</h4>
        </div>

    </div>
    </div>
  <!-- End Services -->




<!-- Team section start -->
   <div class="container-fluid" id="team" style="background-color: #262626;">
    <section class="team-area">
    <div class="container">
      <br>
      <h3 class="section-heading wow zoomIn delay-1s">Team Members</h3>
      <div class="row">
        <!-- First card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                      <img src="r.jpg" alt="">
                    </div>
                      <h4>Rajat Soni</h4>
                      <p>Full-Stack Developer</p>
                  
                  </div>
                </div>
              </div>


              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Rajat Soni</h4>
                      <p>He is Full-stack web developer with two years experience.</p>
                      <ul class="list-inline">

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-youtube"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              
             </div>
            
          </div>
          
        </div>
        <!-- end -->





        <!-- Second card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                      <img src="  sourabh.jpg" alt="">
                    </div>
                      <h4>Sourabh</h4>
                      <p>Front-end Developer</p>
                    
                  </div>
                </div>
              </div>


              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Sourabh</h4>
                      <p>He is UI/UX designer and web developer with two years experience.</p>
                      <ul class="list-inline">

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-youtube"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              
             </div>
            
          </div>
          
        </div>
        <!-- end -->




<!-- Third card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                      <img src="  pintu.jpg" alt="">
                      </div>
                      <h4>Pintu Kumar</h4>
                      <p>Back-end Developer</p>
                    
                  </div>
                </div>
              </div>


              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Pintu kumar</h4>
                      <p>He is Back-end web developer with three years experience.</p>
                      <ul class="list-inline">

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-youtube"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </li>

                        <li class="list-inline-item">
                          <a href="#" class="social-icon" target="_blank">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              
             </div>
            
          </div>
          
        </div>
        <!-- end -->
        
      </div>
    </div>
    
  </section>
</div>
<!-- team section end -->

  
 
  <!--Start Contact Us-->
  <div class="container" id="contact" style="margin-top: 15px;"> <!--Start Contact Us Container-->
    <br>
    <h2 class="text-center mb-4 wow zoomIn">Contact US</h2>    <!-- Contact Us Heading -->
    <br>
    <div class="row">           <!--Start Contact Us Row-->
      <div class="col-md-8">    <!--Start Contact Us 1st Column-->
        <form action="" method="post">
                  <input class="form-control" name="name" placeholder="Name" /><br />
          <input class="form-control" name="phone" placeholder="Phone" /><br />
          <input class="form-control" name="email" placeholder="E-mail" /><br />
          <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
          <input class="btn btn-danger" type="submit" value="Send" /><br /><br />
        </form>
      </div>  <!-- End Contact Us 1st Column-->

      <div class="col-md-4 text-center">    <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Versatile Technical Solutions and <br>
        Consultancy Services Pvt Ltd, <br>
        Jalandhar <br>
        Punjab - 144411 <br>
        Phone: +9760800504 <br> 
        <a href="https://www.google.com" target="_blank">www.versatile.com</a> <br>
    
        <br><br>
        <strong>Delhi Branch:</strong> <br>
        VTSCS Pvt Ltd, <br>
        Sec V, Delhi <br>
        WB - 804002 <br>
        Phone: +987654321 <br> 
        <a href="https://www.google.com" target="_blank">www.versatile.com</a> <br>
      </div>    <!-- End Contact Us 2nd Column-->
    </div>    <!-- End Contact Us Row-->
  </div>  <!-- End Contact Us Container-->    <!-- End Contact Us -->

@endsection
  