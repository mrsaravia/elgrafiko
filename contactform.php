<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@elgrafiko.com";
    $email_subject = "ElGrafiko Contact Form";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['firstName']) ||
        !isset($_POST['lastName']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subjectEmail']) ||
        !isset($_POST['Message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $firstName = $_POST['firstName']; // required
    $lastName = $_POST['lastName']; // required
    $email = $_POST['email']; // required
    $subjectEmail = $_POST['subjectEmail']; // required
    $Message = $_POST['Message']; // required	
     
    $error_message = "";
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($firstName)."\n";
    $email_message .= "Last Name: ".clean_string($lastName)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Subject: ".clean_string($subjectEmail)."\n";
    $email_message .= "Message: ".clean_string($Message)."\n";
     
     
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">

	<title>elGrafiko | about us | graphic and web solutions</title>
	<link rel="stylesheet" type="text/css" media="all" href="css/page.css" />
    <link rel="stylesheet" media="all" type="text/css" href="css/stylesheet.css" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>

<body id="sparated_body">
	<div id="page_top">
		<div class="header">
			<div id="logo"><a href="index.html"><img alt="logo" src="images/elGrafiko_logo.png" border="0"></a></div>
			<div id="menu">
				<ul>
					<li><a href="websites.html">websites</a></li>
					<li><a href="graphics.html">graphics</a></li>
					<li><a href="illustrations.html">illustrations</a></li>
					<li><a href="packaging.html">packaging</a></li>
					<li><a href="animations.html">animations</a></li>
					<li class="project_section">about us</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="page_project">
		<div id="history">
			<div class="profile">
				<div class="individual">
					<div class="designer_name">designer: diana levin</div>
					<div class="project_image">
						<img src="images/profile_dl.jpg" />
					</div>
				</div>
				<div class="seperater">
					<img src="images/hp_3dots.png">
				</div>
				<div class="individualContact">
					<p>email: diana@elgrafiko.com</p>
					<p>phone: 416 820 1709</p>
					<p>hometown: toronto, on</p>
					<p><a href="portfolio/cv_dlevin.pdf" target="_blank">download my cv</a></p>
					<p>	<a class="linkedin" href="https://www.linkedin.com/in/levindiana/" title="linkedin" target="_blank"></a>
						<a class="facebook" href="https://www.facebook.com/Diana.L.S" title="facebook" target="_blank"></a></p>
				</div>
			</div>
			<div class="whatWeDo">
				<h1>how did we get to where we are today?</h1>
				<p>In 2002, during a three year program for Graphic Design at Dawson college. We became good friends and great design partners. We both have different styles and techniques in how to design projects concepts but always agreed in how to reach that goal and in how design is moving towards in life. With our knowledge of the latest software, techniques, coding languages and always having that curiosity for new ways of designing, we always amaze each others with what we produce. This is the main reason why elGrafiko was born and founded in 2005. During these years we have worked with various clients and companies. We've had a very close professional and personal relationship, so we always find our inspiration from bouncing ideas between each other for our uniqueness in our timeless design.</p>
				<h1>what is our specialty?</h1>
				<p>
					Corporate identity (logo, stationary, business cards,...)<br>
					Page layouts (magazines, catalogs, annual reports,...)<br>
					Websites (static pages, blogs, e-shops,...)<br>
					Promotional items (invitation cards, brochures,...)<br>
					Packaging (labels, boxes,...)
				</p>	
			</div>
			<div class="profile">
				<div class="individual">
					<div class="designer_name">designer: michael r saravia</div>
					<div class="project_image">
						<img src="images/profile_ms.jpg" />
					</div>
				</div>
				<div class="seperater">
					<img src="images/hp_3dots.png">
				</div>
				<div class="individualContact">
					<p>email: michael@elgrafiko.com</p>
					<p>phone: 514 804 9538</p>
					<p>hometown: montreal, qc</p>
					<p><a href="portfolio/cv_msaravia.pdf" target="_blank">download my cv</a></p>
					<p>	<a class="linkedin" href="https://www.linkedin.com/in/msaravia/" title="linkedin" target="_blank"></a>
						<a class="behance" href="http://www.behance.net/msaravia" title="behance" target="_blank"></a>
						<a class="twitter" href="https://twitter.com/msaravia" title="twitter" target="_blank"></a></p>
				</div>
			</div>
		</div>
		<div class="seperater">
			<img src="images/hp_3dots.png">
		</div>
		<div id="history">
			<!-- SUCCESS FORM MESSAGE -->
			<div style="text-align:center; font-family:Arial, sans-serif;">
				<h1>Thank you!</h1>
				<p>We will be in contact with you shortly.</p>
			</div>
			<!-- SUCCESS FORM MESSAGE -->
		</div>
		<div class="footer">
		</div>
		<div style="clear:both;">
	</div>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-5559101-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>

</html>
 
<?php
}
?>