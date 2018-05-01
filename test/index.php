<!DOCTYPE html>
<html lang="en">

<head>
  <title>Notemybook</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/YTPlayer.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body data-spy="scroll" data-offset="61" data-target=".navbar-fixed-top">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      "Loading..."
    </div>
    <div class="loader-text"><h4 class="text-center" id="loader-text"></h4></div>
  </div>
  
    <script>
        
        var r_text = new Array ();
        r_text[0] = "Education is what survives when what has been learned has been forgotten.";
        r_text[1] = "An investment in knowledge pays the best interest.";
        r_text[2] = "Change is the end result of all true learning. ";
        r_text[3] = "Life may not be the party we hoped for, but while we’re here, shall we dance?";
        r_text[4] = "When life hands you lemons, bust out the tequila and the salt.";
        r_text[5] = "If you obey all the rules you miss all the fun.";
        r_text[6] = "I hear and I forget, I see and I remember, I do and I understand.";
        r_text[7] = "For things we have to learn before doing them, we learn by doing them.";
        var i = Math.floor(8 * Math.random())

        document.getElementById("loader-text").innerHTML = r_text[i];

    </script>

  <!-- Navigation -->
  <header class="nav-type-1" id="home">

    <nav class="navbar navbar-fixed-top">
      <div class="navigation-overlay">
        <div class="container-fluid relative">
          <div class="row">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap local-scroll">
                  <a href="#home">
                    <img class="logo" src="img/logo.png" alt="logo">
                  </a>
                </div>
              </div>
            </div> <!-- end navbar-header -->


            <div class="col-md-8 col-xs-12 nav-wrap">
              <div class="collapse navbar-collapse text-right" id="navbar-collapse">
                
                <ul class="nav navbar-nav local-scroll text-center">

                  <li class="active">
                    <a href="#home">Home</a>
                  </li>
                  <li>
                    <a href="#services">Services</a>
                  </li>
                  <li>
                    <a href="#associates">Associates</a>
                  </li>
                  <li>
                    <a href="#testimonial">Testimonials</a>
                  </li>
                  <li>
                      <a href="#blog">Blog</a>
                  </li>                         
                  <li>
                    <a href="#contact">Contact</a>
                  </li>
                  
                </ul>
              </div>
            </div> <!-- end col -->
            
          </div> <!-- end row -->
        </div> <!-- end container -->
      </div> <!-- end navigation -->
    </nav> <!-- end navbar -->

  </header> <!-- end navigation -->


  <div class="main-wrapper-onepage main oh">
    
     <section class="hero-wrap video-container text-center">

      <div class="container container-full-height">
        <div class="video-background">
            <div class="video-foreground">
               <div id="player"></div>
            </div>
            <div class="overlay"></div>
        </div>
        
        
        <div class="hero-holder">
          <div class="hero-message text-rotator">
            <h1 class="hero-text"><span class="rotate">Education is what survives when what has been learned has been forgotten, 
                                                    An investment in knowledge pays the best interest, 
                                                    Change is the end result of all true learning,
                                                    Life may not be the party we hoped for. But while we’re here shall we dance?,
                                                    When life hands you lemons. Bust out the tequila and the salt,
                                                    If you obey all the rules you miss all the fun,
                                                    I hear and I forget. I see and I remember. I do and I understand,
                                                    For things we have to learn before doing them. We learn by doing them
                                                    
                                </span></h1>
            
            <div class="button-holder">
                <a class="video-play-button lightbox-video mfp-iframe" href="https://www.youtube.com/watch?v=rESBxsSdhnY">
                  <span></span>
                </a>
            </div>
            
            <!-- <a href="https://www.youtube.com/watch?v=rESBxsSdhnY" class="mt-30 btn btn-md btn-white lightbox-video mfp-iframe">Play Video</a>-->
          </div>
        </div>

        <div class="local-scroll">
          <a href="#services" class="scroll-down">
            <i class="fa fa-angle-down"></i>
          </a>
        </div>
      </div>

    </section> <!-- end video bg -->

    <!-- Intro -->
    <section class="section-wrap services bg-white" id="services">
      <div class="container">
        <div class="row">

          <div class="col-sm-8 col-sm-offset-2 text-center wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0s">
            <h2 class="intro-heading heading-frame">Welcome to notemybook</h2>
            <p class="intro-text mb-60">
              We at notemybook believe in experiential learning. 
              <br>At a superficial level, we work on two core things -
            </p>
          </div>
          
        </div>
        <div class="row">
            <a href="Surge/index.php" target="_blank">
            <div class="col-md-5 col-md-offset-1 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2">
                        <img src="img/surge.png" alt="Surge logo" class="img-responsive">
                    </div>
                    <div class="col-xs-12">
                        <h3 class="text-center">Surge</h3>
                        <p class="text-center">Surge is the new way of learning, we are revolutionizing the traditional and old-school method of class rooms into more practical and Industrial based knowledge transfer.</p>
                        <p class="text-center"><strong>Industrial Training | Technology | Workshop | Internship</strong></p>
                    </div>
                </div>
            </div>
            </a>
            <a href="coming%20soon/index.html" target="_blank">
            <div class="col-md-5 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2">
                        <img src="img/stubborn.png" alt="Surge logo" class="img-responsive">
                    </div>
                    <div class="col-xs-12">
                        <h3 class="text-center">Stubborn</h3>
                        <p class="text-center">At Stubborn we make the education journey memorable for the students. It involves making education more practical and industry oriented.</p>
                        <p class="text-center"><strong>Industrial Visit | College Parties | Adventure Travel</strong></p>
                    </div>
                </div>
            </div>
            </a>
            
        </div>
      </div>
    </section> <!-- end intro -->
    
    <!-- Associates -->
    <section class="section-wrap clients bg-blue" id="associates">
      <div class="container"> 

        <div class="row heading">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center bottom-line color-white">Programme Associates</h2>
            <p class="subheading text-center color-white">Be a part of the learning process that is designed and undertaken with the help of following:</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 associate-logo">
            <img src="img/facebook.png" alt="Facebook logo">
          </div>
          <div class="col-sm-4 associate-logo">
            <img src="img/microsoft.png" alt="Microsoft logo">
          </div>
          <div class="col-sm-4 associate-logo">
            <img src="img/fablab.png" alt="FabLab logo">
          </div>
          <div class="col-sm-4 col-sm-offset-4 associate-logo">
            <img src="img/riidl.png" alt="riidl logo">
          </div>
        </div>

      </div>      
    </section> <!-- end clients -->
    

    <!-- Testimonial Section -->
    <section class="section-wrap testimonial-section bg-dark" id="testimonial">
      
        <div class="row heading">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center bottom-line color-white">Hear what the students have to say</h2>
            <p class="subheading text-center color-white">Don't just take it from us, let our students do the talking.</p>
          </div>
        </div>

      <div id="owl-promo" class="owl-carousel owl-theme">

        <div class="item">
          <div class="container">
            <div class="row">
              
              <div class="col-md-8 promo-description">
                <h3 class="color-white">Laveen Mamtani</h3>
                <p class="mb-30">Industrial visit was very good.. we learn some very exciting stuff and enjoyed a lot with friends. It was exciting location. Arrange these kind of IV’s for us and also extend the days of IV so that we can learn more... thanks for arranging the IV... I am thankful to u for this IV... It was nice hangout with our friends and nice experience with notemybook...</p> 
                <div class="customNavigation mt-40">
                  <a class="prev"><i class="icon arrow_left"></i></a>
                  <a class="next"><i class="icon arrow_right"></i></a>
                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <img src="img/Person-1.png" alt="Student Image">        
              </div>
           
            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">
              
              <div class="col-md-8 promo-description">
                <h3 class="color-white">Vinay Dasari</h3>
                <p class="mb-30">It was my exam time and I was in an urgent need of books, I didn’t have the time to go &amp; buy the books.Suddenly I remembered about Notemybook which I heard through one of my friend. So I order online on Monday morning...nLO..!!! At sharp 3PM I see the delivery guy at my doorsteps. Really It was a relaxing moment for me.And with the book I received some cool coupons of BURGER KING.So it was an overall very awesome experience. I hope it’s one of the fastest delivery I have ever received HATS OFF TO NOTEMYBOOK...!!</p> 
                <div class="customNavigation mt-40">
                  <a class="prev"><i class="icon arrow_left"></i></a>
                  <a class="next"><i class="icon arrow_right"></i></a>
                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                <img src="img/Person-2.png" alt="Student Image">        
              </div>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">
              
              <div class="col-md-8 promo-description">
                <h3 class="color-white">Rahul Verma</h3>
                <p class="mb-30">&quot;Trip was really awesome.. food hotel train all booking were comfortable.. thanks a lot for making this trip learning with fun and I really enjoyed it.. I would like to join next Industrial visit as well. thanks a lot...&quot;</p> 
                <div class="customNavigation mt-40">
                  <a class="prev"><i class="icon arrow_left"></i></a>
                  <a class="next"><i class="icon arrow_right"></i></a>
                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                <img src="img/Person-3.png" alt="Student Image">        
              </div>

            </div>
          </div>
        </div>

      </div> <!-- end slider -->
    </section> <!-- end testimonial section -->
    
    <!-- Media -->
    <section class="section-wrap media" id="press">
      <div class="container"> 

        <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center bottom-line">Featured Press</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 media-logo">
            <img src="img/media/hindustantimes.png" alt="Hindustan Times">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/iimi.png" alt="">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/bloomberg.png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 media-logo">
            <img src="img/media/inc42.png" alt="">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/your-story.png" alt="">
          </div>
		  <div class="col-sm-4 media-logo">
            <img src="img/media/erudio.png" alt="">
          </div>
        </div>
		<div class="row second-row">
          <div class="col-sm-4 media-logo">
            <img src="img/media/vccircle.png" alt="">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/edtech.png" alt="">
          </div>
		  <div class="col-sm-4 media-logo">
            <img src="img/media/tech-aloo.png" alt="">
          </div>
        </div>
		

      </div>      
    </section> <!-- end media -->
    
    <!-- From Blog -->
    <section class="section-wrap bg-light from-blog" id="blog">
      <div class="container"> 

        <div class="row heading">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center bottom-line">From Blog</h2>
            <p class="subheading text-center">Our Latest News</p>
          </div>
        </div>

        <div class="container">

          <div class="row">

            <div id="owl-blog" class="owl-carousel owl-theme">

              <div class="blog-col last">
                <div class="entry-slider oh">
                  <div class="flexslider" id="one-img-slide">
                    <ul class="slides">
                      <li>
                        <a href="#">
                          <img src="img/blog/blog-1.png" alt="Blog Img 1">
                        </a>
                      </li>
                    </ul>
                  </div>
                </div> <!-- end flexslider -->

                <div class="entry-box">
                  <div class="entry-title">
                    <h4><a href="#">10 Reasons to visit Goa</a></h4>
                  </div>
                  <ul class="entry-meta">
                    <li>
                      <a href="#">Noc 11, 2016</a>
                    </li>                   
                  </ul>
                  <div class="entry-content">
                    <p>1 Call it the beach lover’s paradise, party capital, hub of different lifestyles or the meeting point of various cultures; it always outshines any other holiday destinations in the country! Ever wondered, what makes Goa a celestial place to visit between December to January? The weather is dry &amp; relatively cool, the sea is calm</p>
                    <a href="#" class="read-more">Read More</a>
                  </div>
                </div>

              </div> <!-- end post -->

            </div>

            <div class="customNavigation mt-40 text-center">
              <a class="prev"><i class="icon arrow_left"></i></a>
              <a class="next"><i class="icon arrow_right"></i></a>
            </div>

          </div> <!-- end row -->
        </div>
      </div>
    </section> <!-- end from blog -->

    <!-- Contact -->
    <section class="section-wrap contact" id="contact">
      <div class="container">

        <div class="row heading">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="text-center bottom-line">Get in touch with us</h2>
            <p class="subheading">We'd love to hear from you.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-4">

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Pointer"></i>
              </div>
              <h6>Address</h6>
              <p>Riidl, KJ Somaiya, Vidyavihar, 
              <br>Mumbai, India</p>
            </div> <!-- end address -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Phone"></i>
              </div>
              <h6>Call Us</h6>
              <span>+91-8446 108589</span>
            </div> <!-- end phone number -->

            <div class="contact-item">
              <div class="contact-icon">
                <i class="icon icon-Mail"></i>
              </div>
              <h6>E-mail</h6>
              <a href="mailto:contact@notemybook.com">contact@notemybook.com</a>
            </div> <!-- end email -->

          </div>

          <div class="col-md-8">
            <form id="contact-form" action="contact.php" method="post">

              <div class="row contact-row">
                <div class="col-md-6 contact-name">
                  <input name="name" id="name" type="text" placeholder="Name*">
                </div>
                <div class="col-md-6 contact-email">
                  <input name="mail" id="mail" type="email" placeholder="E-mail*">
                </div>
              </div>

              <input name="subject" id="subject" type="text" placeholder="Subject"> 
              <textarea name="comment" id="comment" placeholder="Message"></textarea>
              <input type="submit" class="btn btn-lg btn-color btn-submit" value="Send Message">
            </form>
          </div> <!-- end col -->

        </div>
      </div>
    </section> <!-- end contact -->

    <!-- Footer -->
    <footer class="footer minimal bg-dark">
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-md-offset-4">
            
            <div class="footer-logo local-scroll mb-30 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <h2>
                <a href="#home" class="color-white">notemybook</a>
              </h2>
            </div>

            <div class="socials footer-socials">
              <a href="https://www.facebook.com/notemybookservices"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/notemybook1"><i class="fa fa-twitter"></i></a>
              <a href="https://www.linkedin.com/company/3604823"><i class="fa fa-linkedin"></i></a>
            </div> <!-- end socials -->

            <span class="copyright text-center">
              Notemybook Services Pvt. Ltd.
            </span>

          </div>

        </div>
      </div>
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

  </div> <!-- end main-wrapper -->
    
  
  <!-- jQuery Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/plugins.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
  <script src="http://www.youtube.com/player_api"></script>


        <script>

            if (screen.width >= 800) {

              var player;

              function onYouTubePlayerAPIReady() {
                  player = new YT.Player('player', {
                      playerVars: {
                          'autoplay': 1,
                          'loop': 1,
                          'controls': 0,
                          'autohide': 1,
                          'showinfo': 0,
                          'mute': 1,
                          'modestbranding': 0,
                          'playlist': 'rESBxsSdhnY'
                      },
                      videoId: 'rESBxsSdhnY',
                      events: {
                          'onReady': onPlayerReady
                      }
                  });

              }

              function onPlayerReady(event) {
                  event.target.mute();
              }

              $(window).scroll(function() {
                 var hT = $('#player').height(),
                     wS = $(this).scrollTop();
                 if (wS > hT) {
                    player.pauseVideo();
                 }
                 else {
                    player.playVideo();
                 }
              });
            
            }
        </script>

</body>

</html>