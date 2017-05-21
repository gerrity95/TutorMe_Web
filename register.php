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
    <nav id="myNavbar" style="position:fixed;background-color: #000000;background: #000000;border-color: #000000;" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

  			<a href="index.php"><img src="images/smallLogoWhite.png" style="padding-right:50px"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="nav navbar-nav white_text">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="aboutus.php">About</a></li>
                  <li><a href="contactus.php">Contact</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">How it Works <span class="caret"></span></a>
                    <ul style="" class="dropdown-menu white_text">
                      <li><a href="student_how.html">For a student</a></li>
                      <li><a href="tutor_how.html">For a tutor</a></li>
                    </ul>
                  </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="register.php" class="white_text"><span style="padding-right:10px" class="glyphicon glyphicon-user"></span>Register</a></li>
                <li class="dropdown">
            <a href="#" class="white_text" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-log-in"></span>Login</a>
            <?php include($root . "forms/dropdown_login_form.php"); ?>
          </li>

              </ul>
      </div>
    </div>
  </nav>

  <div  class="container-fluid">
<div style="border-bottom:0px;" class="page-header" style="padding-top:20px">
  <h1 style="color:white" class="white_text">TutorMe <small class="white_text"></small></h1>
</div><br>
      <p style="color:white" class="lead">Want to join us?</p>
      <p style="color:white" class="lead">Fill out the form below and you will be up and running in no time.</p><br>
      <p><a href="index.php" class="btn btn-success btn-lg">Login here</a></p>
  </div>
</div>


	<div class="" style="padding-bottom:30px;background-image: url('images/blurred-background-4.jpg');background-size:cover;min-height:500px">
	<div class="container-fluid">
		<div class="row">
		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-1 ">
			<center><img class="feature_images" src="images/LogoWhiteLarge.png" /></center>
			<h2 style="padding-top:10px;color:white;font-family: 'Lato', sans-serif;">Want to join us at TutorMe? </h2>
			<h2><small style="color:white;font-family: 'Lato', sans-serif;">We would love to have you. All you have to do is just fill in a few details and then we will be ready to get you started.</small> </h2>

		</div>

		<div style="margin-top:50px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-1">
			<h3 class="register_forms">Register For TutorMe</h3><br>
			 <form action="" method="POST">
			 <div class="form-group">
				<label style="color:white" class="radio-inline">
					<input type="radio" name="optradio" value="tutor" required>Tutor
				</label>
				<label style="color:white" class="radio-inline">
					<input type="radio" name="optradio" value="student" required>Student
				</label>
			</div>
			 <div class="form-group">
         <label for="email" class="h4 register_forms">Email *</label>
            <input style="border-radius:5px" type="email" class="form-control" name="email" id="register-email" placeholder="Email" required>
            <div class="help-block with-errors"></div>
        </div><br>
		<div class="form-group">
      <label for="username" class="h4 register_forms">Username *</label>
            <input style="border-radius:5px" type="text" class="form-control" name="username" id="reg-username" placeholder="Username" required>
            <div class="help-block with-errors"></div>
        </div><br>
		<div class="form-group">
      <label for="password" class="h4 register_forms">Password *</label>
            <input style="border-radius:5px" type="password" class="form-control" name="password" id="reg-password" placeholder="Password" required>
            <div class="help-block with-errors"></div>
        </div><br>
        <input type="submit" name="register-submit" value="Register" id="reg-submit" class="btn btn-success btn-lg pull-right ">

      </form>
        <p class="white_text">* All fields required</p>
        <!-- Error Message -->
        <span><?php
        echo "<h3 class='general_text' style='color:red;'>";
        echo $error;
        echo "</h3>"; ?></span>
	<br>

		</div>


	</div>
	</div>
</div>

<div class="container-fluid">
    <div style="padding-top:40px;padding-bottom:40px;background:#ededed" class="row">
        <div style="border-left:1px solid #dbdfe5" class="col-sm-6 col-md-4 col-lg-4">
					<center><img class="" src="images/calendar.png"></center>
		      <h2  style="font-family: 'Lato', sans-serif;text-align:center">Scheduling</h2>
			  <h3 style="font-family: 'Lato', sans-serif;text-align:center"><small>Never forget about a grind ever again. With our scheduling service you will always know when and where you should be.</small></h3>
			 <br>


        </div>
        <div style="border-left:1px solid #dbdfe5" class="col-sm-6 col-md-4 col-lg-4">
					<center><img class="" src="images/TextUs-icon.png"></center>
						<h2 style="font-family: 'Lato', sans-serif;text-align:center;text-align:center">Messaging</h2>
			<h3 style="font-family: 'Lato', sans-serif;text-align:center;text-align:center"><small>Connect with your tutor or student seamlessly. No need to go anywhere else to find out what they need or to ask them any questions.</small></h3>
             <br>
        </div>
        <div style="border-left:1px solid #dbdfe5" class="col-sm-6 col-md-4 col-lg-">
					<center><img class="" src="images/newUser.png"></center>
            <h2 style="font-family: 'Lato', sans-serif;text-align:center;text-align:center">Tutor Search</h2>
			  <h3 style="font-family: 'Lato', sans-serif;text-align:center;text-align:center"><small>Afraid you won't be able to find the best tutor? Well never fear, with TutorMe you can search through an array of different tutors to make sure you find what's best for you.<br></small></h3>
		</div>

	</div>
</div>



<div class="container-fluid" style="margin-bottom:20px;">
  <?php include($root . "content_pages/footer.html"); ?>
</div>

</body>
</html>
