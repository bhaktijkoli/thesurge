<!DOCTYPE html>
<html lang="en">

<head>
  <title>Surge</title>

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
  <link rel="stylesheet" href="css/rotating-card.css" />

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
                  <a href="thesurge.in">
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
                    <a href="#course">Courses</a>
                  </li>
                  <!-- <li>
                    <a href="#associates">Associates</a>
                  </li> -->
                  <li>
                    <a href="#colleges">Colleges</a>
                  </li>
                  <li>
                    <a href="#testimonial">Testimonials</a>
                  </li>
                  <li>

                    <!-- <a href="./connect/" target="_blank">Surge Connect</a>
                  </li> --> <!-- Hiding Surge Connect -->

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
                <a class="video-play-button lightbox-video mfp-iframe" href="https://www.youtube.com/watch?v=Jcji5HBXJA8">
                  <span></span>
                </a>
            </div>

            <!-- <a href="https://www.youtube.com/watch?v=Jcji5HBXJA8&t=7s" class="mt-30 btn btn-md btn-white lightbox-video mfp-iframe">Play Video</a>-->
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
            <h2 class="intro-heading heading-frame">Welcome to Surge</h2>
            <p class="intro-text">
              For those who innovate -
            </p>
          </div>

        </div>
        <div class="row">
            <a href="#services">
            <div class="col-md-6 col-md-offset-3 col-xs-12 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.1s">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <img src="img/surge.png" alt="Surge logo" class="img-responsive ">
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <h3 class="text-center">Surge</h3>
                <p class="text-center">“With good education anything is possible and we love to innovate things ”
We believe world need innovators more than anything else and at Surge, our mission is to empower every students by providing them right knowledge, training them with latest cutting edge technology  and help them to innovate or work with the existing tech innovators / organisation<br/>
Surge is the new way of learning, we are revolutionizing the traditional and old-school method of classrooms into more practical and Industrial based knowledge transfer.
                </p>
                <p class="text-center"><strong>Industrial Training | Technology | Internship | Recruitment</strong></p>
                <h5 class="text-center tag-line mt-30">Change Things. Dream Big.</h5>
            </div>
            </a>

        </div>
      </div>
    </section> <!-- end intro -->

 <!-- Courses-->
    <section class="section-wrap" id="course">
        <div class="container">

            <div class="row heading">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="text-center bottom-line">Courses</h2>
                <p class="subheading">Join today to learn greatness</p>
              </div>
            </div>

            <div class="row">

 <!--start Deep learning Card-->
 <div class="col-md-4 col-sm-6">
     <div class="card-container">
        <div class="card">
            <div class="front">
                <div class="cover">
                    <img src="../img/Advance-Deep-Learning.jpg"/>
                    <div class="overlay"></div>
                </div>
                <div class="content">
                    <div class="main">
                        <h3 class="name" style="margin-top: 20px;margin-bottom:10px">Advanced Deep Learning</h3>
                        <!-- <p class="profession">CEO</p> -->
                        <p class="text-center" style="font-size:12px">Understand the intuition behind Artificial Neural Networks. Learn advanced Deep learning concepts like Convolutional Neural Networks, Recurrent Networks, and Generative Adversarial Networks.</p>
                        <center class="timer" style="margin-top:30px">
                          <h3 class="col-sm-3">12</br><span>DAYS</span><h3>
                          <h3 class="col-sm-3">5</br><span>HRS</span><h3>
                          <h3 class="col-sm-3">32</br><span>MIN</span><h3>
                          <h3 class="col-sm-3">52</br><span>SEC</span><h3>
                        </center>
                    </div>
                    <!-- <div class="footer">
                        <i class="fa fa-mail-forward"></i> Auto Rotation
                    </div> -->
                </div>
            </div> <!-- end front panel -->
            <div class="back">
                <div class="header">
                    <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                </div>
                <div class="content">
                    <div class="main">
                        <h4 class="text-center">Job Description</h4>
                        <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                        <div class="stats-container">
                            <div class="stats">
                                <h4>235</h4>
                                <p>
                                    Followers
                                </p>
                            </div>
                            <div class="stats">
                                <h4>114</h4>
                                <p>
                                    Following
                                </p>
                            </div>
                            <div class="stats">
                                <h4>35</h4>
                                <p>
                                    Projects
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                      <a href="/Surge/courses/Advance-Deep-Learning/" class="btn btn-lg btn-color">Learn more</a>
                    </div>
                </div>
            </div> <!-- end back panel -->
        </div> <!-- end card -->
    </div> <!-- end card-container -->
</div>
 <!--end DL Card-->
