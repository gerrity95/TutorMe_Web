<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap stylesheets -->
  <title>TutorMe Login</title>
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
                <li class="active"><a href="index.html" target="_blank">Home</a></li>
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
        <p style="" class="lead">Want to get in touch? Just fill out the form below and we will get back to you as soon as possible.</p>
    </div>
</div>

<div class="header-2">
	<div class="page-header header-filter" style="margin-bottom:0px;background-image: url('images/blurred-background-4.jpg');background-size:cover;min-height:750px;">
	<div class="container-fluid">
		<div class="row">
		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-1 ">
      <h2 class="register_forms">Contact Us </h2>

      <form style="padding-bottom:30px" role="form" id="contactForm">
        <div class="row">
          <div class="form-group col-sm-6">
            <label for="name" class="h4 register_forms">Name *</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group col-sm-6">
            <label for="email" class="h4 register_forms">Email *</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="form-group">
          <label for="message" class="h4 register_forms">Message *</label>
          <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
          <div class="help-block with-errors"></div>
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

<div class="container-fluid" style="padding-left:0px;padding-right:0px;">
<!-- Add the Google Map in Here -->
	<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.636004935249!2d-6.259728683839165!3d53.38556197998734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e113b293d85%3A0xc81174de93fa22d6!2sSchool+of+Computing%2C+Dublin+City+University!5e0!3m2!1sen!2sie!4v1480694368387"></iframe>

</div>


<div class="container-fluid" style="margin-bottom:20px;">
	<div style="border-top:1px solid #dbdfe5" class="row">
		<div style="border-left:1px solid #dbdfe5" class="col-xs-4">
		<br>
		<h3 style="text-align:center;font-family: 'Lato', sans-serif;">Connect with us.</h3>
		<center><ul style="padding-top:30px;" class="social-icons icon-rounded icon-zoom  list-unstyled list-inline">
		<li> <a href="#"><i class="fa fa-facebook"></i></a></li>
		<li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
		<li> <a href="#"><i class="fa fa-twitter"></i></a></li>
		</ul></center>
		<p style="text-align:center"><br>&#169; TutorMe, Mark Gerrity, James Burke</p>
		</div>

		<div style="border-left:1px solid #dbdfe5" class="col-xs-4">
      <h3 style="text-align:center;padding-top:30px;font-family: 'Lato', sans-serif;">Navigation</h3>
      <ul style="padding-top:30px;text-align:center" class="list-unstyled list-inline">
          <li> <a class="footer_links" style="padding-right:10px;border-right: 1px solid #646464" href="index.html">Home</a></li>
        <li> <a class="footer_links" style="padding-right:10px;border-right: 1px solid #646464" href="aboutus.html">About</a></li>
        <li> <a class="footer_links" href="contactus.php">Contact</a></li>
      </ul>

      <ul style="padding-top:10px;text-align:center" class="list-unstyled list-inline">
        <li> <a class="footer_links" style="padding-right:10px;border-right: 1px solid #646464" href="student_how.html">How it works</a></li>
        <li> <a class="footer_links" style="padding-right:10px;border-right: 1px solid #646464" href="index.html">Login</a></li>
        <li> <a class="footer_links" style="" href="register.html">Register</a></li>
      </ul>

		</div>

		<div style="border-left:1px solid #dbdfe5" class="col-xs-4">
        <center><img src="images/Logo.png"></center>
        <center><ul style="padding-top:0px;" class="list-unstyled list-inline">
        <li> <a class="footer_links" style="padding-right:10px;border-right: 1px solid #646464" href="sitemap.html">Sitemap</a></li>
        <li> <a class="footer_links" style="padding-right:10px;border-right: 1px solid #646464" href="privacy.html">Privacy Policy</a></li>
        <li> <a class="footer_links" href="service_terms.html">Terms of Service</a></li>
        </ul></center>
		</div>
	</div>
</div>



</body>
<!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
-->
<script type="text/javascript" src="js/contact.js"></script>

</html>
