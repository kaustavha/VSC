
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kasites: An instant website builder, fast, simple, easier than wordpress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consumer Web-Site for ">
    <meta name="author" content="Kaustav Haldar">

    <!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
    #road2 {
	height: 250px;
        width: 250px;	
    }
    

    #wrap{
        
      -webkit-perspective: 2000px;
      margin-bottom:0;
     
    }
    
    
    
    .card{        
        
        position: relative;
        margin: 0 0 0 0;
        height: 250px;
        width: 100%;    
        -webkit-transform-style: preserve-3d;
        -webkit-transition: -webkit-transform 0.7s ease-out;        
    }
    
    .side{
        
        position: absolute;
        height: 250px;
        width: 100%;
        margin-bottom: 0;
        
    }
    
    .un{
       -webkit-transform: translateZ(125px); 
    }
    
    .deux{
     
      -webkit-transform: rotateX( 90deg) translateZ( 125px);
      
    }
    .trois{
        
      -webkit-transform: rotateX( -90deg) translateZ( 125px);
        
    }
   
    .card img{
        
        height: 250px;
        width: 100%;
        margin-bottom: 0;
        background: repeat;
        
    }
    
</style>
 

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.js"></script>
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
    <div id="wrap">
       
        <div class="card" onclick="clicked(this)">           
             
            <div class="side un">
                <img src="img/slide-01.png">
            </div>
             <div class="side deux">
                <img src="img/slide-02.png">
            </div>
              <div class="side trois">
                <img src="img/slide-03.png">
            </div>
          
            </div>
       
    </div>
    
<!-- /.carousel -->

<div class="barone"></div>

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
                <li class="active"><a href="#road" id="rd" data-toggle="tooltip" title="The road to success"><i class="icon-road"></i></a></li>
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
          <p class="para">Normally, building a website would cost several hundred dollars or several hours with drag n' drop builders, or days if you wanted to code it up. Not anymore!<br> <strong>Welcome to the future. <br> Instant Website Creation</strong> </p>
        
        </div><!-- /.span4 -->
        <div class="span4 simple">
          <img class="img-circle" src="img/c2.jpg">
          <h2 class="gtxt">Simple</h2>
          <p class="para">Even if you managed to build a site, you still need to worry about hosting it, getting a domain name, site E-mail and getting search engines to send you customers. <br> <strong>We take care of all that so you don't have to. </strong></p>
        
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="img/c3.jpg">
          <h2 class="gtxt">Economical</h2>
          <p class="para">We live in a world where everyones online. You can't afford to live in the past. Websites generate revenue by attracting online consumers, and verifying the legitimacy of your business to more skeptical customers. And you can make a few bucks off of adwords as well!<br><strong>Augment your business today! </strong> </p>
          
        </div><!-- /.span4 -->
      </div><!-- /.row -->