<!-- DATA ANALYTIC CARD-->
<!-- END DATA ANALYTIC CARD-->
<!-- END STRT ANDROID CARD-->
<!-- END ANDROID CARD-->

            </div>

        </div>
    </section>

    <!-- Associates -->
    <!-- <section class="section-wrap clients bg-blue" id="associates">
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
          <div class="col-sm-4 associate-logo">
            <img src="img/riidl.png" alt="riidl logo">
          </div>

          <!-- associate hide <div class="col-sm-4 associate-logo">
            <img src="img/accenture.png" alt="accenture logo">
          </div>
          <div class="col-sm-4 associate-logo">
            <img src="img/tcs.png" alt="tcs logo">
          </div>
          <div class="col-sm-4 col-sm-offset-4 associate-logo">
            <img src="img/reliance.png" alt="reliance logo">
          </div> -->

        </div>

      </div>
    </section> <!-- end clients --> -->

    <section class="section-wrap clients " id="colleges">
      <div class="container">

        <div class="row heading">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center bottom-line ">Our Students</h2>
            <p class="subheading text-center ">Students from all over the country have benefitted from us:</p>
          </div>
        </div>

        <div class="row">
          <div id="college_carousel" class="owl-carousel owl-theme">
            <div class="slide">
              <img src="img/college/vesit.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/hiray.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/vjti.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/kc.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/kkjsce.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/mhss.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/pune.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/pvpcoe.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/sandanchor.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/tsec.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/umit.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/bimtech.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/dbit.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/fta.png" alt="">
            </div>
            <div class="slide">
              <img src="img/college/vit.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- end Colleges -->


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
                <h3 class="color-white"> Purvak Lapsiya:</h3>
                <h5 class="college-name">KJ Somaiya College of Engineering</h5>
                <p class="mb-30">Surge is a complete package for engineering student like me, right from attending those interactive session to working on four big live projects and getting internship into exciting companies. It’s a complete paradigm shift for any students in India.</p>
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
                <h3 class="color-white">Shreyans Doshi:</h3>
                <h5 class="college-name">Winner of Smart India Hackathon, KJ Somaiya College of Engineering</h5>
                <p class="mb-30">It’s like sometimes you know everything but you need a push into a right direction to address all the right problems that get towards when you go into the future, this course was something like that to me, it changed the way I looked at the problems when they approach me and how I could use programming to solve those problem.</p>
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

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Krina Joshi:</h3>
                <h5 class="college-name">KJSCE</h5>
                <p class="mb-30">This Course was completely beneficial for me, 5 out of 5.</p>
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
                <h3 class="color-white">FAIZANSHAH RAOUF ANSARI:</h3>
                <h5 class="college-name">VESIT/CMPN First year</h5>
                <p class="mb-30">It was an Wonderful exploration into Data Science, would definitely suggest this course to my friends and juniors.</p>
                <div class="customNavigation mt-40">
                  <a class="prev"><i class="icon arrow_left"></i></a>
                  <a class="next"><i class="icon arrow_right"></i></a>
                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                <img src="img/Person-1.png" alt="Student Image">
              </div>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">SONIYA SHETTIGAR:</h3>
                <h5 class="college-name">VESIT/ INST BE</h5>
                <p class="mb-30">Great course! Great learning overall awesome expirience, keep up team Surge!</p>
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

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Vedant Mistry:</h3>
                <h5 class="college-name">VESIT/COMP Second year</h5>
                <p class="mb-30">Properly scheduled classes well planned lectures. </p>
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
                <h3 class="color-white">Snehal Bhagat:</h3>
                <h5 class="college-name">VESIT</h5>
                <p class="mb-30">I'm sure all the things I learnt through this course are going to help me a lot in the future. Thank you team Surge.</p>
                <div class="customNavigation mt-40">
                  <a class="prev"><i class="icon arrow_left"></i></a>
                  <a class="next"><i class="icon arrow_right"></i></a>
                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                <img src="img/Person-1.png" alt="Student Image">
              </div>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Aneesh Gunda:</h3>
                <h5 class="college-name">VESIT</h5>
                <p class="mb-30">Being from a completely different background of academia, I came looking for some answers for my future education. I'd certainly say that I got those answers and I'd like to pursue machine learning as my subject for my masters degree and for that I'd like to thank
                Surge for giving this opportunity and of course Mr. Vikramank Singh r for this wonderful opportunity.</p>
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

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Padmaja Kolle:</h3>
                <h5 class="college-name">VESIT</h5>
                <p class="mb-30">I thought that the focus of teaching was on explaining the code, which was helpful; Overall, the workshop was pretty helpful.</p>
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
                <h3 class="color-white">Krutika Hari Pasalkar:</h3>
                <h5 class="college-name">VESIT</h5>
                <p class="mb-30">Through these workshop got an opportunity to learn and understand R programming and python in deep and its use in statistics and analysis.</p>
                <div class="customNavigation mt-40">
                  <a class="prev"><i class="icon arrow_left"></i></a>
                  <a class="next"><i class="icon arrow_right"></i></a>
                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                <img src="img/Person-1.png" alt="Student Image">
              </div>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Sakshi Subedi:</h3>
                <h5 class="college-name">VESIT/CMPN Second year</h5>
                <p class="mb-30">It was satisfactory, love the course.</p>
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

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Vinit Todai:</h3>
                <h5 class="college-name">KJSCE/COMPS</h5>
                <p class="mb-30">It was one of the best course I have ever attended.I got a wide exposure to the world of Big Data Analytics,Artificial Intelligence and Machine Learning.</p>
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
                <h3 class="color-white">Swapnil Nivendkar:</h3>
                <h5 class="college-name">VJTI</h5>
                <p class="mb-30">I think coding part was more focus, teaching was really good . Overall I like the initiative, good teaching by Vikramank sir and good dedication by Team Surge.</p>
                <div class="customNavigation mt-40">
                  <a class="prev"><i class="icon arrow_left"></i></a>
                  <a class="next"><i class="icon arrow_right"></i></a>
                </div>
              </div>

              <div class="col-md-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.1s">
                <img src="img/Person-1.png" alt="Student Image">
              </div>

            </div>
          </div>
        </div>

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Suneel:</h3>
                <h5 class="college-name">TSEC</h5>
                <p class="mb-30">The main highlight of the course was the intriguing projects and individual attention that it had to offer. It definitely changed my perspective on programming and Data analytics. Me and my team were very lucky to have Vikramank sir to guide us and help us with the projects and lastly, I am glade team of surge made this course happen.</p>
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

        <div class="item">
          <div class="container">
            <div class="row">

              <div class="col-md-8 promo-description">
                <h3 class="color-white">Aishwarya:</h3>
                <h5 class="college-name">TSEC</h5>
                <p class="mb-30">The Data analytics and Machine learning course taught by Vikramank was very well conducted. Practical learning combined with the individual attention ensured a good understanding of the subject. Working on different projects throughout the course that helped in understanding concept of applying them practically. Altogether it was fun way to learn new concepts that we wouldn't have been able to do with our college coursework.</p>
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

      </div> <!-- end slider -->
    </section>
