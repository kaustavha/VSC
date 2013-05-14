
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
 <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">
   
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }
 .photo {
	background-repeat: no-repeat;
	position: relative;
        
          -webkit-background-size: cover;
             -moz-background-size: cover;
               -o-background-size: cover;
                  background-size: cover;
                  width: 100%;
                  height: 200%;
          
      }
      .photo span {
			bottom: 0;
			color: white;			
			font-size: 38px;
			padding: 0px;
			position: absolute;
			text-shadow: 0 2px 0 black, 0 0 10px black;
			width: 100%;
                        height:200%;
		}
      .m1 {
          background-image: url(img/road1.jpg);     
            background-size: cover;
      }
      .m2 {
          background-image: url(img/road2.jpg);
          background-size: cover;
          padding-top: 50px;
          height: 200%;
      }
      .m3 {
      background-image: url(img/road3.jpg);
      }
      .gtxt { 
      font-family: 'Milonga',cursive;
      }
      .featurette-heading { 
      font-family: 'Milonga',cursive;
      }
      .contact{
        margin-top: 150px;
      }
      /* code for css 3d experiment */
    .tdcont {
      width: 300px;
      height: 200px;
      position: relative;
      margin: 0 auto 40px;
      border: 1px solid #CCC;
      -webkit-perspective: 1200px;
         -moz-perspective: 1200px;
           -o-perspective: 1200px;
              perspective: 1200px;
    }  
    #box {
      width: 100%;
      height: 100%;
      position: absolute;
      -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
           -o-transform-style: preserve-3d;
              transform-style: preserve-3d;
      -webkit-transition: -webkit-transform 1s;
         -moz-transition: -moz-transform 1s;
           -o-transition: -o-transform 1s;
              transition: transform 1s;
    }

    #box figure {
      display: block;
      position: absolute;
      border: 2px solid black;
      line-height: 196px;
      font-size: 90px;
      text-align: center;
      font-weight: bold;
      color: white;
    }

    #box.panels-backface-invisible figure {
      -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }

    #box .front,
    #box .back {
      width: 296px;
      height: 196px;
    }

    #box .right,
    #box .left {
      width: 96px;
      height: 196px;
      left: 100px;
    }

    #box .top,
    #box .bottom {
      width: 296px;
      height: 96px;
      top: 50px;
      line-height: 96px;
    }


    #box .front  { background: hsla( 000, 100%, 50%, 0.7 ); }
    #box .back   { background: hsla( 160, 100%, 50%, 0.7 ); }
    #box .right  { background: hsla( 120, 100%, 50%, 0.7 ); }
    #box .left   { background: hsla( 180, 100%, 50%, 0.7 ); }
    #box .top    { background: hsla( 240, 100%, 50%, 0.7 ); }
    #box .bottom { background: hsla( 300, 100%, 50%, 0.7 ); }

    #box .front  {
      -webkit-transform: translateZ( 50px );
         -moz-transform: translateZ( 50px );
           -o-transform: translateZ( 50px );
              transform: translateZ( 50px );
    }
    #box .back   {
      -webkit-transform: rotateX( -180deg ) translateZ(  50px );
         -moz-transform: rotateX( -180deg ) translateZ(  50px );
           -o-transform: rotateX( -180deg ) translateZ(  50px );
              transform: rotateX( -180deg ) translateZ(  50px );
    }
    #box .right {
      -webkit-transform: rotateY(   90deg ) translateZ( 150px );
         -moz-transform: rotateY(   90deg ) translateZ( 150px );
           -o-transform: rotateY(   90deg ) translateZ( 150px );
              transform: rotateY(   90deg ) translateZ( 150px );
    }
    #box .left {
      -webkit-transform: rotateY(  -90deg ) translateZ( 150px );
         -moz-transform: rotateY(  -90deg ) translateZ( 150px );
           -o-transform: rotateY(  -90deg ) translateZ( 150px );
              transform: rotateY(  -90deg ) translateZ( 150px );
    }
    #box .top {
      -webkit-transform: rotateX(   90deg ) translateZ( 100px );
         -moz-transform: rotateX(   90deg ) translateZ( 100px );
           -o-transform: rotateX(   90deg ) translateZ( 100px );
              transform: rotateX(   90deg ) translateZ( 100px );
    }
    #box .bottom {
      -webkit-transform: rotateX(  -90deg ) translateZ( 100px );
         -moz-transform: rotateX(  -90deg ) translateZ( 100px );
           -o-transform: rotateX(  -90deg ) translateZ( 100px );
              transform: rotateX(  -90deg ) translateZ( 100px );
    }


    #box.show-front {
      -webkit-transform: translateZ(  -50px );
         -moz-transform: translateZ(  -50px );
           -o-transform: translateZ(  -50px );
              transform: translateZ(  -50px );
    }
    #box.show-back {
      -webkit-transform: translateZ( -50px ) rotateX( -180deg );
         -moz-transform: translateZ( -50px ) rotateX( -180deg );
           -o-transform: translateZ( -50px ) rotateX( -180deg );
              transform: translateZ( -50px ) rotateX( -180deg );
    }
    #box.show-right {
      -webkit-transform: translateZ( -150px ) rotateY(  -90deg );
         -moz-transform: translateZ( -150px ) rotateY(  -90deg );
           -o-transform: translateZ( -150px ) rotateY(  -90deg );
              transform: translateZ( -150px ) rotateY(  -90deg );
    }
    #box.show-left {
      -webkit-transform: translateZ( -150px ) rotateY(   90deg );
         -moz-transform: translateZ( -150px ) rotateY(   90deg );
           -o-transform: translateZ( -150px ) rotateY(   90deg );
              transform: translateZ( -150px ) rotateY(   90deg );
    }
    #box.show-top {
      -webkit-transform: translateZ( -100px ) rotateX(  -90deg );
         -moz-transform: translateZ( -100px ) rotateX(  -90deg );
           -o-transform: translateZ( -100px ) rotateX(  -90deg );
              transform: translateZ( -100px ) rotateX(  -90deg );
    }
    #box.show-bottom {
      -webkit-transform: translateZ( -100px ) rotateX(   90deg );
         -moz-transform: translateZ( -100px ) rotateX(   90deg );
           -o-transform: translateZ( -100px ) rotateX(   90deg );
              transform: translateZ( -100px ) rotateX(   90deg );
    }




    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {          
      margin:0;
      left: 0;
      right: 0;
      z-index: 10;    
     }    
     .navbar-wrapper-stuck {          
      position: fixed;
      top:0;
      margin:0;
      left: 0;
      right: 0;
      z-index: 10;    
     }    
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }
    .btn-success {      
       float:right; !important
       background-color
    }
      .navbar-inner {
        border-radius: 0;
        margin: 0px 0;
        background-color: rgba(204, 204, 204, .5);
      }
      .circle {
        border-radius:50%;
        margin-bottom: -60px;
        width: 100px;
        height: 100px;
        font-size: 30px;
        text-align: bottom;

      }

    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 0px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 0px 0; /* Space out the Bootstrap <hr> more */      
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -85px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: 0px 0;
        background-color: #a3a3a3;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin:0 auto;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }
      .body {          
      }     
      .stickit {
       position: fixed;
       top: 0;
      }
      .stickit-end {
       bottom: 40px;
       position: absolute;
       right: 0;
      }
      .photo {
	background-attachment: fixed;
	
	background-repeat: no-repeat;
	
	position: relative;
        z-index: -1;     
      }
      .photo span {
			bottom: 0;
			color: white;
			display: block;
			left: 50%;
			margin-left: -640px;
			font-size: 38px;
			padding: 10px;
			position: absolute;
			text-shadow: 0 2px 0 black, 0 0 10px black;
			width: 1280px;
		}
      .m {
          background-images: url(img/marketing.jpg);          
      }
      .team {
          backgroun-images: url(img/team.jpg);          
      }
      .contact {
      background-images: url(img/contact.jpg);
    }   
    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body data-spy="scroll" data-target=".navbar">



   
      <div class="body">
