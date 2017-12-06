<?php
include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/connection.php");
include($root . "backend/functions.php");
//include($root . "backend/check.php");

include($root . "search_output.php");


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


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/my_style.css">
<link rel="stylesheet" href="social_media/css/button_style.css">
<link rel="stylesheet" href="css/animate.css">

</head>
<body style="background-color:#ededed">
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

  <div class="jumbotron">
      <div style="border-bottom: 1px solid #111111" class="container-fluid">
        <div class="col-sm-8 col-md-6 col-lg-6">
          <p style="margin-top:50px" class="lead">Search Here</p>

          <form style="" action="" method="POST" role="form">

              <div class="form-group col-xs-12">
                <?php include($root . "forms/dropdown_files/cycleSubject.php"); ?>
              </div>
              <div class="form-group col-xs-6">

                    <?php include($root . "forms/dropdown_files/locationDrop.php"); ?>
              </div>

              <div class="form-group col-xs-6">
                <div class="col-xs-6 pull-right">
                  <button name="search_submit" class="btn btn-success pull-right" type="submit">Submit</button>
                </div>

              </div>


          </form>
        </div>
          <!-- Include the search form here again -->
      </div>
  </div>

  <!-- For outputting the tutors we will put them into a grid. we will have this grid default to three sections wide -->
  <div class="container-fluid">
    <?php

    $length = 0;

    $length = sizeof($relevantUserId);


      if ($length == 0)
      {
        echo "<div class='container-fluid'>";
    		echo "<h3 class='general_text'>No matches.</h3>";
        echo "<p class='lead'>Sadly no tutors matched your search. There are still plenty of tutors out there.</p>";
        echo "</div>";
      }
      else {

        for($i = 0;$i < $length; $i++)
        {
          //echo ("User ID: " + $relevantUserId[$i] + "<br>");
          $desiredId = $user_identity[$i];
          echo "<a href='/TutorMe_Web/tutor_pages/static_profile.php?tutorid=$desiredId'>";
          echo "<div style='' class='col-sm-6 col-md-3 col-lg-3 tutor_quickview'>";
          echo "<br><center><img class='feature_images' src='/TutorMe_Web/images/default_head.jpg'></center>";
          echo "<h3 style='text-align:center'>";
          echo $firstNames[$i];
          echo " ";
          echo $surnames[$i];
          echo "</h3>";
          echo "<h3 style='text-align:center'><small>***Small description of the tutor themselves talking about what they can offer to the student ***</small></h3>";
          echo "<center>";
          echo "<p class='general_text'>";
          $star = 1; starRating($star);
          echo "</p>"; //The star rating system was developing using a tutorioal found on stackoverflow
          echo "<a href=''>View Profile...</a></center>";
          echo "</div>";
          echo "</a>";
        }
      }

    ?>

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