<!-- end testimonial section -->

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
        <div class="row">
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
        <div class="row">
          <div class="col-sm-4 media-logo">
            <img src="img/media/techinasia.png" alt="">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/mid-day.png" alt="">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/techcircle.png" alt="">
          </div>
        </div>
		    <div class="row second-row">
          <div class="col-sm-4 media-logo">
            <img src="img/media/letsventure.png" alt="">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/vccircle_2.png" alt="">
          </div>
          <div class="col-sm-4 media-logo">
            <img src="img/media/foradian.png" alt="">
          </div>
        </div>


      </div>
    </section>
<!-- end media -->

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
              <a href="mailto:contact@notemybook.com">contact@thesurge.in</a>
            </div> <!-- end email -->

          </div>

          <div class="col-md-8">
            <form id="contact-form" action="contact.php" method="post">

              <div class="row contact-row">
                <div class="col-md-6 contact-name">
                  <input name="name" id="name" type="text" placeholder="Name*" required>
                </div>
                <div class="col-md-6 contact-email">
                  <input name="mail" id="mail" type="email" placeholder="E-mail*" required>
                </div>
              </div>

              <input name="subject" id="subject" type="text" placeholder="Subject" required>
              <textarea name="comment" id="comment" placeholder="Message" required></textarea>
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

          <div class="col-md-4">
            <div class="footer-logo local-scroll mb-30 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <h2>
               <!--  <a href="./career.html" class="color-white footer-link-big">Join Us</a> -->
              </h2>
            </div>
          </div>

          <div class="col-md-4 ">

            <div class="footer-logo local-scroll mb-30 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <h2>
                <a href="#home" class="color-white">Surge</a>
              </h2>
              <h2>
                <!-- <a href="./career.html" class="color-white footer-link-small">Join Us</a> -->
              </h2>
              <h2>
                <!-- <a href="#home" class="color-white footer-link-small">Blogs</a> -->
              </h2>
            </div>

            <div class="socials footer-socials">
              <a href="https://www.facebook.com/surgeofficials/" target="_blank"><i class="fa fa-facebook"></i></a>
             <a href="https://www.instagram.com/surge_officials/" target="_blank"><i class= "fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/13399251" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div> <!-- end socials -->

            <span class="copyright text-center">
              &copy; Surge 2018
            </span>

          </div>

          <div class="col-md-4">
            <div class="footer-logo local-scroll mb-30 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <h2>
               <!-- <a href="#home" class="color-white footer-link-big">Blogs</a> -->
              </h2>
            </div>
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
            $(document).ready(function() {
              $('#college_carousel').owlCarousel({
                  items:4,
                  loop:true,
                  margin:10,
                  autoPlay:2000,
                  autoplayTimeout:3000,
                  autoplayHoverPause:true,
                  animateIn:'fadeIn',
                  animateOut:'fadeOut',
              })
            });
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
