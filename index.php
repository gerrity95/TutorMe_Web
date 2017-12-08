<?php
//include("backend/loginserv.php");

/*
The below is not an ideal sollution, would be better if we could reference the queries from query.php
This is so if the user is already in a session, they are still redirected to the correct page
*/

include("backend/connection.php");


if((isset($_SESSION['username']) != ''))
{
	$_SESSION['username'] = $user;
	$check_reg = "SELECT full_reg FROM users WHERE username='$user'";
	$result = $conn->query($check_reg)->fetch_object()->full_reg;

	if ($result == "false")
	{
		header("Location: register_full.php");
	}
	else {
		header("Location: tutor_pages/home.php"); // Redirect to another page
	}
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap stylesheets -->
    <title>TutorMe - Find the perfect Tutor</title>
	<!-- To incorporate Lato - a Google font -->
	 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'  type='text/css'>

	<!-- For social media buttons -->
	<!-- The stylesheet where we add our own stylings -->
	<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/my_style.css">
	<link rel="stylesheet" href="social_media/css/button_style.css">
  <link rel="stylesheet" href="css/animate.css">

</head>
<body style="background:#dbdfe5">
	<div style="margin-bottom:0px;background-image: url('images/baim-hanif-89800.jpg');background-size:cover;min-height:700px" class="jumbotron">

		<?php include($root . "content_pages/menus/default_menu.php"); ?>

    <div  class="col-sm-8 col-md-6 col-lg-6">
	<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
		<h1 style="color:white;" class="white_text">TutorMe <small class="white_text"></small></h1>
	</div><br>
				<p class="lead white_headings">Helping you find the perfect tutor.</p>
        <p style="color:white" class="lead">We make sure you never have to worry about a grind again.</p><br>
        <p><a href="register.php" class="btn btn-success btn-lg">Get started today</a></p>
    </div>
		<div class="col-sm-8 col-md-6 col-lg-6">
			<?php include("forms/initial_register.php"); ?>
		</div>
</div>

<div class="container-fluid">
	    <?php include($root . "content_pages/info_boxes.php"); ?>
</div>




<div class="header-2">
	<div class="" style="background-image: url('images/blurred-background-4.jpg');background-size:cover;min-height:400px">
	<div class="container-fluid">
		<div class="row">

<!--
		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 ">
			<center><img class="feature_images" src="images/LogoWhiteLarge.png" /></center>
			<h2 class="register_forms">Finding you the perfect Tutor </h2>
			<h2><small style="color:white;font-family: 'Lato', sans-serif;">Here at TutorMe our number one focus is finding the best tutor for you.</small> </h2>
		</div>
-->
		<div style="margin-top:60px;" class="col-sm-12 col-md-8 col-lg-8 col-xs-offset-1">
			<?php include("forms/index_search.php"); ?>
<!--
			<li style="list-style: none;" class="dropdown">
	<a href="#" onClick="getForm()" data-toggle="dropdown"><img alt="Tutor Search" class="search_images" src="images/orig_search.png"></a>
		<div id="search_form"></div>
</li>
-->

		</div>


	 </div>
	</div>
  </div>
</div>



<div class="container-fluid" style="margin-bottom:20px;">
  <?php include($root . "content_pages/footer.html"); ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/bootstrap-select.js"></script>
<script type="text/javascript">
function getForm() {
$( "#search_form" ).load("forms/index_search.php");
}

</script>
</body>

</html>
