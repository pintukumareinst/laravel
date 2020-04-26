<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
 	<!--end  -->
<style type="text/css">
	.video{
position :fixed;
top:50%;left:50%;
min-height:100%;
min-width:100%;
transform:translate(-50%,-50%);
z-index:-1;
}
p{
	
	color:white;
	font-family:ariel,san-serif;
}
h4{
	
	
	color:white;
	font-family:ariel,san-serif;
}
h1{
	
	color:white;
	font-family:ariel,san-serif;
	background:rgba(255, 152, 0, 0.50);
	
	
}
label{
	
	color:white;
	font-family:ariel,san-serif;
	
	
}
img{
	
	opacity:0.9;
	
}
textarea{
	opacity:0.7;
	font-family:ariel,san-serif;
	
}
h3{
	
	color=""
}

div{
	
	/*background-image: linear-gradient(to right, #FFAFBD, #ffc3a0);*/
	height:190%;
	width:50%;
	font-family:ariel,san-serif;
	background-color:rgba(0, 0, 0, 0.50);




}
</style>
<script type="text/javascript">
function a()
{
	alert("Thanks for your feedback");
}
</script>
</head>
<body>
<video autoplay loop muted class="video" >
<source src="/Feed/fountainr.mp4" type="video/mp4" >
</video>
<center>
<div class="container" style="width: 800px; margin-top: 10px;">
<h1 align="center" style="color: white;"> USER'S FEEDBACKING SITE</h1>
<h3 align="center" style="color: white;">THIS IS USER'S FEEDBACK PAGE:</h3><br />
<p align="center"><a href="/"><b style="color: blue;">MAIN PAGE</b></a></p>
<h3 align="center" style="color: white;">SELECT YOUR TOPIC AND ENTER YOUR RESPONSE</h3>
<br />
<center>

<br />
<p align="center"> <b style="color: white;">USER INTERFACE</b></p>
<form onsubmit="return a()" align="center">
<textarea class="form-control" cols="60" name="responce"> Enter your feedback on User Interface of the website: </textarea><br /><br />
<input class="btn btn-danger" type="submit" name="BOOK" value="SUBMIT">
</form>
<br />
<p align="center"> <b>VIDEO LECTURES</b></p>
<form onsubmit="return a()" align="center">
<textarea class="form-control" cols="60" name="responce"required>Enter your feedback on the video lectures provided: </textarea><br /><br />
<input class="btn btn-danger" type="submit" name="BOOK" value="SUBMIT">
</form>
<br />
<p align="center"> <b>TECHNICAL ASSISTANCE</b></p>
<form onsubmit="return a()" align="center">
<textarea class="form-control" cols="60" name="responce"required>Enter your feeback on support and assistance by TA:  </textarea><br /><br />
<input class="btn btn-danger" type="submit" name="BOOK" value="SUBMIT">
</form>
<br />
<p align="center"> <b>TEACHING METHODOLOGIES</b></p>
<form onsubmit="return a()" align="center">
<textarea class="form-control" cols="60" name="responce"required> Enter your feedback on teaching methodologies:  </textarea><br /><br />
<input class="btn btn-danger" type="submit" name="BOOK" value="SUBMIT">
</form>
<br />
<p align="center"> <b>GAMING-ZONE</b></p>
<form onsubmit="return a()" align="center">
<textarea  class="form-control" cols="60" name="responce"required> Enter your feedback on GAMING-ZONE: </textarea><br /><br />
<input class="btn btn-danger" type="submit" name="BOOK" value="SUBMIT">
</form>
<br />
<!-- <p align="center"> <b>INTERNET-ACCESING</b></p>
<form onsubmit="return a()" align="center">
<textarea cols="60" name="responce"required> Enter your feedback on </textarea><br /><br />
<input type="submit" name="BOOK" value="SUBMIT">
</form> -->
<p> <b>## THANK YOU FOR ENTERING FEEDBACK</b></p>
</div>
</center>
</center>

</body>
</html>