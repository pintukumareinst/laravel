 <?php
 
session_start();
if(isset($_SESSION['email'])){
  header('location:index2.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Font Awesome 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">-->

     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Jquery CDN-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Animinate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">

   <!-- <link rel="stylesheet" type="text/css" href="index.css">   -->

  <link rel="stylesheet" type="text/css" href="slider.css">

  <link rel="stylesheet" type="text/css" href="index.js">

  <link rel="stylesheet" type="text/css" href="team.css">


  <script> 
 
  $(document).ready(function(){
        
        //For 1st Course
         $("#show").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#hide").css("display","inline");
         });

          $("#hide").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#show").css("display","inline");
         });

        //2nd First Course
          $("#show2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#hide2").css("display","inline");
         });

          $("#hide2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#show2").css("display","inline");
         });

         //3rd First Course
          $("#show3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#hide3").css("display","inline");
         });

          $("#hide3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#show3").css("display","inline");
         });

        //4th First Course
          $("#show4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#hide4").css("display","inline");
         });

          $("#hide4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#show4").css("display","inline");
         });

         //5th First Course
          $("#show5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#hide5").css("display","inline");
         });

          $("#hide5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#show5").css("display","inline");
         });

        
        //6th First Course
          $("#show6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#hide6").css("display","inline");
         });

          $("#hide6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#show6").css("display","inline");
         });
});
       
</script>

<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap');





 

/*for course CSS Start */
#img
{
  border:1px;
  border-radius: 100px;
  border-color: black;
  border-style: solid;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
  
}

/*Image ZoomEffect*/
 #ZoomEffect
 {
  border:1px;
  border-radius: 100px;
  border-color: black;
  border-style: solid;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
 }
 #ZoomEffect img
 {
  width: 100%;
  transition: 1s all ease-in-out;
 }
 #ZoomEffect:hover img
 {
  transform: scale(1.3);
 }

/*course text hadding*/
.text1
{
  text-align:center;
  margin-top: 10px;
}
 /* Course CSS END*/


    
  .pera
   {
     display: none;
   }
   .pera2
   {
     display: none;
   }
   .pera3
   {
     display: none;
   }
   .pera4
   {
     display: none;
   }
   .pera5
   {
     display: none;
   }
    .pera6
   {
     display: none;
   }
   #hide
   {
     display: none;
   }
   #hide2
   {
     display: none;
   }
   #hide3
   {
     display: none;
   }
   #hide4
   {
     display: none;
   }
   #hide5
   {
     display: none;
   }
   #hide6
   {
     display: none;
   }
 .main
   {
     display: inline;
   }

/* Change Brand Font */
.navbar-brand{
  font-family: 'Ubuntu', sans-serif;
  font-size: 2em;
  font-weight: bold;
}

/* Change Navigation Color */
.navbar #myMenu .custom-nav .nav-item a {
  color: #fff;
}
.navbar #myMenu .custom-nav .nav-item a:hover{
  color:tomato;
}

/* Make Header Image Responsive */
.back-image {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  min-height: 70vh;
  border-radius: 0px;
  margin-top: 74px;
}

/* Header Image Sub-Title */
.st {
  font-size: 24px;
}

/* Change Footer Social Icon Color */
a {
  color:FireBrick;
}
a:hover {
  color:LightCoral ;
}

/*for course CSS Start */
#img
{
  border:1px;
  border-radius: 100px;
  border-color: black;
  border-style: solid;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
  
}

/*Image ZoomEffect*/
 #ZoomEffect
 {
  border:1px;
  border-radius: 100px;
  border-color: black;
  border-style: solid;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
 }
 #ZoomEffect img
 {
  width: 100%;
  transition: 1s all ease-in-out;
 }
 #ZoomEffect:hover img
 {
  transform: scale(1.3);
 }

/*course text hadding*/
.text1
{
  text-align:center;
  margin-top: 10px;
}
 /* Course CSS END*/

 /*body{
  background:#262626;
/*}*/
.team-area{

  .carousel-item img{
  height: 100;
  width:100%;
}
.carousel-control-next-icon, .carousel-control-prev-icon{
  height: 30px;
  width:30px;
}
.carousel-caption{
  background-color: #17252A;
  color: white;
  width: 100%;
  left: 0;
}
.carousel-indicators{
  margin-bottom:25px;
}
/*slider background*/
#A{
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/6.jpg");*/
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100vh;
}
#B{
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/7.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100vh;

}
#C{
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/5.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100vh;

}
.jumbotron{
  background: none;
}
/*slider background*/
  padding: 60px 0;
}
.section-heading{
  text-align: center;
  color: #fff;
  margin-bottom: 50px;
  /*text-transform: uppercase;*/
  font-size: 30px;
  /*font-family: bignoodletitling;*/
  /*letter-spacing: 5px;*/
}
.card{
  border: none;
  background:#fff;
}
.img-area{
  width: 150px;
  height: 150px;
  display: inline-block;
  overflow: hidden;
  border-radius: 50%;
}
.team-single:hover .side-two{
  transform: rotateY(0deg);
  border-radius: 5px;
}
.team-single:hover .side-one{
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
  /*letter-spacing: 5px;*/
  font-size: 25px;
}
p{
  font-family: merienda;
}

