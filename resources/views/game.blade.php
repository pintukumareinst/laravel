<!DOCTYPE html>
<html>
<head>
	<title>Color Game</title>
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <!-- end -->

    <!-- font-awesome -->
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <!-- end -->

     <!--Jquery CDN-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- end -->

      <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="colorGame.css">
  <style type="text/css">
    body {
  background-color: #232323;
  margin: 0;
  font-family: "Montserrat", "Avenir";
}

.square {
  width: 30%;
  background: purple;
  padding-bottom: 30%;
  float: left;
  margin: 1.66%;
  border-radius: 15%;
  transition: background 0.6s;
  -webkit-transition: background 0.6s;
  -moz-transition: background 0.6s;
}

#container {
  margin: 20px auto;
  max-width: 600px;
}

h1 {
  text-align: center;
  line-height: 1.1;
  font-weight: normal;
  color: white;
  background: steelblue;
  margin: 0;
  text-transform: uppercase;
  padding: 20px 0;
}

#colorDisplay {
  font-size: 200%;
}

#message {
  display: inline-block;
  width: 20%;
}

#stripe {
  background: white;
  height: 30px;
  text-align: center;
  color: black;
}

.selected {
  color: white;
  background: steelblue;
}

button {
  border: none;
  background: none;
  text-transform: uppercase;
  height: 100%;
  font-weight: 700;
  color: steelblue;
  letter-spacing: 1px;
  font-size: inherit;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  outline: none;
}

button:hover {
  color: white;
  background: steelblue;
}

  </style>
</head>
<body>
 <!-- Start Nagigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top" style="background-color:#25274D !important ">
    <a href="/" class="navbar-brand">Versatile</a>
    <span class="navbar-text">Create Challenge Conquer</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span> 
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
 </div>

  </nav> <!-- End Navigation -->
<div style="margin-top: 50px;">  
<h1>
	The Great 
	<br>
	<span id="colorDisplay">RGB</span> 
	<br>
	Color Game
</h1>
</div>
<div id="stripe">
	<button id="reset">New Colors</button>
	<span id="message"></span>
	<button class="mode">Easy</button>
	<button class="mode selected">Hard</button>
</div>

	<div id="container">
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
		<div class="square"></div>
	</div>

<script type="text/javascript">
  var numSquares = 6;
var colors = [];
var pickedColor;
var squares = document.querySelectorAll(".square");
var colorDisplay = document.getElementById("colorDisplay");
var messageDisplay = document.querySelector("#message");
var h1 = document.querySelector("h1");
var resetButton = document.querySelector("#reset");
var modeButtons = document.querySelectorAll(".mode");


init();

function init(){
  setupModeButtons();
  setupSquares();
  reset();
}

function setupModeButtons(){
  for(var i = 0; i < modeButtons.length; i++){
    modeButtons[i].addEventListener("click", function(){
      modeButtons[0].classList.remove("selected");
      modeButtons[1].classList.remove("selected");
      this.classList.add("selected");
      this.textContent === "Easy" ? numSquares = 3: numSquares = 6;
      reset();
    });
  }
}

function setupSquares(){
  for(var i = 0; i < squares.length; i++){
  //add click listeners to squares
    squares[i].addEventListener("click", function(){
      //grab color of clicked square
      var clickedColor = this.style.background;
      //compare color to pickedColor
      if(clickedColor === pickedColor){
        messageDisplay.textContent = "Correct!";
        resetButton.textContent = "Play Again?"
        changeColors(clickedColor);
        h1.style.background = clickedColor;
      } else {
        this.style.background = "#232323";
        messageDisplay.textContent = "Try Again"
      }
    });
  }
}



function reset(){
  colors = generateRandomColors(numSquares);
  //pick a new random color from array
  pickedColor = pickColor();
  //change colorDisplay to match picked Color
  colorDisplay.textContent = pickedColor;
  resetButton.textContent = "New Colors"
  messageDisplay.textContent = "";
  //change colors of squares
  for(var i = 0; i < squares.length; i++){
    if(colors[i]){
      squares[i].style.display = "block"
      squares[i].style.background = colors[i];
    } else {
      squares[i].style.display = "none";
    }
  }
  h1.style.background = "steelblue";
}

resetButton.addEventListener("click", function(){
  reset();
})

function changeColors(color){
  //loop through all squares
  for(var i = 0; i < squares.length; i++){
    //change each color to match given color
    squares[i].style.background = color;
  }
}

function pickColor(){
  var random = Math.floor(Math.random() * colors.length);
  return colors[random];
}

function generateRandomColors(num){
  //make an array
  var arr = []
  //repeat num times
  for(var i = 0; i < num; i++){
    //get random color and push into arr
    arr.push(randomColor())
  }
  //return that array
  return arr;
}

function randomColor(){
  //pick a "red" from 0 - 255
  var r = Math.floor(Math.random() * 256);
  //pick a "green" from  0 -255
  var g = Math.floor(Math.random() * 256);
  //pick a "blue" from  0 -255
  var b = Math.floor(Math.random() * 256);
  return "rgb(" + r + ", " + g + ", " + b + ")";
}


</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</body>
</html>
</body>
</html>