<!-- css 3d experiment -->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>We empower SMBs!</h1>
              <p class="lead">Our innovative site generator lowers the barrier for entry to a web-presence for small business owners.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

 <!-- NAVBAR
    ================================================== -->
  
        
     <div class="navbar-wrapper" id="nav_stick">
      
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Project name</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="#road" id="rd" data-toggle="tooltip" title="The road to success"><i class="icon-road"></i></a></li>
                <li><a href="#about" id="abt" data-toggle="tooltip" title="Our Partners"><i class="icon-group"></i></a></li>
                <li><a href="#contact" id="cntct" data-toggle="tooltip" title="Contact Us"><i class="icon-phone"></i></a></li>
                <div class="span3 offset5">  <li><a class="btn btn-success " href="http://qa4.veloxsites.com/includes/Veloxsites/">Sign up today</a></li>
                </div>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
     </div><!-- /.navbar-wrapper -->
   

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div id="road">
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="img/c1.jpg">
          <h2 class="gtxt">Fast</h2>
          <p>Normally, building a website would cost several hundred dollars or several hours with drag n' drop builders, or days if you wanted to code it up. Not anymore!<br> <strong>Welcome to the future. <br> Instant Website Creation</strong> </p>
        
        </div><!-- /.span4 -->
        <div class="span4 simple">
          <img class="img-circle" src="img/c2.jpg">
          <h2 class="gtxt">Simple</h2>
          <p>Even if you managed to build a site, you still need to worry about hosting it, getting a domain name, site E-mail and getting search engines to send you customers. <br> <strong>We take care of all that so you don't have to. </strong></p>
        
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="img/c3.jpg">
          <h2 class="gtxt">Economical</h2>
          <p>We live in a world where everyones online. You can't afford to live in the past. Websites generate revenue by attracting online consumers, and verifying the legitimacy of your business to more skeptical customers. And you can make a few bucks off of adwords as well!<br><strong>Augment your business today! </strong> </p>
          
        </div><!-- /.span4 -->
      </div><!-- /.row 
      --><!--<p ><a class="btn btn-large btn-primary span12"  href="">Get a web-site! &raquo;</a></p> --><p style="text-align: center;">
       <a class="circle" href="">Get a site! &rsaquo;</a></p>      
    </div> 
    <hr class="featurette-divider">
    <div><p> Or maybe you want to be a reseller? Or have a large number of clients who could use web-sites.</p></div>

      <!-- START THE FEATURETTES -->  
     <hr class="featurette-divider" data-stellar-ratio="2">
  <div class="photo m1" data-stellar-background-ratio="2">
    <div class="container marketing" >
  
       
      <div class="featurette one" >     
      
            <img class="featurette-image pull-right" src="img/f1.jpg"> 
            <div class="hero-unit" data-stellar-ratio="2"> 
        <h2 class="featurette-heading">Why?</h2>
        <p class="lead">A web presence has become a necessity in todays world. Educated customers will definitely search for online information pertaining to the situation to make better decisions. Whether it's a small law firm, or dentistry office, or a small business making wedding invitations or distributing flyers, the lack of a website renders you a second choice to your more tech-savvy competitors. <br> Websites also act to establish a level of legitimacy for the business. It can be further utilized as a marketing, revenue generating or communication channel. </p>
        </div>
       </div>
    </div>    
    </div> <!-- stellar bg -->
    
       <div class="container marketing" data-stellar-background-ratio="2">          
      <div class="featurette">
          
          <img class="featurette-image pull-right" src="img/f1.jpg">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      </div>
    <div class="photo m2" data-stellar-background-ratio="1">
         <div class="container marketing" >
             <div class="row-fluid">
                <div class="featurette span5" >     
      
            <img class="featurette-image pull-left" src="img/f1.jpg"> 
            <div class="hero-unit"> 
        <h2 class="featurette-heading">How awesome are these websites?</h2>
        <p class="lead">We take care of everything in the back-end, including hosting, SEO, responsiveness(they're different on a phone!), browser compatibility, load-speed optimizations and such so you don't have to. And our advanced editor lets you change elements on the page itself. Easier than wordpress!
        We also help you get a domain name and company E-mail addresses! </p>
        </div>
       </div>
                <div class="featurette span5 offset2" >
    
        <img class="featurette-image pull-right" src="img/f2.jpg">
        <div class="hero-unit" >
        <h2 class="featurette-heading">But what if I have trouble?</h2>
        <p class="lead">We've designed our service from the start to be simple, appealing and easy to use, choosing to not overload it with features for the sake of the consumer. But we expect the un-expected and have a team of IT professionals manning our phones in case of emergencies. </p>
           </div>
              </div>     
            </div>
         </div>
      </div>

      <hr class="featurette-divider">
    

      <hr class="featurette-divider">
      
      
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
    

    </div><!-- end road -->
    
    <div class="container" id='contact'>

      <div class="row-fluid">   
          
        <div class="span6">
            
   <h1>Get in touch!</h1>        
        <?php 
        // check for a successful form post  
        if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";        
        // check for a form error  
        elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
        ?>  

          <form method="POST" action="contact-form-submission.php" class="form-horizontal">

            <div class="control-group">
              <label class="control-label" for="input1"><i class="icon-user"></i> Full Name</label>
              <div class="controls controls-row">
                <input type="text" name="contact_name" class="input-xxlarge" id="input1" placeholder="Cool Person">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
              <div class="controls">
                <input type="text" class="input-xxlarge" name="contact_email" id="input2" placeholder="you@yourdomain.com">
              </div>
            </div>

                <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-phone"></i> Phone Number</label>
              <div class="controls">
                <input type="text" class="input-xxlarge" name="contact_number" id="input3" placeholder="Hey! What's your number?">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-question-sign"></i> Subject</label>
              <div class="controls">
                <input type="text" class="input-xxlarge" name="contact_subject" id="input4" placeholder="What's up?">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="inputEmail"><i class="icon-pencil"></i> Message</label>
              <div class="controls">
                <textarea rows="6" id="input5" class="input-xxlarge" placeholder="What's on your mind?"></textarea>
              </div>
            </div>

            <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Send it!</button>
    </div>
            </div>
          </form>
        </div><!-- end left -->

        <div class="span4 offset2">
          <div class="well contact">
              <strong>Address: </strong>1200 Eglington Ave. East, Toronto, Ontario
              <br>
              <strong>Call Us: </strong><a href="callto:18551234512">1-855-12345-12</a>
              <br>
              <strong>E-Mail: </strong><a href="support@kasites.com">support@kasites.com</a>       

          </div>
        </div>
   </div>       
  </div> <!-- /.container -->
      </div>
 
  



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/stellar.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/rotatebox.js"></script>
    
    <script>
       $(function() {
            $(".featurette.one").hide();
          });
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
            })
         }(window.jQuery)         
    $('.navbar-wrapper').waypoint(function() {
        $("#nav_stick").toggleClass('navbar-wrapper navbar-wrapper-stuck')
    });
	
                $("#road").hover(function() {            
                  $("#road").popover();
              });
           $('.navbar').scrollspy();   
           $('.span4.simple').waypoint(function() {
        $(".featurette.one").fadeIn(1100);
      });
      $.stellar();
      $('#rd').tooltip();
         $('#cntct').tooltip();
            $('#abt').tooltip();
    </script>   
    <script src="js/holder.js"></script>
      </div> 
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
  </body> 
     
</html>
