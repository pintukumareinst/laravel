<!DOCTYPE html>
<html>
<head>
	<title>Alumni Page</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style type="text/css">
    body { padding-top: 70px; }
    .jumbotron {
      color: #2c3e50;
      background: #ecf0f1;

    }
    .navbar-inverse {
      background: #2c3e50;
      color: white;
    }
    .navbar-inverse .navbar-brand, .navbar-inverse a{
      color:white;
    }
    .navbar-inverse .navbar-nav>li>a {
      color: white;
    }
    .thumbnail img {
    	width: 100%;
	}

    .thumbnail {
    	box-shadow: 0 0 23px white;
	}
	.zoom {
  		transition: transform .5s;
    }
    .zoom:hover{
        -ms-transform: scale(1.5); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.2); 
    }

      /*body{
  background:#262626;
/*}*/
.team-area{
  padding: 60px 0;
}
.section-heading{
  text-align: center;
  color: #fff;
  margin-bottom: 50px;
  text-transform: uppercase;
  font-size: 65px;
  font-family: bignoodletitling;
  letter-spacing: 5px;
}
.card{
  border: none;
  background:#fff;
}
.team-single:active .side-two{
  transform: rotateY(0deg);
  border-radius: 5px;
}
.team-single:active .side-one{
  transform: rotateY(180deg);
}
.content-area{
  transform:perspective(1000px);
  transition: 1s;
  transform-style: preserve-3d;
  position: relative;
}
.side-one{
  position: relative;
  transform: rotateY(0deg);
  z-index: 2;
  margin-bottom: 30px;
}
.side-two{
  position: absolute;
  top: 0;
  left: 0;
  background:#fff;
  transform: rotateY(-180deg);
}
.side-one,
.side-two{
  backface-visibility: hidden;
  transition: 1s;
  transform-style: preserve-3d;
}
.side-one .card,
.side-two .card{
  min-height: 312px;
}
.side-two .card a{
  font-size: 18px;
  color: brown; 
}
h4{
  color: brown;
  font-family:bignoodletitling;
  letter-spacing: 5px;
  font-size: 25px;
}
p{
  font-family: merienda;
}

  </style>
  <link rel="stylesheet" type="text/css" href="gallery.css">
</head>
<body>


  <div class="container-fluid" style="margin-top: -55px;">
  <div class="jumbotron">
    <h1><center><i class="fa fa-camera-retro"></i></span>Our Alumini's</center></h1>
    <p><center><big><big>The students who have achieved success and have done great! :)</big></big></center></p> 
  </div>
  <div class="container-fluid" style="background-color: #262626;">
  <section class="team-area">
    <div class="container">
      <!-- <h3 class="section-heading">Team Members</h3> -->
      <div class="row">
        <!-- First card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                    	<div class="thumbnail">
                    		<img src="01.jfif" class="zoom"  alt="">
                    	</div>
                    </div>               
                  </div>
                </div>
              </div>
z

              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Sukriti Macker</h4>
                      <p style="color: red;">Student - Maharaja Agrasen Institute of Technology</p>
                      <p>I was a beginner in Coding, but the way the Nidhi Ma’am taught was exceptionally good!The concepts she taught were so easy to understand. Mentors will help you out at every step ! Whatever course you may take, you will be offered the best faculty. I would recommend you to join and it will be the best experience. I guarantee!</p>
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
                    	<div class="thumbnail">
                    		<img src="05.jfif" class="zoom"  alt="">
                    	</div>
                    </div>               
                  </div>
                </div>
              </div>
z

              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Shivam Aggarwal</h4>
                      <p style="color: red;">Software Developer - Amazon</p>
                      <p>I did three courses and was extremely happy with all the courses. They provide quality content, the support from faculty and mentors was amazing. It helped me a lot in preparing for my interview rounds for the different companies. Finally I would say that it is a place to develop attitude and skills required at the industry level.</p>
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

        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                    	<div class="thumbnail">
                    		<img src="04.jfif" class="zoom"  alt="">
                    	</div>
                    </div>               
                  </div>
                </div>
              </div>
z

              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Yash Kapoor</h4>
                      <p style="color: red;">Placed at Microsoft - Thapar Institute of Engineering & Technology</p>
                      <p>Versatile plays a big role in my success. It is a place which teaches you to find a solution rather than knowing a solution and builds up a great foundation for any student. Being an electronics engineer, it was difficult to enter the field of programming and my life would have been completely different without Versatile support.</p>
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
                    	<div class="thumbnail">
                    		<img src="03.jfif" class="zoom"  alt="">
                    	</div>
                    </div>               
                  </div>
                </div>
              </div>
z

              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Sahil Harwani</h4>
                      <p style="color: red;">Software Developer - Expedia</p>
                      <p>I joined the course after knowing that it has helped a lot of students in securing good jobs. The course content was really good that I took another course which helped me grab an internship at Amazon and then finally got placed at Expedia. I feel everyone must join as it a place which will the elevate level of your skills, no matter how high it is!</p>
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


		<!-- Fourth card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                    	<div class="thumbnail">
                    		<img src="06.jfif" class="zoom"  alt="">
                    	</div>
                    </div>               
                  </div>
                </div>
              </div>
z

              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Tanya Singh</h4>
                      <p style="color: red;">Student - Delhi Technological University</p>
                      <p>Amazing experience at Versatile. It was an extremely good atmosphere for learning as the teachers are very nice and sweet and most importantly they teach very well. The code zen is also very well built, they have hint videos and other online doubt resolution system as well. I will be enrolling myself in another course very soon.</p>
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

        <!-- Fifth card -->
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="team-single">
            <div class="content-area">


              <div class="side-one">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="img-area">
                    	<div class="thumbnail">
                    		<img src="07.jfif" class="zoom"  alt="">
                    	</div>
                    </div>               
                  </div>
                </div>
              </div>
z

              <div class="side-two">
                <div class="card">
                  <div class="card-body text-center mt-4">
                      <h4>Ishtmeet Singh</h4>
                      <p style="color: red;">Student - Indian Institute of Technology Banaras Hindu University Varanasi</p>
                      <p>I enrolled into C++ with data structures at Versatile. I got admission into IIT but as a fresher I didn't know anything about programming. After joining here, I have learnt a lot. Versatile practice modules and lectures are perfect and cover easy as well as hard coding questions. I am now capable to think logics for the questions easily.</p>
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



<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>