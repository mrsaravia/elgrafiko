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
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['Message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $firstName = $_POST['name']; // required
    $email = $_POST['email']; // required
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
     
    $email_message .= "Name: ".clean_string($firstName)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
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
    	<link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
              function filterPath(string) {
              return string
                .replace(/^\//,'')
                .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
                .replace(/\/$/,'');
              }
              var locationPath = filterPath(location.pathname);
              var scrollElem = scrollableElement('html', 'body');
             
              $('a[href*=#]').each(function() {
                var thisPath = filterPath(this.pathname) || locationPath;
                if (  locationPath == thisPath
                && (location.hostname == this.hostname || !this.hostname)
                && this.hash.replace(/#/,'') ) {
                  var $target = $(this.hash), target = this.hash;
                  if (target) {
                    var targetOffset = $target.offset().top;
                    $(this).click(function(event) {
                      event.preventDefault();
                      $(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
                        location.hash = target;
                      });
                    });
                  }
                }
              });
             
              // use the first element that is "scrollable"
              function scrollableElement(els) {
                for (var i = 0, argLength = arguments.length; i <argLength; i++) {
                  var el = arguments[i],
                      $scrollElement = $(el);
                  if ($scrollElement.scrollTop()> 0) {
                    return el;
                  } else {
                    $scrollElement.scrollTop(1);
                    var isScrollable = $scrollElement.scrollTop()> 0;
                    $scrollElement.scrollTop(0);
                    if (isScrollable) {
                      return el;
                    }
                  }
                }
                return [];
              }
             
            });
        </script>
	</head>
    <body>
    	<div class="container">
        	<div class="header">
           		<div class="insideheader">
                    <div class="logo">
                        <a href="#1"><img src="images/logo.png" alt="logo" border="0"></a>
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="#2">socialmedia</a></li>
                            <li><img class="animatedgif" src="images/aniJewel_bl_01.gif" alt="animated gif" border="0"></li>
                            <li><a href="#3">portfolio</a></li>
                            <li><img class="animatedgif" src="images/aniJewel_bl_02.gif" alt="animated gif" border="0"></li>
                            <li><a href="#4">contact</a></li>
                        </ul>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <div class="content">
            	<div class="greetingSec">
                	<div class="flowerlady">
                    	<img class="quote1" src="images/quote1.png" alt="quote 1" border="0">
                    </div>
                </div>
            	<div class="socialSec">
                    <div class="portCont">
                        <div class="instaFeeds">
                            <iframe src="http://snapwidget.com/in/?u=Y2FsbGl0c3ByaW5nfGlufDE3NXwzfDR8fHllc3w2fGZhZGVPdXQ=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:573px; height: 764px" ></iframe>
                        </div>
                    	<div class="twitterFeeds">
                           <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/msaravia" data-widget-id="324213025236193280">Tweets by @msaravia</a>
                            <script>
                                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                            </script>
                        </div>
                        <div class="socialLogo one">
                            <a href="#" target="_blank"><img src="images/lg-Instagram.png"></a>
                        </div>
                        <div class="socialLogo two">
                            <a href="https://twitter.com/valeriagomezs" target="_blank"><img src="images/lg-twitter.png"> @valeriagomezs</a>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            	<div class="portfolioSec">
                	<div class="portCont">
                   	  	<div class="column">
                        	<img src="images/port1.jpg">
                            <img class= "port1" src="images/port2.jpg">
                            <img src="images/port3.jpg">
                      	</div>
                        <div class="column">
                        	<img src="images/port4.jpg">	
                            <img class= "port1" src="images/port5.jpg">
                          	<img class= "port2" src="images/port7.jpg">
                          	<img class= "port3" src="images/port6.jpg">
                            <img src="images/port8.jpg">
                      	</div>
						<div class="column">
                        	<img src="images/port9.jpg">
                            <img class= "port1" src="images/port10.jpg">
							<img src="images/port11.jpg">
                        </div>
                    	<div style="clear:both"></div>
                    </div>
                </div>
            	<div class="contactSec">
                	<div class="contact">
                        <div class="contact2">
                            <div class="bio">
                                <h1 class="contacttitle">
                                    About the Girl
                                </h1>
                                <p class="contactcopy">
                                    Valeria Gomez was borm in Montreal, Canada. As a little girl you would always find that her passion was drawing. She took many art classes growing up and at the age of 16 she started thinking more seriously about becoming a makeup artist. At the age of 18 she was accepted to Make-Up Designory (MUD) in New York, where she took advanced classes in makeup. After graduating, she became a very young regional makeup artist for Chanel, and other makeup counters. She worked for Mac cosmetics for many years and became a top certified artist, while working in the industry. As part of her many other accomplishments, she is often invited to participate in various fashion shows, inculding New York fashion week.
                                </p>
                            </div>
                            <div class="quote2">
                                <img src="images/quote2.png" alt="quote2" border="0">
                            </div>
                    		<div style="clear:both;"></div>
                        </div>
                        <div class="contact2">
                            <div class="formtitles">
                            	<div class="titleBox1">
                            		name
                              	</div>
                            	<div class="titleBox1">
                            		email
                              	</div>
                            	<div class="titleBox1">
                            		message
                              	</div>
                                <form name="contactform" method="post" action="contactform.php" id="theform">
                            	<div class="titleBox2">
                            		<input class="btnstyle" type="submit" value="Send">
                              	</div>
                            </div>
                            <div class="mailing">
                                <div class="titleBox1 formform1">
                                    <input class="formInput" type="text" name="name" id="name">
                                </div>
                                <div class="titleBox1 formform1">
                                    <input class="formInput" type="text" name="email" id="email">
                                </div>
                                <div class="titleBox1 formform1">
                                    <textarea class="formtextarea" cols="44" name="Message" id="Message" rows="22"></textarea>
                                </div>                              
                                </form>
                            </div>
                            <div class="profilephoto">
                                <img src="images/artist.jpg" alt="artist" border="0">
                            </div>
                    		<div style="clear:both"></div>
                        </div>
                        <div class="contact2">
                        	<h1 class="artistinfo">
                            	valeriagomez.s@gmail.com<br/>
                                347<img class="animatedgif" src="images/aniJewel_wh_01.gif"> 654<img class="animatedgif" src="images/aniJewel_wh_02.gif"> 9781<br/>
                                new york, ny
                            </h1>
                        </div>
                    </div>
                </div>                
            </div>
            <div id="1" class="anchor1"></div>
            <div id="2" class="anchor2"></div>
            <div id="3" class="anchor3"></div>
            <div id="4" class="anchor4"></div>
        </div>
    </body>
</html>
 
<?php
}
?>