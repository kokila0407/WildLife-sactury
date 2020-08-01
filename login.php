 <?php
 include("loginserv.php");?>
<!doctype html>
<html>
<head>




<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}



/* The dots/bullets/indicators */
.dot {
  height: 12px;
  width: 12px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.8s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="CSS/X.jpg" style="width:1000px">
</div>

<div class="mySlides fade">
  <img src="CSS/Z.jpg" style="width:1000px">
</div>

<div class="mySlides fade">
  <img src="CSS/Y.jpg" style="width:750px">
</div>

<div class="mySlides fade">
  <img src="CSS/W.jpg" style="width:1000px">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span>  
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>





<meta charset="UTF-8">
<title>Login</title>
<style>

body{
   
   background-color: black;
}

.login{
	
	 
width:300px;
margin:30px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 25px 10px;
margin-top:15px;

}
input[type=text], input[type=password]{
width:99%;
padding:8px;
margin-top:5px;
border:1px solid #ccc;
padding-left:5px;
font-size:12px;
background:smoke;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}
input[type=submit]{
width:100%;
background-color:red;
color:#fff;
border:2px solid red;
padding:8px;
font-size:14px;
cursor:pointer;
border-radius:5px;
margin-bottom:8px; 
}
 
</style>
</head>
<body>
<div class="login" style="    ">
<h3 align="center"><font color="silver">Login</font></h3>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="username"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="password"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
<span></span>
</body>
</html>