<?php
include("backend/registerserv.php");

if((isset($_SESSION['username']) != ''))
{
  header("Location: tutor_pages/home.php"); //Redirect to the homepage, statement to check the type of user?
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap stylesheets -->
    <title>TutorMe Register</title>

	<!-- To incorporate Lato - a Google font -->
	 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'  type='text/css'>

	<!-- For social media buttons -->
	<!-- The stylesheet where we add our own stylings -->
	<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/my_style.css">
	<link rel="stylesheet" href="social_media/css/button_style.css">
  <link rel="stylesheet" href="css/animate.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>
<body style="background:#dbdfe5">
  <div style="margin-bottom:0px;background-image: url('images/robert-dickow-46105.jpg');background-size:cover;min-height:650px" class="jumbotron">


      	<?php include($root . "content_pages/menus/default_menu.php"); ?>

  <div  class="col-sm-8 col-md-6 col-lg-6">
<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
  <h1 style="color:white;" class="white_text">TutorMe <small class="white_text"></small></h1>
</div><br>
      <p class="lead white_headings">Helping you find the perfect tutor.</p>
      <p style="color:white" class="lead">We make sure you never have to worry about a grind again.</p><br>
      <p><a href="register.php" class="btn btn-success btn-lg">Find out more</a></p>
  </div>
  <div class="col-sm-8 col-md-6 col-lg-6">
    <?php include("forms/initial_register.php"); ?>
  </div>
</div>


<div class="container-fluid">
    <?php include($root . "content_pages/info_boxes.php"); ?>
</div>



<div class="container-fluid" style="margin-bottom:20px;">
  <?php include($root . "content_pages/footer.html"); ?>
</div>

</body>
</html>
