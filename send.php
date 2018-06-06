<!doctype html>

<?php
if (isset($_POST["submit"])) 
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$from = 'williambelcher.io contact form'; 
	$to = 'william.belcher@hotmail.com'; 
	
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
	// Check if name has been entered
	if (!$_POST['name']) {
		$errName = 'Please enter your name';
	}
	
	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}
		
	//Check if message has been entered
	if (!$_POST['message']) {
		$errMessage = 'Please enter your message';
	}
 
		// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage && !$errHuman) 
	{
		if (mail ($to, $subject, $body, $from)) 
		{
			$result='Sent';
		} 
		else
		{
			$result='Not sent';
		}
	}
}
?>

<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>William Belcher</title>

    <!-- Bootstrap -->
	<link href="css/nav.css" rel="stylesheet">
	<link href="css/customs.css" rel="stylesheet">
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar fixed-top toggle-height navbar-expand-lg navbar-dark scrolled-nav" id="global-nav" style="padding 0px;">
		<a class="navbar-brand" style="margin-left: 10%; color: #000000;" href="#title">William Belcher</a>
		<button class="navbar-toggler custom-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon custom-toggler"></span>
    	</button>
	</nav>
	
	
	<div class="container-fluid header-bg" id="#title">
		<div class="header-center">
			<h1 class="header-title">Email Sent!</h1>
			<h3 class="lead">Thank you for contacting me! I'll be reply as soon as I can!</h3>
			<h3 class="lead"><a href="">Return to main site</a></h3>
		</div>	
	</div>
	
<footer class="container-fluid text-center bg-black">
  <ul class="list-inline">
	<li class="list-inline-item"><a href="https://twitter.com/_Belchy"><img src="img/twitter.png" alt="Twitter" class="footericons"></a></li>
	  <li class="list-inline-item"><a href="https://github.com/Belchy06"><img src="img/github.png" alt="Github" class="footericons"></a></li>
	</ul>
  <p style="color: #ffffff;"></p>
	<p style="color: #ffffff;"></p> 
</footer>
	  
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script>
	<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if 
  });
})
</script>
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>