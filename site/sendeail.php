<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
              
        
        <link rel="stylesheet" type="text/css" href="css/msff2.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/msff1.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/msff3.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/mustard_seed_faith_foundation.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/msff4.css" media="screen" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.cycle.all.2.72.js" type="text/javascript"></script>
        <script src="js/jquery.cookie.js" type="text/javascript"></script>
        <script src="js/my-jquery.js" type="text/javascript"></script>
        <title>Mustard Seed Faith Foundation, Jackson, MS</title>

        <meta name="title" content="Mustard Seed Faith Foundation (MSFF) is a 501- (c) 3 non-profit organization. MSFF began in March 2011 in Madison, Mississippi, USA as a faith-based community of families and friends committed to actively caring for, nurturing and uplifting of the vulnerable and marginalized populations, forgotten by society through offering creative outreach programs in the rural areas. " />
        <meta name="keywords" content="mustardseedfaithfoundation" />
        <meta name="description" content="Mustard Seed Faith Foundation (MSFF) is a 501- (c) 3 non-profit organization. MSFF began in March 2011 in Madison, Mississippi, USA as a faith-based community of families and friends committed to actively caring for, nurturing and uplifting of the vulnerable and marginalized populations, forgotten by society through offering creative outreach programs in the rural areas. " />
        <meta name="date" content="2011-04-27" />
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17843643-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body>
        <div id="topHederFull-1">
            <div class="container-12">
                <div class="grid-12">

                    <div class="header-top">
                        <div class="logo-holder"><img src="images/site2-logo.png" alt="logo" /></div>
                        <div class="menu-holder">
                            <ul id="topMenu">
                                  <li><a href="donate.html">Donate</a></li>
                                <li><a href="newsletter.html">Newsletter</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <ul id="site2-mainMenu">

                                <li id="menuitem-196"><a href="http://www.mustardseedfaithfoundation.org">Home</a></li>
                                <li id="menuitem-195"><a href="about.html">About</a></li>
                                <li id="menuitem-197"><a href="mission.html">Mission</a></li>
                                <li id="menuitem-209"><a href="values.html">Core Values</a></li>
                                <li id="menuitem-198"><a href="goals.html">Goals</a></li>
                                <li id="menuitem-199"><a href="gallery.html">Gallery</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
               

		
		<script language="JavaScript" type="text/javascript">
		document.getElementById('main').style.visibility = 'hidden';
		</script>
                <div class="clear"></div>
          </div>
        </div>
        
        <div id="bodyContent">
            <div class="container-12">

              <div class="grid-12">
                    <div class="slide-top-text">For verily I say unto you, If ye have faith as a grain of mustard seed, ye shall say unto this mountain, Remove hence to yonder place; and it shall remove; and nothing shall be impossible unto you................Matthew 17:20</div>
                    <div class="homeBlockFullSetHolder">
                    <div class="homeBlockFullSetTop">
                      <div id="alert" class="grid_12">
 <div id="alert" class="grid_12">
    

<?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];
$attn = $_POST['attn'];


if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ;
$subject = $attn;

$notes = stripcslashes($notes);

$message = " $todayis [EST] \n
First Name: $attn \n
Message: $notes \n
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n
";

$from = "From: $visitormail\r\n";


mail("vineethtuluri@gmail.com", $subject, $message, $from);

?>

<p align="center">&nbsp;
</p>
<p align="center"><img src="images/imp for others.jpg" width="389" height="279" /></p>
<p align="center">We appreciate your Concern. We will get back to you soon. Have a great time. May God be with you <br />
  <br /><br />
  <a href="http://www.mustardseedfaithfoundation.org">Back</a>
</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
  </div>
    <p>
    </p>
