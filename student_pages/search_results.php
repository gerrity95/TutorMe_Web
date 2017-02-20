<?php
include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/connection.php");
//include($root . "backend/check.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap stylesheets -->
  <title>Search Results</title> <!-- Potentially change to the user's name -->
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

  <div class="jumbotron">
      <div style="border-bottom: 1px solid #111111" class="container-fluid">
          <p style="margin-top:50px" class="lead">Want to search again?</p>
          <p style="" class="lead">Include the search form here again</p>
          <!-- Include the search form here again -->
      </div>
  </div>

  <!-- For outputting the tutors we will put them into a grid. we will have this grid default to three sections wide -->
  <div class="container-fluid">
      <div style="padding-top:40px;padding-bottom:40px;background:#ededed" class="row">
          <div style="" class="col-sm-6 col-md-3 col-lg-3 tutor_quickview">
            <br><center><img class="feature_images" src="../images/default_head.jpg"></center>
  		      <h3 style="text-align:center">Tutor Name</h3>
  			  <h3 style="text-align:center"><small>***Small description of the tutor themselves talking about what they can offer to the student ***</small></h3>
          <center>
            <p class="general_text">***Input star rating here*** </p> <!-- The star rating system was developing using a tutorioal found on stackoverflow -->
            <a href="">View Profile...</a></center>


          </div>
          <div style="border-left:1px solid #dbdfe5;margin-left:5%;" class="col-sm-6 col-md-3 col-lg-3">
              <h2 style="text-align:center">Messaging</h2>
  			<h3 style="text-align:center"><small>Connect with your tutor or student seamlessly. No need to go anywhere else to find out what they need or to ask them any questions.</small></h3>
               <br><center><img class="feature_images" src="images/messaging_symbol.png"></center>
          </div>
          <div style="border-left:1px solid #dbdfe5; margin-left:5%;" class="col-sm-6 col-md-3 col-lg-3">
              <h2 style="text-align:center">Tutor Search</h2>
  			  <h3 style="text-align:center"><small>Never worry that the tutor doesn't best suit your needs. Easily search through all the tutors in your area to find the one that best suits you.<br></small></h3>
  			  <center><img class="feature_images" src="images/greenUser.png"></center>
  		</div>

  	</div>
  </div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/bootstrap-select.js"></script>
  <script type="text/javascript">
  function getForm() {
  $( "#search_form" ).load("index_search.php");
  }

  $(function() {
			$('input[type=submit]').click(function() {
				$('p').html('<span class="stars">'+parseFloat($('input[name=amount]').val())+'</span>');
				$('span.stars').stars();
			});
			$('input[type=submit]').click();
		});

		$.fn.stars = function() {
			return $(this).each(function() {
				$(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16));
			});
		}


  </script>
</body>
</html>
