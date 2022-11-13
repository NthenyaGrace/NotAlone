<?php
include('database_connection.php');
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  
  <title>Not Alone | Home</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <style type="text/css">
    .how
    {
      background-color: white;
    }
    p {
    line-height: 2.5;
     margin-right: 100px;
   margin-left: 100px;
   font-size: 25px;
}
h1 {
    font-size: 50px;
}
h1, h2, h3, h4, h5, h6 {
    letter-spacing: 0;
    font-weight: 400;
    position: relative;
    padding: 0 0 10px;
    font-weight: normal;
    font-family: Futura,sans-serif;
    line-height: 140%!important;
    color: #222;
}
.h1, h1 {
    font-size: 50px;
    color: #3FBBC0;
    text-align: center;
}
.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
}

  </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <div id="wrapper">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">    
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="img/NAlogo.png" alt="" width="250" height="150" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
           <li ><a href="#intro">Home</a></li>
            <li><a href="service.php">Start</a></li>
            <li><a href="#doctor">Doctors</a></li>
            <li><a href="#facilities">Facilities</a></li>
               <li class="dropdown active" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >About <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about1.php" name="view_prof">How Counselling helps&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right angle_btn1"></i></a></li>
              </ul>
            </li>
           <li><a href="viewprofile.php" name="view_prof">View Profile</a></li>
             <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout')">Logout</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    <section class="how" style="background-color: white;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" margin-top: 7%; background-color: white;">
                    <p>
                      <br>
                      A few instant thoughts that unsettle most of the people when they hear the word counselling or therapy comprise of <span style="font-weight: bold;font-style: italic;font-size: 24px; color: black;">“I can resolve my concerns myself why should I talk to someone who knows nothing about me”</span>, “Will I be perceived as insane or psycho if I consult a therapist”, “What if my colleagues at work get to know about my counselling visits that will tarnish my image at work” etc. Working as mental health professionals’ one major challenge we face today is that of clearing the myths about seeking help. Maybe the hesitation persists because there are a few dilemmas that are yet to be addressed. Let us help you understand the need, benefit and intricacies of a counselling process better.
                    </p>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: white;">
                    <h1 class="secTitle">What Is Counselling And Why Do We Need It?</h1>
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align: center;padding: 50px 10px;">
                        <img style="padding: 11px;width: 100%;" src="https://www.betterlyf.com/demos/how-and-why-therapy-1.jpg" alt="What Is Counselling And Why Do We Need It?">
                      </div>
                      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <p class="how_p">
                          Counseling is a talk therapy that allows a person to <span style="font-weight: bold;">share his/her difficult feelings and problems in a confidential environment.</span>
                        </p>
                        <p class="how_p">A need for counselling arises when anyone, no matter what age, gender or cultural background struggles with any personal concern ( family discord, marital difficulty, relationship issues, work difficulty, loss, identity, parenting or self-related concern like anger, assertiveness, low self-confidence and the like).
                        </p>
                        
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: white;">
                        <p class="how_p">
                          <span style="font-weight: bold;">A counselor is not there to advise or direct</span> on matters that bother a person. The whole idea of counseling is to EMPOWER individuals through rationalizing of thoughts &amp; feelings. Hence a counselor will encourage you to share in a safe and confidential environment, will listen to you intently, understand why you feel a certain way and then help you identify negative thought patterns and replace them with positive thoughts. You will discover <span style="font-weight: bold;">coping mechanism and identify plan of action to address your concerns.</span>
                        </p>
                        <p class="how_p">
                          When a person wants to explore in depth the way he/she reacts, behaves and feels about such concerns, counselling offers a safe space to find a resolve.
                        </p>
                        <p class="how_p">
                          It is a relief sometimes to be true to ourselves and ask for help rather than suffer alone in silence.
                        </p>
                        </div>
                    </div>
                                <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
               <div id="eb" class="button_cont" align="center"><a href="service.php" class="example_e" href="add-website-here" target="_self" rel="nofollow noopener">Start Now?</a></div>
              </div>
            </div>
           
          </div>
        </div>
    </div>
                  </div>
      <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Not Alone</h5>
                <p>
                 Not Alone is the best online counseling and therapy site.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Not Alone hotline</h5>
                <p>
                  For a face to face contact
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                </span> +254 1234567890
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                </span> notalone@gmail.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - notalone.com. All rights reserved.</p>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
