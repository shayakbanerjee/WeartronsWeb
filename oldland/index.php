<?php 
$errors = '';
$myemail = 'info@weartrons.com';//<-----Put Your email address here.
if(empty($_POST['email']) )
{
    $errors .= "\n Error: all fields are required";
}

$email_address = $_POST['email']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Weartrons Newsletter Subscription";
	$email_body = "Hi, I signed up at www.weartrons.com".
	" Here are the details:\n Email: $email_address "; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	$send_contact=mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	if($send_contact){
echo '<script type="text/javascript">alert("Thank you for your interest in our product. We shall keep you updated")</script>';
}
else {
echo "ERROR";
}

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Weartrons | Making day to day life better with wearable electronics</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.6.js" ></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/content_switch.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/superfish.js"></script>
  <script type="text/javascript" src="js/forms.js"></script>
  <script type="text/javascript" src="js/bgStretch.js"></script>
  <script type="text/javascript" src="js/jquery.color.js"></script>
  <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script type="text/javascript" src="js/cScroll.js"></script>
  <script type="text/javascript" src="js/jcarousellite.js"></script>
  <script src="js/googleMap.js" type="text/javascript"></script>
</head>

<body>

<div id="bgStretch">
	<img src="images/bg14.jpg" alt="">
	<div class="spinner"></div>
</div>
<div class="over">
		<div class="main">
			<!--header -->
			<header>
				<h1><a id="logo">Run-n-Read</a><form method="POST" name="form" action="<?= $PHP_SELF ?>"> <table width="220" style="background-color:#da8336" > <tr align="center" style="color:black"><td>
				<b>Join our mailing list to get </br>  pre-order information </b> </td></tr><tr align="center"><td>

<input style="width:210px" type="text" placeholder="Enter your email address" name="email"></td></tr><tr align="center"><td>
<input type="submit" value="Submit"></td></tr></table></form></h1>
				<nav class="menu">
				<div class="wrapper">
											</div>
				
				</nav>
			</header>
			<!--header end-->
			<!--content -->
		</div>
	<div class="bg1">
		<div class="main">
			<!--footer -->
						<footer>
				
		 <b>+1 (646) 470-4252 | 244 5th Ave, Suite W-292, New York, NY 10001 | <a href="mailto:info@weartrons.com">info@weartrons.com</a> </br>
				&copy; 2013  <a href="http://www.weartrons.com">Weartrons LLC </a></b> 
				<!-- {%FOOTER_LINK} -->
				<nav id="bg_pagination">
					
					

</footer>

			<!--footer end-->
		</div>
	</div>
</div>
<script>
$(window).load(function() {
	$('.page_spinner').fadeOut();
	$('body').css({overflow:'visible'})

	})
</script>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=8899562; 
var sc_invisible=1; 
var sc_security="acc8d206"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="site stats"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/8899562/0/acc8d206/1/"
alt="site stats"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

</body>
</html>