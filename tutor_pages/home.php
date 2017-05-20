<?php
include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/connection.php");
include($root . "backend/check.php");
include ($root . "backend/functions.php");

$url = "/TutorMe_Web/student_pages/home.php";

if (isset($userSession))
{
  checkUserInfo($userSession, $userType, $current_full_member, $url, "tutor");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap stylesheets -->
  <title>Tutor Home</title> <!-- Potentially change to the user's name -->
<!-- To incorporate Lato - a Google font -->
 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'  type='text/css'>

<!-- For social media buttons -->
<!-- The stylesheet where we add our own stylings -->
<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="../css/my_style.css">
<link rel="stylesheet" href="../social_media/css/button_style.css">
<link rel="stylesheet" href="../css/animate.css">

</head>
<body style="background-color:#ededed">
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
                <li class=""><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-envelope"></span>Messages</a></li>
                <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-calendar"></span>Schedule</a></li>
                <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-user"></span>Profile</a></li>
            </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" style="padding-right:20px" class="dropdown-toggle" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-user"></span><?php echo $get_firstname; echo " "; echo $get_surname; ?></a>
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

  <div class="header-2">
  	<div class="page-header header-filter" style="">
  	   <div class="container-fluid">

         <div class="row"> <!-- Upcoming Grinds Row -->
           <div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 ">
            <!-- Put logo in here -->
             <h2><small style="font-family: 'Lato', sans-serif;">Welcome Message</small> </h2>

           </div>

           <div style="margin-top:60px;padding-bottom:20px" class="index_search_style col-sm-6 col-md-4 col-lg-4 col-xs-offset-1">
             <h3 style="text-align:center;font-family: 'Lato', sans-serif;">Upcoming Grind</h3><br>
             <p class="general_text" style="">Name: </p>
             <p class="general_text" style="">Location: </p>
             <p class="general_text" style="">Address: </p>
             <p class="general_text" style="">Price: </p>
             <p class="general_text" style="">Date/Time: </p>
          </div>
         </div>

  		    <div class="row"> <!-- Search Bar Row -->
        		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 ">
             <h2><small style="font-family: 'Lato', sans-serif;">Message API Section</small> </h2>
            </div>

            <!-- Change this to the profile edit section
                Provide a link to their profile
                Allow them to quick edit some options

            -->

        		<div style="margin-top:60px;min-height:200px;" class="index_search_style col-sm-6 col-md-4 col-lg-4 col-xs-offset-1">
              <h3 style="text-align:center" class="">Tutor Profile</h3>
              <h3><small class="general_text">Quick Edit</small></h3>
              <form id="" action="" method="POST" role="form">
                <div class="row">
                  <div class="form-group col-xs-6">
                      <?php include($root . "forms/dropdown_files/locationDrop.php"); ?>
                  </div>
                <div class="form-group col-xs-6">
                    <input style="border-radius:5px" type="text" class="form-control" name="price" id="inputPrice" placeholder="Price">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xs-6">
                    <input style="border-radius:5px" type="text" class="form-control" name="phoneNumber" id="inputAddress" placeholder="Phone Number">
                </div>
              <div class="form-group col-xs-6">
                    <input style="border-radius:5px" type="text" class="form-control" name="address" id="inputAddress" placeholder="Address">
              </div>
            </div>


                <div class="row">
      						<div class="form-group col-xs-7">
                          <div class="col-xs-10">
                              <p><a href="#">Advanced Options...</a></p>
                              <a href="#">View Profile...</a> <!-- pop up allowing to specify date and time -->
                          </div>
                  </div>
      						<div class="form-group col-xs-5">
                          <div class="col-xs-10 pull-right">
                              <input type="submit" value="Submit" class="btn btn-success pull-right"> <!-- Change this a search icon -->
                          </div>
                  </div>

                </div>
                  <!-- Error Message -->
                  <span><?php echo $error; ?></span>

              </form>
        </div>

            </div>
          </div>

          <div class="row"> <!-- Schedule Row -->
        		<div style="margin-top:60px" class="index_search_style col-sm-12 col-md-8 col-lg-8 col-xs-offset-2 ">
              <center><iframe style="padding-top:20px;padding-bottom:10px" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=mark.gerrity2%40mail.dcu.ie&amp;color=%2329527A&amp;ctz=Europe%2FDublin" style="border-width:0" width="700" height="500" frameborder="0" scrolling="no"></iframe></center>
        		</div>

          </div>


        </div>
      </div>
    </div>
    <div class="container-fluid" style="margin-bottom:20px;">
      <?php include("../content_pages/user_footer.php"); ?>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/bootstrap-select.js"></script>
<script type="text/javascript">
function getForm() {
$( "#search_form" ).load("index_search.php");
}


</script>
</body>

</html>
