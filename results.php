<?php
$timestamp = date("YmdHis"); // output: 20150715164614
?>
<html>
  <head>
    <title>Not Alone | Result</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css?v=<?php echo $timestamp;?>" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/style2.css?v=<?php echo $timestamp;?>">
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
 
  <!-- boxed bg -->
  
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <style type="text/css">
.example_e {
border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;
transition: all 0.3s ease 0s;

}
.example_e:hover {
color: #404040 !important;
font-weight: 700 !important;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}
    .ew-header {
    font-family: "Open Sans";
    font-size: 40px;
    font-weight: 700;
    text-align: center;
    line-height: 45px;
    color: #212121;
    margin-bottom: 2rem;
}

.bod
{
  background-color: white;
}

#results {

 text-align: center;
      color: black;
      font-size: 22px;
      line-height: 1.8em;
      padding-bottom: 50px;
}
.disclaimer
{
  text-align: center;
  font-size: 18px;
}
  </style>
  </head>
<body class="bod" data-spy="scroll" data-target=".navbar-custom" >
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
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index_patient.php">Home</a></li>
          <li class="active"><a href="pchat_index.php">Your Sessions</a></li>
          
            <li><a href="logout.php">Logout</a></li>
         
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <section class="col-sm-12" style="padding-top: 8%;">
  <a id="main-content"></a>
                      <div class="region region-content">
     <div class="ew-header text-center">
                <h2 >Your Results</h2>
              </div>
            
</section>
</div>
 <div id="results"></div>
  <div id="map">
    <p class="disclaimer"><i class="far fa-smile"></i>&nbsp;&nbsp;&nbsp;Remember, this is <b>not</b> a test to diagnose you with any condition. Only a doctor can do that. So, please make sure you are all well with our therapists.&nbsp;&nbsp;&nbsp;<i class="far fa-smile"></i></p>
      </div>
      <script src="scripts/results.js"></script>
 <div style="padding-top: 30px;">
                <div id="eb" class="button_cont" align="center" ><a href="booknow.php" class="example_e" target="_self" rel="nofollow noopener">View Therapists</a></div>
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

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>