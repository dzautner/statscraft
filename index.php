<?php
 if (isset($_REQUEST['email']))  {
    //Email information
    $admin_email = "info@statscraft.org.il";
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $feedback = $_REQUEST['feedback'];

    if (!$email || !$name || !$phone || !$feedback) {
      $mailError = true;
    } else {
      //send email
      try {
        mail($admin_email, "Feedback from Statscraft", "phone: $phone\nname: $name\nfeedback:\n$feedback", "From:" . $email);
        $mailSent = true;
      } catch (Exception $e) {
        $mailError = true;
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>StatsCraft</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/social-share-kit.css">

  <link rel="icon" href="favicon.png">
  <link rel="apple-touch-icon" href="favicon.png">
  
  <!-- Application-specific meta tags -->
  <meta name="application-name" content="Application Name">
  <meta name="msapplication-TileColor" content="">
  <meta name="msapplication-TileImage" content="">
  <meta name="msapplication-square150x150logo" content="">
  <meta name="msapplication-square310x310logo" content="">
  <meta name="msapplication-square70x70logo" content="">
  <meta name="msapplication-wide310x150logo" content="">
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:url" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
</head>
<body>
<header>
  <div class="top-head row">
    <div class="logo">
      <a href="#" title="Statscraft Monitoring Conference"><img src="images/logo.png" alt="StatsCraft"></a>
    </div>
    <div class="menu-wrap menu-icons">
      <a href="#" title="Menu" id="btn-menu" class="btn-menu toggle-switch toggle-switch-ht" data-icon-name="hamburgerCross"><span>Toggle menu</span></a>
    </div>
    <div id="menu" class="menu">
      <nav>
        <ul>
          <li> <a href="#agenda">Agenda</a> </li>
          <li> <a href="#tickets">Tickets</a> </li>
          <li> <a href="#venue">Venue</a> </li>
          <li> <a href="#about">About</a> </li>
          <li> <a href="#sponsors">Sponsors</a> </li>
          <li> <a href="#contact">Contact</a> </li>
        </ul>
      </nav>
    </div><!-- menu -->
  </div><!-- .top-head ends -->
  <div class="banner">
    <div class="container">
      <h1>Monitoring conference for Ops, developers, PMs and everyone else</h1>
      <p><a href="https://twitter.com/statscraft" style="color:white;">#statscraft</a></p>
    </div>
  </div><!-- .banner ends -->
</header><!-- header ends -->

<div class="important-note">
	<span>30<sup>th</sup> July 2015, Google Campus TLV</span> 
  <a href="#tickets" class="ticket-btn" title="Get Tickets">get tickets</a>
</div><!-- .important-note ends -->

<main role="main">
  <div class="container about">
    <h2 id="about">About Statscraft</h2>
    <div class="row">
      <div class="six columns">
        <h3>This conference is all about making monitoring easier, more accessible and more productive</h3>
        <div class="about-topics-image">
          <div class="imageContainer">
            <img src="./images/about-topics.png">
          </div>
        </div>
      </div>
      <div class="six columns">
        <p class="description">Monitoring is important. Without monitoring, there can be no feedback, no planning and no improvement. Monitoring is crucial for detecting problems, optimizing performance, capacity planning, improving user experience, improving business impact... the list goes on an on.
        Yet in many companies, monitoring is an afterthought, neglected and underrated. Companies spend very little time and effort on it, create bad monitoring and then go on to ignore the data they collected completely. We often hear that "monitoring is hard" - and it can be, unless we do something about it.
        </p>
      </div>
    </div>
    
   
    
    <div class="agenda" id="agenda">
      <h2>Agenda</h2>
      <h4 class="language">*this conference is Kosher and all talks are in biblical Hebrew</h4>
      <div class="row first-border">
         <div class="two columns">
            <span class="time">09:00 - 09:45</span>
            <span class="item talk">Talk</span>
         </div>
         <div class="nine columns">
            <a href="#" class="toggle ">toggle</a>
            <h1>The Problem (keynote)</h1>
            <span class="author">Nir Cohen</span>
            <div class="comment-box-wrap" style="display:none;">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="Nir Cohen">Nir Cohen</a></h2>
                  <span class="designation">Ops engineer @ Gigaspaces</span>
                  <p>Nir Cohen was the Ops Team Leader at fring and now works for Gigaspaces. He's a relatively short, brown eyed human being who loves animals and holds true to Ethics as a life path. He also likes to walk long distances, breathe and eat lettuce salad. You can find Nir at work, on the street or at home.</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
            </div>
         </div>
      </div><!-- .row ends -->
      
      <div class="row">
         <div class="two columns">
            <span class="time">10:00 - 10:45</span>
            <span class="item talk">Talk</span>
         </div>
         <div class="nine columns">
            <a href="#" class="toggle">toggle</a>
            <h1>Intro to Monitoring</h1>
            <span class="author">Yoav Abrahami</span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="Yoav Abrahami">Yoav Abrahami</a></h2>
                  <span class="designation">Chief Architect @ Wix</span>
                  <p>Yoav Abrahami is the Chief Architect at Wix.com, working with developers and operations on building wix future products as well as accelerating and improving development processes. Prior to joining Wix.com, Yoav was an Architect at Amdocs Cramer OSS division. Yoav has a MS in Physics and BS in Computer Science from Tel Aviv University.</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
            </div>
         </div>
      </div><!-- .row ends -->

      <div class="row">
         <div class="two columns">
            <span class="time">10:45- 11:15</span>
         </div>
         <div class="nine columns">
            <h1>Break</h1>
            <span class="author"></span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  
                </div>
              </div>
              <h3></h3>
              <p class="discription"></p>
            </div>
         </div>

      </div><!-- .row ends -->


      <div class="row">
         <div class="two columns">
            <span class="time">11:15 - 11:45</span>
            <span class="item talk">Talk</span>
         </div>
         <div class="nine columns">
            <a href="#" class="toggle">toggle</a>
            <h1>Monitoring with Riemann</h1>
            <span class="author">Itai Frenkel</span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="Itai Frenkel">Itai Frenkel</a></h2>
                  <span class="designation">Job title @ Forter</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
            </div>
         </div>
      </div><!-- .row ends -->

      <div class="row">
         <div class="two columns">
            <span class="time">12:15 - 13:00</span>
            <span class="item talk">Talk</span>
         </div>
         <div class="nine columns">
            <a href="#" class="toggle">toggle</a>
            <h1>Monitoring - A Top down approach</h1>
            <span class="author">Shachar Kedar</span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="Shahar Kedar">Shahar Kedar</a></h2>
                  <span class="designation">Job title @ BigPanda</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="discription">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
            </div>
         </div>
      </div><!-- .row ends -->

      <div class="row">
         <div class="two columns">
            <span class="time">13:00 - 14:00</span>
         </div>
         <div class="nine columns">
            <h1>Lunch</h1>
            <span class="author"></span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  
                </div>
              </div>
              <h3></h3>
              <p class="discription"></p>
            </div>
         </div>
      </div><!-- .row ends -->

      <div class="row multiple">
         <div class="two columns">
            <span class="time">14:00 - 16:00</span>
            <span class="item workshop">WorkShop</span>
         </div>
         <div class="nine columns first-border">
            <a href="#" class="toggle">toggle</a>
            <h1>Data analysis with Graphite</h1>
            <span class="author">Avishai Ish-Shalom</span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="Avishai Ish-Shalom">Avishai Ish-Shalom</a></h2>
                  <span class="designation">CTO @ Fewbytes</span>
                  <p>Avishai is a veteran ops and a survivor of many prod skirmishes. Currently masquerading as the CTO of Fewbytes - a consulting company for Ops and architecture</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="description">This workshop</p>
            </div>
         </div>

         <hr class="separator"> 
         <div class="nine columns">
            <a href="#" class="toggle">toggle</a>
            <h1>Monitoring with ELK</h1>
            <span class="author">TBD</span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="TDB">TDB</a></h2>
                  <span class="designation">TBD</span>
                  <p>TBD</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
            </div>
         </div>
      </div><!-- .row ends -->

      <div class="row">
         <div class="two columns">
            <span class="time">16:00 - 16:30</span>
         </div>
         <div class="nine columns">
            <h1>Break</h1>
            <span class="author"></span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  
                </div>
              </div>
              <h3></h3>
              <p class="discription"></p>
            </div>
         </div>
      </div><!-- .row ends -->

      <div class="row multiple">
         <div class="two columns">
            <span class="time">16:30 - 18:30</span>
            <span class="item workshop">WorkShop</span>
         </div>
         <div class="nine columns first-border">
            <a href="#" class="toggle">toggle</a>
            <h1>Linux Metrics</h1>
            <span class="author">Nati Cohen-Tzemach</span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="Avishai Ish-Shalom">Nati Cohen-Tzemach</a></h2>
                  <span class="designation">Solütions Engineers @ Fewbytes</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="description">This workshop</p>
            </div>
         </div>

         <hr class="separator"> 
         <div class="nine columns">
            <a href="#" class="toggle">toggle</a>
            <h1>Monitoring for Developers</h1>
            <span class="author">Roman Landenberg</span>
            <div class="comment-box-wrap">
              <div class="comment-box row">
                <div class="avatar">
                  <img src="images/avatar2.jpg" alt="Avatar">
                </div>
                <div class="eight columns">
                  <h2><a href="#" title="TDB">Roman Landenberg</a></h2>
                  <span class="designation">Roman Landenberg</span>
                  <p>TBD</p>
                </div>
              </div>
              <h3>Summary</h3>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare lorem ut erat consequat facilisis. Nullam semper vel nibh ac pellentesque. Nam condimentum cursus tortor a facilisis. Nam accumsan a dolor vitae scelerisque. Fusce lacus neque, efficitur et finibus at, facilisis eu diam.</p>
            </div>
         </div>
      </div><!-- .row ends -->

    </div><!-- .agenda ends -->
  </div>
  
  <div class="ticket-section" id="tickets">
    <div class="container">
      <h2>Get your ticket!</h2>
      <p>So you'd like to be a part of Statscaft 2015? <span>We’d love to see you there!</span></p>
      <div class="row">
        <div class="ticket-alert">
          <div class="left-tickets">
            <strong>189</strong> 
            <span>Tickets left</span>
          </div>

          <div class="your-ticket">
            <span>Get Yours</span>
          </div>
        </div>
      </div>
      <div>
        <p>Tell your friends</p>
        <div class="ssk-group ssk-lg  ssk-count">
          <a href="" class="ssk ssk-facebook"><div class="ssk-num">79</div></a>
          <a href="" class="ssk ssk-twitter"><div class="ssk-num">104</div></a>
          <a href="" class="ssk ssk-google-plus"><div class="ssk-num">21</div></a>
        </div>
      </div>
<!--      <div class="share">
        <p>Tell your friends</p>
        <a href="#" title="Twitter"><img src="images/twitter.png" alt="Twiiter"></a>
        <a href="#" title="Facebook"><img src="images/facebook.png" alt="Facebook"></a>
        <a href="#" title="Google"><img src="images/google.png" alt="Google"></a>
      </div>-->
    </div><!-- .container ends -->
  </div><!-- .ticket-section ends -->
  
  <div id="venue" class="venue text-center">
    <div class="container">
      <h2>Venue</h2>    
      <h3>Google Campus TLV</h3>
      <address>Electra Tower, 98 Yigal Alon St. Tel Aviv, 34<sup>th</sup> Floor</address>
      
      <div id="canvas1" class="map">
        <iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6762.142146902201!2d34.7942164302785!3d32.06732635798904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4b9f0f7ed125%3A0xcd0f8fa9a029cdd8!2sElectra+Tower!5e0!3m2!1sen!2sil!4v1430820774639" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div><!-- venue -->
  <div class="committee">
    <h2>Organizing Committee</h2>
    <div class="row container">
      <p class="description">
        This conference is a community effort by and for people who do monitoring daily and care about monitoring. The organizing committee are all volunteers and sponsorships cover the direct costs of the conference.
      </p>
    </div>
    <div class="row organizers">
      
      <div class="organizer nir">
        <div class="img"></div>
        <div class="name">Nir Cohen</div>
        <div class="company">(Gigaspaces)</div>
      </div>

      <div class="organizer michael">
        <div class="img"></div>
        <div class="name">Michael Sverdiik</div>
        <div class="company">(Gigaspaces)</div>
      </div>

      <a href="https://il.linkedin.com/in/shaharke" target="_blank">
      <div class="organizer shahar">
        <div class="img"></div>
        <div class="name">Shahar Kedar</div>
        <div class="company">(BigPanda)</div>
      </div>
      </a>
      
      <br/>
      <a href="https://il.linkedin.com/in/erikzaadi" target="_blank">
      <div class="organizer erik">
        <div class="img"></div>
        <div class="name">Erik Zaadi</div>
        <div class="company">(BigPanda)</div>
      </div>
      </a>

      <a href="https://il.linkedin.com/in/amitcohe" target="_blank">
      <div class="organizer amit">
        <div class="img"></div>
        <div class="name">Amit Cohen</div>
        <div class="company">(Fewbytes)</div>
      </div>
      </a>

      <a href="https://il.linkedin.com/in/nukemberg" target="_blank">
      <div class="organizer avishai">
        <div class="img"></div>
        <div class="name">Avishai Ish-Shalom</div>
        <div class="company">(Fewbytes)</div>
      </div>
      </a>

    </div>
  </div>
  <div class="sponsors" id="sponsors">
    <div class="container">
      <h2>Sponsors</h2>
      <ul>
        <li><img src="images/sponsors-bigpanda.png" alt="Bigpanda"></li>
        <li><img src="images/sponsors-ropes.png" alt="Ropes"></li>
      </ul>
    </div>
  </div><!-- .sponsors ends -->  
  
  <div id="contact" class="contact text-center">
    <div class="container">
      <h2>Contact</h2>
      <form method="post" id="contact-form" class="contact-form">
        <div class="inline">
          <div class="form-row">
            <input type="text" id="contact-name" name="name" class="form-control" placeholder="Name">
          </div><!-- form-row -->
          
          <div class="form-row">
            <input type="email" id="contact-email" name="email" class="form-control" placeholder="Email">
          </div><!-- form-row -->
          
          <div class="form-row">
            <input type="tel" id="contact-phone" name="phone" class="form-control" placeholder="Phone">
          </div><!-- form-row -->
        </div><!-- inline -->
        <div class="form-row">
          <textarea id="contact-feedback" name="feedback" class="form-control" placeholder="Sponsor us - Ask us - Provide feedback"></textarea>
        </div><!-- form-row -->
        <input type="submit" id="contact-submit" class="contact-submit" name="submit" value="Send"> 
        <?php if($mailSent): ?><h3 class="emailSuccess">Message Sent!</h3><?php endif; ?>
        <?php if($mailError): ?><h3 class="emailError">Error! Please verify all of the fields and try again.</h3><?php endif; ?>
      </form>

    </div>
  </div><!-- container -->
</main><!-- main ends -->

<footer role="contentinfo">
  <div class="footer-bottom clearfix">
    <div class="logo">
      <a href="#" title="Statscraft Monitoring Conference"><img src="images/footer-logo.png" alt="Statscraft"></a>
    </div>
    <div class="footer-info">
	    <p>Tel-Aviv July 30<sup>th</sup> </br>2015</p>
    </div>
    <ul class="social">
      <li><a href="https://www.facebook.com/" title="Facebook" class="facebook">Facebook</a></li>
      <li><a href="https://www.twitter.com" title="Twitter" class="twitter">Twitter</a></li>
      <li><a href="#" title="Mail" class="mail">Mail</a></li>
    </ul>
    <br><br><br><br><a class="cocLink" onclick="return popitup('coc.html')" href="coc.html">Code of Conduct</a>
  </div>
</footer><!-- footer ends -->

<script src = "js/jquery-1.11.2.min.js"></script> 
<script src="js/modernizr-2.8.3.min.js"></script>
<script src = "js/menu.js"></script> 
<script src = "js/main.js"></script>
<script src = "js/social-share-kit.js"></script>
<script>
  $('.toggle, .toggle + h1').click(function(){
    $(this).parent().children('.comment-box-wrap').slideToggle('slow');
    $(this).toggleClass('active');
    return false
  });
  SocialShareKit.init();
</script>
  
</script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
 --> 
</body>
</html>