</div>
                    <div class="clear"></div>
                        </div>
                        <div class="homeBlockFullSetBottom">
                          <div class="homeBlockFull alpha">
                            <h1>Get Connected</h1>
                            <div class="homeBlockFullImg">
                              <p class="bodytext"><a href="" ></a></p>
                            </div>
                            <div class="homeBlockFullText">
                              <p class="bodytext">MSFF is committed to providing a safe and secure environment for all who enter our doors and participate in ministries and activities associated with our church. We therefore require that all who either serve or who are employed by Stonebriar undergo a criminal background check.<br />
                                <a href="get_involved.html">Connect now</a></p>
                            </div>
                          </div>
                          <div class="homeBlockFull">

                            <h1>MSSF's Map</h1>
                                <div class="homeBlockFullImg">
                                    <p class="bodytext"><a href=""></a></p>
                                </div>
                                <div class="homeBlockFullText">
                                <a href="google_map.html">
                            <img  src="images/723932.jpg" width="290" height="105"/> </a>
                                    <p class="bodytext">Mustard Seed Faith Foundation map. See what's what and where it is in MSSF. View Mustard Seed Faith Foundation ... <br /><a href="google_map.html" >Map</a></p>
                                </div>

                          </div>
                          <div id="rightCntr">
    <!--  / FOLLOW BOX \ -->
    <div class="followBox">
		<div class="twitter">
		</div>
        <div class="social">
		<h4><span>follow us here</span></h4>
		<ul>
		<li><a href="http://www.facebook.com/mustardseedfaithfoundation" title="Facebook">Facebook</a></li>
		<li><a href="http://www.flickr.com/photos/mustardseedfaithfoundation/"  title="Flickr" class="flickr">Flickr</a></li>
        <li><a href="http://mustardseedfaithfoundation.posterous.com/" title="Posterous" class="posterous">Posterous</a></li>
		<li><a href="http://www.twitter.com/in/mustardseedfaithfoundation" title="Tweet us" class="linkedin">Tweet us</a></li>
		<li><a href="http://friendfeed.com/mustardseedfaithfoundation" title="Friend Feed" class="friendfeed">Friendfeed</a></li>
		<li><a href="http://digg.com/users/mustardseedfaithfoundation" title="Digg" class="digg">Digg</a></li>
		<li><a href="http://delicious.com/mustardseedfaithfoundation.com" title="Delicious" class="delicious">Delicious</a></li>
		</ul>
    <span>
	</div>
	</div>
	<!--  \ FOLLOW BOX / -->
	</div>
                            <div class="clear"></div>
                      </div>
                </div>
                </div>
                <div class="clear"></div>
          </div>
        </div>
        <div id="footerFull">
            <div class="container-12">
               <div class="grid-12">
                    
                    <div class="footer-right">

                    
                        <div class="quick_contact">
                          <h2>Contact</h2>
                            <p class="bodytext"><strong>Mustard Seed Faith Foundation</strong><br /> 
                            <p class="bodytext"><strong>132 Windsor Hills Dr</strong><br /> 
                            <p class="bodytext"><strong>Madison </strong><br /> 
                             <p class="bodytext"><strong>Mississippi 39110</strong><br /> 
                            <p class="bodytext"><strong>USA</strong><br /> 
                            <p class="bodytext"><strong>Ph: 601.898.3979</strong><br /> 
                            <a href="mailto:jsmaddirala@gmail.com">jsmaddirala@gmail.com</a></p>
                             <a href="mailto:info@mustardseedfaithfoundation.org">info@mustardseedfaithfoundation.org</a></p>

                      </div>
                    </div>
                    <div class="footer-left">
                        <div class="footer-left-1">
                            <h2>With Lots of Gratitude</h2>
                            <p class="bodytext">Thank you for visiting us. Mustard Seed Faith Foundation is a dynamic organization founded by Dr. James Samuel Maddirala. Mustard Seed Faith Foundation meets you right where you are. Whether you are just curious about church and God or you are a committed follower of Christ, you are welcome here. May God bless you. </p>
                        </div>

                        <div class="footer-left-2">
                            <h2>Sitemap</h2>
                            <ul>
                                <li><a href="index.html" title="Home" class="internal-link">Home</a></li>
                                <li><a href="about.html" title="Know More About Us" class="internal-link">About </a></li>
                                <li><a href="" title="Our Mission and Vision" class="internal-link">Mission</a></li>
                                <li><a href="" title="Our Core Values" class="internal-link">Core Values</a></li>
                                <li><a href="" title="Our Gallery" class="internal-link">Gallery</a></li>
                                 <li><a href="" title="Newsletter" class="internal-link">Newsletter</a></li>
                                <li><a href="" title="Donate" class="internal-link">Donate</a></li>
                                <li><a href="" title="Email" class="internal-link">Email</a></li>
                                <li class="last"><a href="" title="Goals" class="internal-link">Goals</a></li>
                            </ul>
                            <ul>
                                
                               
<li><a href="" title="Get Involved" class="internal-link">Get Involved</a></li>
                                <li><a href="contact.html" title="Contact Us" class="internal-link">Contact</a></li>
                                <li class="last"><a href="" title="Our Services" class="internal-link">Services</a></li>
                            </ul>
                            
                        </div>

                        <div class="footer-left-3">
                            
                            <p class="bodytext"> © 2011 Copyright & Terms of Use @ mustardseedfaithfoundation.org </p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
          </div>
        </div>

       
        </div>
        
        
    </body>
</html>