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
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta property="og:image" content="http://www.weartrons.com/images/rnr.png">
    <meta property="og:image" content="http://www.weartrons.com/images/rnrd180.png">
    <meta property="og:site_name" content="Run-n-Read">
    <meta property="og:title" content="Run-n-Read, Don't let running get in the way of reading">
 <meta property="og:url" content="http://www.weartrons.com">
 <meta property="og:description" content="Run-n-Read - Now you don't have to choose between running and reading!Smaller than a Tic-Tac box, this device comes with a free mobile app. Clip it to your shirt or to your headband, load up your favorite e-book or news website in the app, sync the two and voila! You can read while running.">
 	<meta name="description" content="The latest wearable tech: Run-n-Read: you can now read while running on a treadmill.">
	<link rel="image_src" href="http://www.weartrons.com/images/rnr52.png">
    <link href="favicon1.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <title>Weartrons | Making day to day life better with wearable electronics</title>
    <link href="wearc.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="wearj.js" type="text/javascript"></script>
	<script src="http://jwpsrv.com/library/4oRtCgYsEeO8IiIACusDuQ.js"></script>

<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
<!-- JS end -->
<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery(".content").hide();
  //toggle the componenet with class msg_body
  jQuery(".heading").click(function()
  {
    jQuery(this).next(".content").slideToggle(500);
  });
});
</script>
	<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=250,width=220,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=no')
}
</script>

	</head>
  <!--[if lt IE 9 ]><body id="homepage" class="lt-ie9" data-spy="scroll" data-target="#header"><![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--> <body id="homepage" data-spy="scroll" data-target="#header"><!--<![endif]-->
    <div id="header">
  <div class="wrapper clearfix">
    <h1 id="tile_header"><a href="index.html"><img src="images/rnr52text.png" title="Run-n-Read"></a></h1>
    <ul class="nav">
      <li>
        <a href="#home">Home</a>
      </li>
      <li>
        <a href="#product">Product</a>
      </li>
      <li>
        <a href="#details">Details</a>
      </li>
      <li>
        <a href="#team">Team</a>
      </li>
      <li>
        <a href="#features">Features</a>
      </li>
      <li class="last">
        <a href="#faq">FAQ</a>
      </li>
    </ul>
  </div>
</div>
    <div id="home">
  <div class="wrapper clearfix">
    <div id="backing">
      <div class="value">
        <h2>Read comfortably while travelling or on a treadmill</h2>
		<p>Dig into a good book or catch up on news and blogs</p></br>
        <p>No more eye strain – words will appear still to your eyes </p></br>
		<p>More productivity or more fun? – call it whatever you like</p></br>
      </div>

      <div class="preorder">
        <p style="font-size:14pt;"> Interested? Check back every day or we’ll inform you when it’s available</p>
        <form method="POST" name="form" action="<?= $PHP_SELF ?>"> <table width="400" height="60" style="background-color:#da8336" > <tr height="10"></tr>
		<tr align="center" style="color:black"><td width="10"></td>
		<td><input type="text" placeholder="Enter your email address" name="email"></td><td width="15"></td>
		<td><input type="submit" value="Submit" style="color:black; font-size: large;"></td><td width="10"></td></tr><tr></tr></table></form>
		<p style="font-size:12pt; text-align:left; margin-top:5px; line-height:25px;"> No spams, promise!
</p>
      </div>
	  </div>
    <div id="play">
      <div class="video">
        <iframe src="http://player.vimeo.com/video/71351500" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      </div>

      <ul class="social clearfix">
        <li><a href="#" class="twitter-share"><img src="images/share_twitter.png"></a></li>
        <li><a href="#"
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;"><img src="images/share_facebook.png"></a>

</a></li>
      </ul>
	  <h2 style="font-size:16pt;margin-top:15px;">
 </h2>
    </div>

  </div><!--<div  style="padding-bottom:-25px; margin-left:250px;">
	 <p style="color:#8E8E8E; font-size:14pt;">
Help us raise $30K in crowd funding to cover fixed costs and bring Run-n-Read to everyone!</b></p>
    </br></br> </div>-->
</div>
<div class="big_wrapper" id="seen_on">
  <div class="wrapper">
    <ul class="clearfix">

      <li class="engadget"><a href="http://www.engadget.com/2013/09/05/run-n-read/?utm_medium=feed&utm_source=Feed_Classic&utm_campaign=Engadget&ncid=rss_semi" target="_blank"></a></li>
      <li class="cnet"><a href="http://news.cnet.com/8301-17938_105-57601899-1/run-n-read-bounces-text-as-you-bounce-on-a-treadmill/" target="_blank"></a></li>
	  <li class="mashable"><a href="http://mashable.com/2013/09/08/run-n-read/" target="_blank"></a></li>
	  <li class="gizmodo"><a href="http://gizmodo.com/a-clip-on-motion-sensor-that-lets-you-read-while-runnin-1208053259" target="_blank"></a></li>
	  <li class="itnews"><a href="http://www.itworld.com/personal-tech/371731/crazy-run-n-read-gadget-solves-problem-reading-while-treadmill" target="_blank"></a></li>
	  <li class="cwear"><a href="http://www.crunchwear.com/run-n-read-keeps-e-book-texts-steady-run/" target="_blank"></a></li>
	  <li class="discoverynews"><a href="http://news.discovery.com/tech/gear-and-gadgets/run-and-read-on-a-treadmill-without-barfing-130905.htm" target="_blank"></a></li>
	  <li class="gadget"><a href="http://www.gadgetreview.com/2013/09/run-n-read-exercises-your-mind-and-body-video.html?utm_source=twitterfeed&utm_medium=twitter" target="_blank"></a></li>
      <li class="cultofmac"><a href="http://www.cultofmac.com/244301/run-n-read-a-virtual-steadicam-for-reading-on-your-ipad/" target="_blank"></a></li>
	  <li class="androidpolice"><a href="http://www.androidpolice.com/2013/09/05/run-n-read-moves-on-screen-text-in-sync-with-your-head-while-running-currently-seeking-funding-through-dragon-innovation/" target="_blank"></a></li>
	  <li class="iamwire"><a href="http://www.iamwire.com/2013/09/run-n-read-perfect-companion-ebook-users-running-travelling/" target="_blank"></a></li>
	  <li class="daily"><a href="http://www.dailymail.co.uk/sciencetech/article-2415932/Now-run-READ-Clip-device-bounces-text-mobile-up-eyes-jog.html" target="_blank"></a></li>
    </ul>
  </div>
</div>
<div class="carousel-container" id="product">
  <div class="wrapper">
    <div class="info">
      <div>
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
  <div class="carousel slide" id="Carousel">
    <div class="center">
      <div>
        <ol class="carousel-indicators">
          <li data-target="#Carousel" data-slide-to="0" class="active first"></li>
          <li data-target="#Carousel" data-slide-to="1"></li>
          <li data-target="#Carousel" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
    <div class="carousel-inner">
      <div class="active item" id="item-1"></div>
      <div class="item" id="item-2"></div>
      <div class="item" id="item-3"></div>
    </div>
  </div>
</div>
<div class="big_wrapper" id="details">
  <div class="wrapper clearfix">
    <div class="point_copy">
      <h3>
        Text always in sync with your eyes
      </h3>

      <ul>
        <li>
          <h4 class="tracks">Tracks head movements</h4>
          <p>Patent pending technology monitors all 3D motions while exercising or riding.</p>
        </li>
        <li>
          <h4 class="bluetooth">Connects via Bluetooth</h4>
          <p>Supports all popular iOS/Android Tablets, eReaders and Smartphones.</p>
        </li>
        <li>
          <h4 class="stabilize">Stabilize content on an electronic display</h4>
          <p>Intelligent algorithms move text in real time – your head moves but the words don’t.</p>
        </li>
      </ul></br>

    </div>
    <div class="app">
      <div class="video_holder">
	  <img src="images/anim.jpg" title="Run-n-Read">
<!--<div id='playerHgDr9cq7'></div>
<script type='text/javascript'>
    jwplayer('playerHgDr9cq7').setup({
        playlist: 'http://jwpsrv.com/feed/HgDr9cq7.rss',
        width: '300',
        height: '300',
        controls: 'false',
        fallback: 'false',
        autostart: 'true',
        repeat: 'true',
        primary: 'flash'
    });
</script></div>-->
    </div>
  </div>
</div>
<div class="big_wrapper" id="team">
  <div class="wrapper">
    <div class="center">
      <ul class="clearfix">
      <h3>
        Team
      </h3>
</br>

	  <li class="feature1">
          <h4 class="heading"><strong>Aditya Bansal </strong></br><font color="#a1a3a7"><i>Technical Co-Founder</i></font></h4>
          <p >As a child, Aditya was a constant source of consternation for his parents due to his tendency to dismantle every electronic object in the house. Years later, aided by a PhD from Purdue, he creates wearable electronics to common problems.</p>
</li>
        <li class="feature2">
          <h4 class="heading"><strong>Praveen Elak </strong></br><font color="#a1a3a7"><i>Business Co-Founder</i></font></h4>
          <p >Not satisfied with a PhD from SUNY Buffalo, Praveen did an Exec MBA from Wharton. Armed with these degrees, he has been walking the line between business and technology with a successful mobile software venture in its exit phase.</p>
        </li>
        <li class="feature3">
          <h4 class="heading"><strong>Shayak Banerjee </strong></br><font color="#a1a3a7"><i>Software Architect</i></font></h4>
          <p >Comfortable wearing multiple hats, Shayak often forgets which one fit him the best. Even though his PhD is in Electrical Engineering from the University of Texas at Austin, he is also a part-time data scientist, math geek and mobile app developer.</p>
        </li>
        <li class="feature4">
          <h4 class="heading"><strong>Robert Clarke </strong></br><font color="#a1a3a7"><i>Industrial Design</i></font></h4>
          <p >Robert takes mechanical design from the realm of dark arts to the practicable. With his training in the defense, aerospace and medical industries, he now tackles the design challenges of consumer driven industry on an almost daily basis.</p>
        </li>
        <li class="feature5">
          <h4 class="heading"><strong>Dr. Steven Zabin </strong></br><font color="#a1a3a7"><i>Advisor</i></font></h4>
          <p >Hindsight may be 20/20 but up until now your "reading-while-running" sight was far from it!  Dr. Zabin an ophthalmologist with 29 years of clinical experience in the ocular and visual system helps our product team keep their "eyes on the ball" with his expert advise and feedback.</p>
        </li>
        <li class="feature6">
          <h4 class="heading"><strong>David Rock </strong></br><font color="#a1a3a7"><i>Creative Director</i></font></h4>
          <p >Inspired by Steven Spielberg as a child, David took it upon himself to hone the art of storytelling through media and art. With the aid of his lens and design tools, he has helped many launch their ambitions and dreams in technicolor.</p>
        </li>
      </ul>
</div>
    </div>
  </div>
</div>
<div class="big_wrapper" id="features">
  <div class="wrapper">
    <div class="center">
      <h3>
        Features Overview
      </h3>
      <ul class="clearfix">
        <li class="feature1">
          <h4>iOS and Android compatible</h4>
          <p>Works with Android 4.3 or later, iPhone 4S or later, iPad Mini, iPad 3<sup>rd</sup> or later, iPod Touch 5<sup>th</sup> Gen.</p>
        </li>
        <li class="feature2">
          <h4>Don’t reach out </h4>
          <p>Tap the device to move between pages. Tap once – next page. Tap twice – previous page.</p>
        </li>
        <li class="feature3">
          <h4>Simple fitness tracker</h4>
          <p>Counts the number of steps taken and measures the calories burned. Displays on your mobile device.</p>
        </li>
        <li class="feature4">
          <h4>Rechargeable battery</h4>
          <p>Charges through USB port. </br>20 hours of use time and 1 month of stand by time.</p>
        </li>
        <li class="feature5">
          <h4>Match your color</h4>
          <p>Available in 4 attractive colors. </br>Red, Green, Blue and Pink.</p>
        </li>
        <li class="feature6">
          <h4>How small can it be?</h4>
          <p>Weighs less than 10g and measures 1.5in x 1.25in (looks like a smaller version of a zippo lighter)</p>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="big_wrapper" id="faq">
  <div class="wrapper clearfix">
    <h3>Frequently Asked Questions</h3>
    <ul>
      <li>
        <div>
          <a href="#">What is Run-n-Read?</a>
          <p>As the name suggests, it’s a device that helps you keep reading your favorite book without letting your cardio time get in the way. If you’ve ever taken up that unputdownable book which forced you to skip your exercise, or you’ve spent your treadmill time wondering about what happens in the next chapter, you’ll know what we’re talking about.</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">Will I go dizzy trying to keep up with moving text?</a>
          <p>That’s the beauty of it – the text keeps up with you, not the other way around. Our intelligent algorithms utilize a fast screen refresh rate of 60 frames per second (movies are at only 24 frames per sec) to provide a seamless reading experience akin to being at rest.</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">Why not Google glass?</a>
          <p>Different technology and application! Google Glass is meant to read only few lines of content at a time such as directions or text messages. It displays the content above the user's right eye. That’s normally not where you would keep your book. </p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">Why not a mobile app that uses the front facing camera?</a>
          <p>Yes, we tried that and quickly gave up for many reasons. The experience is much better with hardware. Additional features like remote flipping and fitness tracker are not possible. Also, the battery drains significantly due to the complex algorithms required to deal with different conditions – dim lights, face not in full view, and crowd in subways. You probably have enough trouble keeping that device charged anyway.</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">Is it safe?</a>
          <p>Absolutely! Run-n-Read emits less than 1/10,000th the same amount of radiation as a cell phone and only a small fraction of what we humans get from using a Bluetooth headset. Our devices will ship FCC certified and well within the specifications followed by any other product considered to be safe.</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">Can it work with TV screens on treadmills?</a>
          <p>No. Well, not at this point in time. However, we have discussions in flight with multiple gyms and equipment manufacturers to make this a reality. Also, we are still figuring out how to hack a TV…</p>
        </div>
      </li>
    </ul>
    <ul class="col2">
      <li>
        <div>
          <a href="#">How exactly do I use this device?</a>
          <p>It’s simple. We provide the device and a mobile application. You load up your current reading material on your favorite mobile device using our free app and clip on the device to your shirt/headband. Tap on the Run-n-Read option, and hey presto! The text will move in sync with your head so you never lose focus – on the words, or your workout.</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">It all sounds good. But does this really work?</a>
          <p>Ah, you are not alone. Run-n-Read is an experience product – you will have to try it on to appreciate its effectiveness! Till then, this might help. We have had tested with many people on different machines and everyone had that “aha” moment!</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">Doesn’t Samsung S4 have some eye tracking technology?</a>
          <p>Samsung S4 uses front-facing camera to follow a user's eye movements. This feature is primarily used to interact with the phone such as navigation and pausing/playing a video. To enable run-n-read, S4 camera should be able to follow the eyes (or head) accurately and in real time translate it to the text movement.</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">Alright, how about audio books?</a>
          <p>If you’re like us, and prefer to absorb and visualize a story through text/images, you’ll know that audio can’t provide the same experience. Based on our research, many people love to read while exercising, but use audio books because they do not have a choice. Now, they do. Besides, have you tried turning a few pages forward or backward in audio? Or flipping through pages to read highlights?</p>
        </div>
      </li>
      <li>
        <div>
          <a href="#">How does it calculate the calories burned?</a>
          <p>Our device accounts for your height and weight (user input) along with the number of steps taken in a given time to calculate the calories burned. The calorie calculation is performed every few seconds to accurately capture the difference in pace during the total time period.</p>
        </div>
      </li>
<!--
      <li>
        <div>
          <a href="#">I have had many bad experiences with other crowdfunding platforms. Will your devices ship on time or ship at all?</a>
          <p>We have partnered with Dragon Innovation to address that exact concern. They have a track record of making volume manufacturing happen. All fixed/surprise costs, supplier needs, design reviews, and certification requirements have been vetted out by both our teams. We are ready!</p>
        </div>
      </li>-->
    </ul>
  </div>
</div>
<!--
<div class="big_wrapper" id="shipping">
  <div class="wrapper clearfix">
    <div class="ships">
      <h2> </h2>
      <p> </p>
    </div>
    <div class="preorder">
      <a href=""><span>Subscribe to our newsletter</span><span class="arrow"></span></a>


      <div style="margin-top:55px;">
	</br><p></p>  <p style="font-size:12pt; line-height:25px;"> </p>
    </div></div>
  </div>
</div>
-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.async = true;
  js.src = "../connect.facebook.net/en_US/all.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <div class="footer">
  <div class="wrapper clearfix">
    <ul class="clearfix">
      <li>&copy; 2013 Weartrons Labs.</li>
      <li class="links">
        <ul>

          <li><a href="http://www.weartrons.com/files/mediakit.zip">Media Kit</a></li>
          <li class="last"><a href="mailto:info@weartrons.com">Questions? Contact Us</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

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
<noscript><div class="statcounter"><a title="create counter"
href="http://statcounter.com/free-hit-counter/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/8899562/0/acc8d206/1/"
alt="create counter"></a></div></noscript>



</body>
</html>