<!--<p ><a class="btn btn-large btn-primary span12"  href="">Get a web-site! &raquo;</a></p> -->
      <a class="button offset5" href="http://dev4.veloxsites.com/includes/Veloxsites/#" style="text-decoration: none">FREE TOUR!</a>
    </div> 
  
      <!-- START THE FEATURETTES -->  
      <div class="bartwo"><p>
        
          </p>
      </div>
     <hr class="featurette-divider">
  <div class="photo m1" data-stellar-background-ratio="2">
    <div class="container marketing" >
  
       
      <div class="featurette one">     
      
            <img class="featurette-image pull-right" src="img/r2.jpg"> 
            <div class="hero-unit"> 
        <h2 class="featurette-heading">Why?</h2>
        <p class="lead">A web presence has become a necessity in todays world. Educated customers will definitely search for online information pertaining to the situation to make better decisions. Whether it's a small law firm, or dentistry office, or a small business making wedding invitations or distributing flyers, the lack of a website renders you a second choice to your more tech-savvy competitors. <br> Websites also act to establish a level of legitimacy for the business. It can be further utilized as a marketing, revenue generating or communication channel. </p>
        </div>
       </div>
    </div>    
    </div> <!-- stellar bg -->
    <hr class="featurette-divider">
       <div class="container marketing">          
           <div class="featurette">             
                    <div id="check" class="span6">
                            <div class="row-fluid">
                                <div class="span6">
                                    <ul>
                                        <li>Built in SEO</li>
                                        <li>Get found on Google, Bing, Yahoo</li>
                                        <li>eCommerce</li>
                                        <li>Custom domain name and emails</li>
                                    </ul>
                                </div>
                                
                                <div class="span6">
                                    <ul>
                                        <li>HTML5, Responsive Designs</li>
                                        <li>Ready in seconds!</li>
                                        <li>No design experience required!</li>
                                        <li>Easily edit sections and add images</li>
                                    </ul>
                                </div>
                            </div>            
                        </div><!-- end check section -->
            </div>
            <ul class="thumbnails">
              <li class="span2">
                <a href="http://my.411.ca/demo/lawyer/en/" class="thumbnail">
                  <img src="img/samples/sample_lawyer.jpeg" alt="">
                </a>
              </li>
               <li class="span2">
                <a href="http://my.411.ca/demo/homeimprovement/en/" class="thumbnail">
                  <img src="/img/samples/sample_home.jpeg" alt="">
                </a>
              </li>
               <li class="span2">
                <a href="http://my.411.ca/demo/beautician/en/" class="thumbnail">
                  <img src="/img/samples/sample_spa.jpeg" alt="">
                </a>
              </li>
               <li class="span2">
                <a href="http://my.411.ca/demo/electrician/en/" class="thumbnail">
                  <img src="/img/samples/sample_electrician.jpeg" alt="">
                </a>
              </li>
               <li class="span2">
                <a href="http://my.411.ca/demo/florist/en/" class="thumbnail">
                  <img src="/img/samples/sample_florist.jpeg" alt="">
                </a>
              </li>              
            </ul>                
 
         
      </div>
    <hr class="featurette-divider">
    <div class="photo m2">
       
         <div class="container marketing">
             <div class="row-fluid">
                <div class="featurette span5">     
      
            <img class="featurette-image pull-left" src="img/r2.jpg"> 
            <div class="hero-unit"> 
        <h2 class="featurette-heading">How awesome are these websites?</h2>
        <p class="lead">We take care of everything in the back-end, including hosting, SEO, responsiveness(they're different on a phone!), browser compatibility, load-speed optimizations and such so you don't have to. And our advanced editor lets you change elements on the page itself. Easier than wordpress!
        We also help you get a domain name and company E-mail addresses! </p>
        </div>
                </div>
                <div class="featurette span5 offset2">
    
        <img class="featurette-image pull-right" src="img/r2.jpg">
        <div class="hero-unit">
        <h2 class="featurette-heading">But what if I have trouble?</h2>
        <p class="lead">We've designed our service from the start to be simple, appealing and easy to use, choosing to not overload it with features for the sake of the consumer. But we expect the un-expected and have a team of IT professionals manning our phones in case of emergencies. </p>
        </div>
              </div>     
        </div>
      </div>
   </div>
   

      <hr class="featurette-divider">   

      
      <!-- /END THE FEATURETTES -->


    

    </div><!-- end road -->
    
    <div class="container" id="about">
        
    </div>
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
                <input type="text" name="contact_name" class="input-xxlarge" id="input1" placeholder="How do you spell your name again?">
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
    <script src="js/jquery.shuffleletters.js"></script>
    <script src="js/flux.jquery.js"></script>
    <script src="js/script.js"></script> 
    
    <script>
        //hide elements and fadein
       var firstlook = [".button", ".featurette.one", ".img-circle", "p.para"];
           $(firstlook.join(', ')).hide();       
           
       $(function() {           
       var firstlook = [".button", ".img-circle", "p.para"];
          
           for (var i in firstlook) {
               $(firstlook[i]).fadeIn(1200+(400*i));
           }
           });

      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
            })
         }(window.jQuery) 
         
         //make navbar pos=fixed i.e sticky when it's reached on the page
         //make the grey bar hiding featurette one hide when navbar-wrapper div is passed
        $('#road').waypoint(function() {
        $("#nav_stick").toggleClass('navbar-wrapper navbar-wrapper-stuck');   
        $(".bartwo").addClass('off'); 
        $("#nav_stick").show();  
        $("#nav_stick").fadeOut(1);  
        $("#nav_stick").fadeIn(1100);  
        });
       
        //bootstrap navbar active class changer
        $('.navbar').scrollspy();   
        
        //fade in featurette 1 when the bigass green buttons location is passed
        $('.span4.simple').waypoint(function() {
        $(".featurette.one").fadeIn(1100);
        });
        
        // code for activating stellar.js i.e parallax
        $(window).stellar();
      
        //navbar tooltips
        $('#rd').tooltip();
        $('#cntct').tooltip();
        $('#abt').tooltip();
            
            //jShuffle letters plugin
          $(function(){	              
	// container is the DOM element;
	// userText is the textbox
        $(".gtxt").each(function(index){
            $(this).delay(400*index).shuffleLetters();
            });
            $(".carousel-caption h1").shuffleLetters();
          });
          
          var angle = 0;
          $(".card").click(function(){
              angle += 90;
              $(".card").css("-webkit-transform", 'rotateX(' + angle + 'deg)');
          });
                  
    </script>
    <script src="js/holder.js"></script>
      </div> 
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
  </body> 
     
</html>
