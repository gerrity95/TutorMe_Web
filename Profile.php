<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap stylesheets -->
  <title>$Name Profile</title>
<!-- To incorporate Lato - a Google font -->
 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'  type='text/css'>

<!-- For social media buttons -->
<!-- The stylesheet where we add our own stylings -->
<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

<style type="text/css">
.tg  {border-collapse:collapse;padding-top: 10px;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:22px;margin-left: 25px;padding-top: 10px;background-color:#ededed;padding:18px 40px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:22px;font-weight:normal;padding-top: 10px;padding:18px 40px;background-color:#ededed;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;}
.tg .tg-h31u{font-family:Arial, Helvetica, sans-serif !important;;vertical-align:top}
.tg .tg-vyiz{background-color:#ededed;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
</style>

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
    </ul>
</li>

        </div>
      </ul>
    </div>
  </div>
</nav>

<!--Profile Picture, credentials and about section-->

<div class="container-fluid">
    <div style="padding-top:40px;padding-bottom:40px;background:url('images/blurred-background-4.jpg');background-size:cover;" class="row">
      <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="media">
                              <div align="center">
                                  <img class="thumbnail img-responsive" src="data:image/jpeg;base64,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" width="300px" height="200px">
                              </div>
                              <div class="media-body">
                                  <hr>
                                  <h3><strong>Joe Bloggs</strong></h3>
                                  <hr>
                                  <h3><strong>Location</strong></h3>
                                  <p>Dublin</p>
                                  <hr>
                                  <h3><strong>Subjects</strong></h3>
                                  <p>MATHS <br>geography<br>Science<br></p>
                                  <hr>
                                  <h3><strong>Rating</strong></h3>
                                  <p><strong>*****</strong></p>
                                  <hr>
                                  <a target="_blank"  class="btn btn-success btn-lg">Message Tutor</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><div class="col-sm-6 col-md-8 col-lg-8">
  <div style = "margin-left:15px;padding-top:10px;">
<h2 class="register_forms">About Joe</h2>
    </div>

  </div>
    <div class="col-sm-6 col-md-8 col-lg-8">
      <div style = "margin-left:15px;">
      <font color = "black"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p></font>
    </div>
  </div>
    <div class="col-sm-6 col-md-8 col-lg-8">
      <div style = "margin-left:15px;">
    <h2 class="register_forms">Experience and Credentials</h2>
    </div>
  </div>
    <div class="col-sm-6 col-md-8 col-lg-8">
      <div style = "margin-left:15px;">
    <font color = "black"><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p><font>
    </div>
    <div style = "margin-left:15px;">
  <h2 class="register_forms">Qualifications</h2>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div>
  <font color = "black"><p>MATHS <BR> GEOGRAPHY <BR></p><font>
  </div>
  </div>
  <div class="col-sm-6 col-md-10 col-lg-10" style="padding-left:10px;padding-right:10px;">
  <h2 class="register_forms">Find Joe Bloggs on map</h2>
  <!-- Add the Google Map in Here -->
    <iframe width="100%" height="250" width="250" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.636004935249!2d-6.259728683839165!3d53.38556197998734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e113b293d85%3A0xc81174de93fa22d6!2sSchool+of+Computing%2C+Dublin+City+University!5e0!3m2!1sen!2sie!4v1480694368387"></iframe>
  </div>
  </div>
</div>


  </div>



<div class="container-fluid" style="background-color:grey;background-size:cover;">
  <?php //include($root . "content_pages/footer.html"); ?>
</div>
<!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
-->

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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/mapSettings.js"></script>

</html>
