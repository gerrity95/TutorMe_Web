<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap stylesheets -->
  <title>Tutor Me - Forgot Password</title>
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
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

			<a href="index.html"><img src="images/smallLogoWhite.png" style="padding-right:50px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.html" target="_blank">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">How it Works <span class="caret"></span></a>
                  <ul style="" class="dropdown-menu">
                    <li><a href="student_how.html">For a student</a></li>
                    <li><a href="tutor_how.html">For a tutor</a></li>
                  </ul>
                </li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="index.html"><span style="padding-right:10px" class="glyphicon glyphicon-log-in"></span>Login</a></li> -->
        <li><a href="register.html" class=""><span style="padding-right:10px" class="glyphicon glyphicon-user"></span>Register</a></li>
        <li class="dropdown">
    <a href="#" class="" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-log-in"></span>Login</a>
    <ul class="dropdown-menu dropdown_width animated slideInRight" style="width:350px" role="menu">
        <div class="col-lg-12">
            <div class="text-center"><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Login</h3><br>
            <form id="" action="" method="post" role="form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-7">
                            <input type="checkbox" tabindex="3" name="remember" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>
                        <div class="col-xs-5 pull-right">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </ul>
</li>

        </div>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron">
    <div class="container-fluid">
	<div class="page-header">
		<h1>TutorMe <small style="font-family: 'Source Sans Pro', sans-serif;">Find the perfect tutor.</small></h1>
	</div>
        <p style="" class="lead">Forgotten your password? No worries, just enter your username and email address below and we will email you a new one !</p>
    </div>
</div>

<div class="header-2">
	<div class="page-header header-filter" style="margin-bottom:0px;background-image: url('images/blurred-background-4.jpg');background-size:cover;min-height:750px;">
	<div class="container-fluid">
		<div class="row">
		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-1 ">
      <h2 class="register_forms">Please enter your username and email address below to reset your password.</h2>

      <form style="padding-bottom:30px" role="form" id="PasswordReset">
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="name" class="h4 register_forms">Username *</label>
            <input type="text" class="form-control" id="name" placeholder="Enter username" required>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-6">
            <label for="email" class="h4 register_forms">Email *</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success btn-lg pull-right ">
        <p class="white_text">* All fields required</p>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
      </form>
		</div>

		<div class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-1 contact_background">

      <h3 class="general_text">Other ways to contact TutorMe</h3>

        <br>
        <img src="icons\png-24px\mail.png">
        <h4 style="display: inline;" class="general_text">Email us directly</h4><br>
        <p class="general_text">tutormeire@gmail.com</p><br>

        <img src="icons\png-24px\phone-outline.png">
        <h4 style="display: inline"class="general_text">Give us a call</h4><br>
        <p class="general_text">+353891234567</p><br>

        <img src="icons\png-24px\home-outline.png">
        <h4 style="display: inline" class="general_text">Where you can find us</h4><br>
        <p class="general_text  ">School of Computing,
        <br>Dublin City University,
        <br>Dublin 9,
        <br>Ireland
      </p><br>

        <ul style="padding-top:30px;" class="social-icons icon-rounded icon-zoom  list-unstyled list-inline">
    		<li> <a href="#"><i class="fa fa-facebook"></i></a></li>
    		<li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
    		<li> <a href="#"><i class="fa fa-twitter"></i></a></li>
    		</ul>

		</div>
	 </div>
	</div>
  </div>
</div>

<div class="container-fluid" style="margin-bottom:20px;">
  <?php include("content_pages/footer.html"); ?>
</div>
<!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
-->
<script type="text/javascript" src="js/PasswordReset.js"></script>
</body>

</html>
