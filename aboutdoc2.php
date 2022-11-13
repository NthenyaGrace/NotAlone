<?php
    session_start(); 
    include("function.php");
    include ("connection.php");
    include('database_connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
	<title>Not Alone | Services</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
 <script src="https://kit.fontawesome.com/cfbb7eefe6.js" crossorigin="anonymous"></script>
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">
  <style type="text/css">
    .sideh
    {
      margin-left: 10%;
      color: #3FBBC0;
    }
    .sidep
    {
      margin-left: 10%;
      margin-right: 15%;
      color: black;
      font-size: 22px;
      line-height: 1.8em;
      padding-bottom: 50px;
    }
    .quote {
    color: #9b9497;
    font-size: 18px;
    }
.btn:hover{
color: #404040 !important;
font-weight: 700 !important;
padding: 120px;
letter-spacing: 3px;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}
.forma{
 margin-left: 10%;
 margin-right: 15%;
  font-family: 'Open Sans', sans-serif;
  font-size: 20px;
    line-height: 1.6em;
}
</style>
</head>
 <?php
 $link = mysqli_connect("localhost", "root", "", "notalone");

        if(isset($_POST['reqbtn'])){
            $userid=['user_id'];
            $pname = $_SESSION['username'];
            $message = $_POST['msg'];
             $querys = "SELECT * FROM patdocs WHERE dname='tanushree' AND pname='$pname'  LIMIT 1";
             $query3 = "SELECT * FROM patdocs WHERE pname='$pname'  LIMIT 1";
$results3 = mysqli_query($link, $query3);
                 $num_rows3=mysqli_num_rows($results3);
             $query2="SELECT * FROM requests WHERE dname='tanushree' AND pname='$pname'  LIMIT 1";
                 $results = mysqli_query($link, $querys);
                 $num_rows=mysqli_num_rows($results);
                 $result2=mysqli_query($link,$query2);
                 $num_rows2=mysqli_num_rows($result2);
                  $query4="SELECT * FROM requests WHERE  pname='$pname'  LIMIT 1";
                  $results4 = mysqli_query($link, $query4);
                 $num_rows4=mysqli_num_rows($results4);
                   if ($num_rows>=1) {
                    echo "<script>alert('You are already a patient of her.')</script>";
                  }
                  elseif ($num_rows2 >= 1) {
                      echo "<script>alert('You have already sent a request.')</script>";
                  }
                   elseif ($num_rows4 >= 1) {
                      echo "<script>alert('You have already sent a request to another doctor.')</script>";
                  }
                   elseif($num_rows3>=1)
                  {
                    echo "<script>alert('You can only consult one doctor at once.')</script>"; 
                  }
                  else
                  {
                     $query = "INSERT INTO `requests` (`id`, `pname`, `dname`, `message`) VALUES ('$userid', '$pname', 'tanushree', '$message' )";
                      if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }
               else
            {
                echo "<script>alert('Unknown error occured.')</script>";
            }
                  }
   /* if (performQuery($querys)) {
          echo "<script>alert('You are already a patient of her.')</script>";
    }
    else {
      $query = "INSERT INTO `requests` (`id`, `pname`, `dname`, `message`) VALUES (NULL, '$pname', 'jamuna', '$message' )";
            if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }
            else
            {
                echo "<script>alert('Unknown error occured.')</script>";
            }
    }*/
           
        }    
    ?>
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
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
           <ul class="nav navbar-nav">
            <li ><a href="index_patient.php">Home</a></li>
            <li class="active"><a href="pchat_index.php">Your Sessions</a></li>
          
            <li><a href="logout.php">Logout</a></li>
         
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
      <!--Booking Section-->
  <section id="about" class="home-section bg-gray paddingbot-5">
  	<div class="section-heading text-center">
                <h2 >Dr.  Tanushree</h2>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-txt" style="text-align: center; font-size: 22px;">
            <p class="quote_p"><span class="quote"><i class="fa fa-quote-left qtc"></i>Even in fall, hope springs.<i class="fa fa-quote-right qtc"></i></span></p>
          </div>
    <div class="sideh">
      <h4>Approach:</h4>
    </div>
    <div class="sidep">
 The client is the expert of his life, hence my approach tends to focus around client-centred therapy along with positive psychotherapy. I also incorporate CBT in my style to make therapy effective for concerns around thoughts and emotions.</div>
    <div class="sideh">
      <h4>Her Thoughts on Counseling:</h4>
    </div>
    <div class="sidep">
  Counselling is a personal choice that reflects self-empowerment, taking control of your own life, setting goals, understanding one's strengths and weaknesses and making positive choices for the future. It helps to build patience, consistency, and growth.</div>
    <div class="sideh">
      <h4>Why I choose Counseling?</h4>
    </div>
    <div class="sidep">
I believe that we might not do great things but we can do small things with great love. Two important aspects of counselling that made me very keen on taking it were; firstly, the fact that I wanted to serve humanity to the best of my abilities and secondly, my innate nature where being empathetic and congenial helps me to communicate and connect with others.</div>
  <div class="sideh">
      <h4>Therapy Style:</h4>
    </div>
    <div class="sidep">
  I generally go with the flow and try to focus on emotions as they tend to govern the way we think. Establishing a good rapport by being a facilitator to the client is my basic key to help the client in their situation.</div>
 <form class="forma" method="post">
 <textarea name="msg" placeholder="Write the summary of your problem and send request" rows="10" cols="100" required></textarea>
<center>  <button name="reqbtn" type="submit" class="btn" style="background: #3FBBC0;color: #fff;border-radius: 30px;font-size: 18px; margin-bottom: 10%; padding: 10px;">Send Request</button></center>
 </form>
</section>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>