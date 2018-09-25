<?php 

// This displays errors
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if(isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	
	$message = $_POST['message'];

	$mailTo = "hello@milenasahni.com";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\n\n".$message;
	$subject= "You received a message from ".$name;
	
	mail($mailTo, $subject, $txt, $headers);
	
}
else {
	//echo "<p>There was a problem with your email</p>";
}	
?>
<!DOCTYPE html>

<html lang="en">


<head>

<meta charset="utf-8">
<meta name="description" content="Skryne Hill Contact information including address email phone number , opening hours  Facebook and quick contact form ">
<meta name="keywords" content="Skryne Hill Preschool, email, phone, address, contact ,opening hours, contact form, facebook ">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Place a descriptive title for your webpage -->

<title>Skryne Hill Preschool –located in an idyllic rural setting</title>


<link href="https://fonts.googleapis.com/css?family=Lato%7CPlayfair+Display%7CRoboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>


<body>
<!--header-->
<!--page navigation-->
<nav>
<a href="index.html" id="logo"><img src="images/logo.png" width="100" height="51" alt="logo"/></a> 

<ul class="topnav" id="myTopnav">

  
 <li><a href="index.html" class="active" id="home">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="sessionalservice.html">Sessional Services</a></li>
  <li><a href="summercamp.html">Summer Camp</a></li>
  <li><a href="contact.html">Contact & Opening hours</a></li>
  <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i> <i class="fa fa-times fa-2x"></i> 
  </a></li>
  


<li id="bottomcenter"> <a href="#">&copy;Skryne Hill Preschool,2018</a></li>

</ul>
</nav>
<!--end of page navigation-->



<h1 id="thanks">Thanks for submitting the from, we will be with you shortly </h1>

<!--footer-->

<footer>
<a href="#home"> <img src="images/logo.fw.png" width="100" height="52" alt="logo"/> </a>
<p>email: skrynehillpreschool@gmail.com &nbsp; <a href="https://www.facebook.com/skrynehillpreschool/"> <i class="fab fa-facebook-square"></i> </a></p>
<h6>Enrollments and Payments</h6>
 <a href="#">Download Enrollment Form</a>&nbsp;|&nbsp;
  <a href="#"> Pay Enrollment Deposite</a>&nbsp;|&nbsp;
  <a href="#">Pay Summer Camp Deposite</a>
<h6>Some usefull links</h6>
<ul>
<li> <a href="images/pdf/SHPParentHandbookFeb2018.pdf">Download Parent Information Pack</a></li>
<li><a href="#">Download Parent Information Pack</a></li>
<li> <a href="#">Education Skills Inspection Report</a></li>
</ul>

<ul id="footer">
<li id="left"> <a href="#" >Procedures&amp;Policies</a></li>

<li id="right"> <a href="#" >&copy;Skryne Hill Preschool,2018</a></li>
</ul>

</footer>
<!--end of footer-->
<!--mobile menu script-->
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<!--end of mobile menu script-->

</body>
</html> 