.carousel-item img{
  height: 100;
  width:100%;
}
.carousel-control-next-icon, .carousel-control-prev-icon{
  height: 30px;
  width:30px;
}
.carousel-caption{
  background-color: #17252A;
  color: white;
  width: 100%;
  left: 0;
}
.carousel-indicators{
  margin-bottom:25px;
}
/*slider background*/
#A{
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/6.jpg");*/
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100vh;
}
#B{
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/7.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100vh;

}
#C{
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("images/5.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100vh;

}
.jumbotron{
  background: none;
}
/*slider background*/

 
    .A{
      background-image: linear-gradient(to right, #DC2424 , #4A569D);
      height: 350px;
    }
    .B{
      background-image: linear-gradient(to right, #E0EAFC , #CFDEF3);
    }


    



    
</style>

  <title>VTSCS</title>
</head>
                      
<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top" style="background-color:#25274D !important ">
    <a href="/" class="navbar-brand">Versatile</a>
    <span class="navbar-text">Create Challenge Conquer</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="/#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="/#courses" class="nav-link">Courses</a></li>
        <li class="nav-item"><a href="/#team" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="/#contact" class="nav-link">Contact</a></li>
        @if (Auth::guest())
        <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="/alumini" class="nav-link">Our Alumini</a></li>    
        <li class="nav-item"><a href="/game" class="nav-link">Game Zone</a></li>
        @endif
  @if (Auth::guest())
      <li class="nav-item" id="1"> <a href="/login"> <button type="button" class="btn btn-danger" style="margin-right: 8px;">Login</button></a></li>
      <li class="animated infinite pulse delay-2s"><a href="/register"> <button type="button" class="btn btn-danger">Register Now
      </button></a></li>
  @else
      <li class="nav-item"><a href="/feedback" class="nav-link">Feedback</a></li>
      
      
      <li class="nav-item" style="margin-left: 100px;"><a href="/profile" class="nav-link"><i class="fa fa-user-circle " style="color:#DDDDDD;">&nbsp;&nbsp;{{ Auth::user()->email }}</i></a></li>
      <li class="nav-item" id="1"> <a href="/logout"> <button type="button" class="btn btn-danger" style="margin-right: 8px;">Logout</button></a></li>
  @endif       
  </ul>
 </div>

  </nav> <!-- End Navigation -->


   @yield('content')

  <!-- Start Footer-->
  <footer class="container-fluid  text-white mt-5" style="border-top: 3px solid #DC3545;background-color: #25274D !important;">
    <div class="container">   <!-- Start Footer Container -->
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-6">      <!-- Start Footer 1st Column -->
          <div>
            <span>Follow Us: </span>
            <a href="#" target="_blank"><i class="fa fa-facebook px-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-twitter pr-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-youtube pr-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-google-plus-g pr-3"></i></a>
            <a href="#" target="_blank"><i class="fa fa-rss pr-3"></i></a>
          </div>
        </div>    <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
          <small> Designed by <a href="#" target="_blank">Versatile Technical Solutions</a> &copy; 2019. </small>
        </div>    <!-- End Footer 2nd Column -->
      </div>    <!-- End Footer Row -->
    </div>    <!-- End Footer Container -->
  </footer> <!-- End Footer -->

<!-- Wow js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<!-- end -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        
        //For 1st Course
         $("#show").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#hide").css("display","inline");
         });

          $("#hide").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#show").css("display","inline");
         });

        //2nd First Course
          $("#show2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#hide2").css("display","inline");
         });

          $("#hide2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#show2").css("display","inline");
         });

         //3rd First Course
          $("#show3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#hide3").css("display","inline");
         });

          $("#hide3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#show3").css("display","inline");
         });

        //4th First Course
          $("#show4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#hide4").css("display","inline");
         });

          $("#hide4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#show4").css("display","inline");
         });

         //5th First Course
          $("#show5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#hide5").css("display","inline");
         });

          $("#hide5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#show5").css("display","inline");
         });

        
        //6th First Course
          $("#show6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#hide6").css("display","inline");
         });

          $("#hide6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#show6").css("display","inline");
         });
});
    </script>
</body>
</html>