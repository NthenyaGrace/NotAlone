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
            $userid=$_SESSION['user_id'];
            $pname = $_SESSION['username'];
            $message = $_POST['msg'];
             $querys = "SELECT * FROM patdocs WHERE dname='yukthi' AND pname='$pname'  LIMIT 1";
             $query2="SELECT * FROM requests WHERE dname='yukthi' AND pname='$pname'  LIMIT 1";
                 $results = mysqli_query($link, $querys);
                 $num_rows=mysqli_num_rows($results);
                 $result2=mysqli_query($link,$query2);
                 $num_rows2=mysqli_num_rows($result2);
                 $query3 = "SELECT * FROM patdocs WHERE pname='$pname'  LIMIT 1";
$results3 = mysqli_query($link, $query3);
                 $num_rows3=mysqli_num_rows($results3);
                   if ($num_rows>=1) {
                    echo "<script>alert('You are already a patient of her.')</script>";
                  }
                  elseif ($num_rows2 >= 1) {
                      echo "<script>alert('You have already sent a request.')</script>";
                  }
                   elseif($num_rows3>=1)
                  {
                    echo "<script>alert('You can only consult one doctor at once.')</script>"; 
                  }
                  else
                  {
                     $query = "INSERT INTO `requests` (`id`, `pname`, `dname`, `message`) VALUES ('$userid', '$pname', 'yukthi', '$message' )";
                      if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }
               else
            {
                echo "<script>alert('Unknown error occured.')</script>";
            }
                  }
           
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
          <a class="navbar-brand" href="index_patient.php">
                    <img src="img/NAlogo.png" alt="" width="250" height="150" />
                </a>
        </div>
<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
       <ul class="nav navbar-nav">
            <li ><a href="index_patient.php">Home</a></li>
        <li class="active"><a href="pchat_index.php">Your Sessions</a></li>
              <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout');">Logout</a></li>
         
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
      <!--Booking Section-->
  <section id="about" class="home-section bg-gray paddingbot-5">
  	<div class="section-heading text-center">
                <h2 >Counsellor Yukti</h2>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-txt" style="text-align: center; font-size: 22px;">
            <p class="quote_p"><span class="quote"><i class="fa fa-quote-left qtc"></i>It is better to light a candle than curse the darkness.<i class="fa fa-quote-right qtc"></i></span></p>
          </div>
    <div class="sideh">
      <h4>Approach:</h4>
    </div>
    <div class="sidep">
I believe in individualized need based interventions for each person seeking therapy. There can never be a "one size fits all approach" to understanding an individual's inner world</div>
    <div class="sideh">
      <h4>Her Thoughts on Counseling:</h4>
    </div>
    <div class="sidep">
   You cannot do it all on your own. I believe that it is not healthy to burden yourself emotionally. Friends and family often act as our vents but a counsellor helps in a different way. Being a complete stranger, a counsellor offers an unbiased perspective and allows a safe environment to untangle the most feared and uncomfortable feelings that occupy a space within you. We all have blind spots and counselling acts as a mirror to help you assess yourself better.</div>
    <div class="sideh">
      <h4>Why I choose Counseling?</h4>
    </div>
    <div class="sidep">
 I loved studying psychology since my school days. Little did I know that the countless life struggles and an inquisitive mind would bring me to choosing this ever-growing and fulfilling career of becoming a Counselling psychologist.</div>
  <div class="sideh">
      <h4>Therapy Style:</h4>
    </div>
    <div class="sidep">
Words of comfort carefully administered are the oldest therapy known to man. I am committed to providing a trusted and containing therapeutic alliance that encourages people to discover their unique strengths and personal meanings in life.</div>
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