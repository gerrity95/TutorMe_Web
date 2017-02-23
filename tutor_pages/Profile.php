<?php
include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/connection.php");
//include($root . "student_pages/search_results.php");

 ?>

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

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="../css/my_style.css">
<link rel="stylesheet" href="../social_media/css/button_style.css">
<link rel="stylesheet" href="../css/animate.css">

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

      <a href="index.html"><img src="../images/smallLogoWhite.png" style="padding-right:50px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class=""><a id="register_link" href="/TutorMe_Web/student_pages/home.php"><span style="padding-right:10px" class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-envelope"></span>Messages</a></li>
                <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-calendar"></span>Schedule</a></li>
                <li><a id="register_link" href="/TutorMe_Web/student_pages/search_results.php"><span style="padding-right:10px" class="glyphicon glyphicon-calendar"></span>Search **Change logo**</a></li>
            </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" style="padding-right:20px" class="dropdown-toggle" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-user"></span>Joe Bloggs</a>
          <ul style="" class="dropdown-menu">
            <li><a href="">Settings</a></li>
            <li><a href="../backend/logout.php">Logout</a></li>
          </ul>
        </li>

        </div>
      </ul>
    </div>
  </div>
  </nav>

<!--Profile Picture, credentials and about section-->

<div class="container-fluid">
    <div style="padding-top:40px;padding-bottom:40px;background:url('/TutorMe_Web/images/blurred-background-4.jpg');background-size:cover;" class="row">

      <div style="margin-top:40px;" class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="media">
                              <div align="center">
                                  <img class="thumbnail img-responsive" src="data:image/jpeg;base64,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" width="300px" height="300px">
                              </div>
                              <div class="media-body">
                                  <hr>
                                  <h3><strong>Kanye West</strong></h3>
                                  <hr>
                                  <h3><strong>Location</strong></h3>
                                  <p></p>
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
<h2 class="register_forms">About $name</h2>
    </div>

  </div>
    <div class="col-sm-6 col-md-8 col-lg-8">

      <div style = "margin-left:15px;">
      <font color = "black"><p>LookIf you hadOne shotOr one opportunityTo seize everything you ever wantedIn one momentWould you capture itOr just let it slip?
YoHis palms are sweaty, knees weak, arms are heavyThere's vomit on his sweater already,
mom's spaghettiHe's nervous, but on the surface he lookscalm and readTo drop bombs, but he keeps on forgettin'What he wrote down, the whole crowd goes so loudHe opens his mouth, but the words won't come outHe's chokin', how, everybody's jokin' nowThe clocks run out, times up, over, blaow!Snap back to reality, oh there ges gravityOh, there goes Rabbit, he chokedHe's so mad, but he won't give up that easy? NoHe won't have it, he knows his whole back city's ropesIt don't matter, he's dope, he knows that, but he's bro</p></font>
    </div>
  </div>
    <div class="col-sm-6 col-md-8 col-lg-8">
      <div style = "margin-left:15px;">
    <h2 class="register_forms">Experience and Credentials</h2>
    </div>
  </div>
    <div class="col-sm-6 col-md-8 col-lg-8">
      <div style = "margin-left:15px;">
    <font color = "black"><p>Oh I wish I was a punk rocker with flowers in my hair In 77 and 69 revolution was in the airI was born too late to a world that doesn't careOh I wish I was a punk rocker with flowers
      in my hairWhen the head of state didn't play guitar,Not everybody drove a carWhen music really mattered and radio was king,When accountants didn't have controlAnd the media couldn't buy your soulAnd computers were still scary and we didn't know everythingOh I wish I was a punk rocker with floers in my hairIn 77 and 69 revolution was in the airI was born too late to a world that doesn't careOh I wish I was a punk rocker with flowers in m</p><font>
    </div>
    <div style = "margin-left:15px;">
  <h2><b><u><font color = "#ededed">Qualifications</font></u></b></h2>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-4">
    <div>
  <font color = "black"><p>MATHS <BR> GEOGRAPHY <BR></p><font>
  </div>
  </div>
  <div class="col-sm-6 col-md-10 col-lg-10" style="padding-left:10px;padding-right:10px;">
  <h2><b><u><font color = "#ededed">Find $NAME on map</font></u></b></h2>
  <!-- Add the Google Map in Here -->
    <iframe width="100%" height="250" width="250" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.636004935249!2d-6.259728683839165!3d53.38556197998734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e113b293d85%3A0xc81174de93fa22d6!2sSchool+of+Computing%2C+Dublin+City+University!5e0!3m2!1sen!2sie!4v1480694368387"></iframe>
  </div>
  </div>
</div>
<!--<div style="margin-left:25px;padding-top:65px;">
<img src="http://d235mwrq2dn9n5.cloudfront.net/wp-content/uploads/2016/11/rtr_kanye_west_jc_150407_16x9_992-1.jpg" alt="Profile Pic" style = "width:500px;height500px;" />
<h2>About $name</h2>
</div>
-->

<!--Table for subjects, location, etc-->

<!--<div class="col-sm-6 col-md-4 col-lg-4">
<div style="text-align:center">
  <h4>Test</h4>
  <table class="tg" align="center">
  <tr>
    <td class="tg-yw4l"><b>Subject(s)</b></td>
    <td class="tg-yw4l">Geography (JC)</td>
  </tr>
  <tr>
    <td class="tg-yw4l"><b>Location</b></td>
    <td class="tg-yw4l">$Location</td>
  </tr>
  <tr>
    <td class="tg-yw4l"><b>Qualifications</b></td>
    <td class="tg-yw4l">$Qualifications</td>
  </tr>
  <tr>
    <td class="tg-yw4l"><b>Price</b></td>
    <td class="tg-yw4l">$Price</td>
  </table>
  </tr>
  </div>
</div>-->

<!--  <div class="col-sm-6 col-md-4 col-lg-4" style="padding-left:10px;padding-right:10px;text-align:center;">
<h4>Rating</h4>
<img src="images\5star.png" alt="Profile Pic" height="280" width="400">
</div>-->


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
<script type="text/javascript" src="/TutorMe_Web/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="/TutorMe_Web/js/contact.js"></script>
<script type="text/javascript" src="/TutorMe_Web/js/mapSettings.js"></script>

</html>
