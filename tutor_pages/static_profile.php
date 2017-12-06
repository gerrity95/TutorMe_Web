<?php
include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/connection.php");
//include($root . "student_pages/search_results.php");
include($root . "backend/functions.php");

$tutorId = $_GET['tutorid'];
$list_subjects = array();

  $user_details = "SELECT * FROM users where user_id = '$tutorId'";

  $first_name = $conn->query($user_details)->fetch_object()->first_name;
  $surname = $conn->query($user_details)->fetch_object()->surname;
  $location = $conn->query($user_details)->fetch_object()->location;
  $email = $conn->query($user_details)->fetch_object()->email;

  $tutor_specific_details = "SELECT * FROM user_tutor where user_id = '$tutorId'";

  //$rating = $conn->query($check_id)->fetch_object()->rating;
  //$qualifications = $conn->query($check_id)->fetch_object()->qualifications;
  $bio = $conn->query($tutor_specific_details)->fetch_object()->Personal_Statement;
  $price = $conn->query($tutor_specific_details)->fetch_object()->price;


function getSubjects($connection, $cycle) //Must add in parameters
{
  global $list_subjects;
  global $tutorId;

  $request = "SELECT subject_name FROM Subjects WHERE subject_id IN (SELECT subject_id FROM tutor_subjects WHERE user_id = '$tutorId' AND cycle_id = '$cycle')";
  $get_Subjects = mysqli_query($connection, $request);
  $i = 0;
  $count_Subjects = mysqli_num_rows($get_Subjects);
  if($count_Subjects == 0)
  {
    $noReturn = "No Relevant Subjects";
    return $noReturn;
  }
  else {
      while($rowlocation = $get_Subjects->fetch_assoc()){
      $list_subjects[$i] = $rowlocation['subject_name']; //This is where we output the list of subjects
      $i++;
    }
  }

}

function listSubjects($list)
{
  $length = 0;

  $length = sizeof($list);

    if ($length == 0)
    {
      echo "<p class='white_text'";
      echo $noReturn;
      echo "</p>";

    }
    else {
      for($i = 0;$i < $length; $i++)
      {
        echo "<p class='white_text'>";
        echo $list[$i];
        echo "</p>";
      }
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
  <title><?php echo $first_name; ?>'s Profile</title>
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

</head>
<body style="background:#dbdfe5">
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

			<a href="/TutorMe_Web/index.php"><img src="/TutorMe_Web/images/smallLogoWhite.png" style="padding-right:50px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="white_text nav navbar-nav">
                <li class="white_text"><a href="/TutorMe_Web/index.php">Home</a></li>
                <li><a href="/TutorMe_Web/aboutus.php">About</a></li>
                <li><a href="/TutorMe_Web/contactus.php">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">How it Works <span class="caret"></span></a>
                  <ul style="" class="dropdown-menu">
                    <li><a href="/TutorMe_Web/student_how.html">For a student</a></li>
                    <li><a href="/TutorMe_Web/tutor_how.html">For a tutor</a></li>
                  </ul>
                </li>
            </ul>

			<ul class="white_text nav navbar-nav navbar-right">
        <li><a href="register.php" class=""><span style="padding-right:10px" class="glyphicon glyphicon-user"></span>Register</a></li>
        <li class="dropdown">

    <a href="#" class="" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-log-in"></span>Login</a>
  	<?php include($root . "forms/dropdown_login_form.php"); ?>
</li>

      </ul>
    </div>
  </div>
</nav>

<!--Profile Picture, credentials and about section-->

<div class="page-header header-filter" style="padding-bottom:0px;margin-bottom:0px;background-image: url('/TutorMe_Web/images/blurred-background-4.jpg');background-size:cover;min-height:750px">

      <div style="margin-top:40px;" class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="media">
                              <div align="center">
                                  <img class="thumbnail img-responsive" src="/TutorMe_Web/images/default_head.jpg">
                              </div>
                              <div class="media-body">
                                  <hr>
                                  <h3 style=""><?php echo $first_name; echo " "; echo $surname; ?></h3>
                                  <hr>
                                  <h3 style="">Location</h3>
                                  <p class="regular_text"><?php echo $location; ?></p>
                                  <hr>
                                  <h3>Rating</h3>
                                  <?php $star = 3; starRating($star); ?>
                                  <hr>
                                  <button type="button" class="btn btn-success btn-lg"  data-toggle="modal" data-target="#myModal">Message Tutor</button>

                                  <?php include($root . "modals/login_modal.php"); ?>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  <div class="col-sm-6 col-md-8 col-lg-8">
    <div style = "margin-left:15px;padding-top:10px;">
      <h3 class="register_forms">About <?php echo $first_name; echo " "; echo $surname; ?></h3>
    </div>
  </div>

    <div class="col-sm-6 col-md-8 col-lg-8">
      <div style = "margin-left:15px;">
        <p class="white_text"><?php echo $bio; ?></p>
      </div>
  </div>

  <div class="col-sm-6 col-md-8 col-lg-8">
    <div style = "margin-left:15px;padding-top:10px;">
      <h3 class="register_forms">Price</h3>
      <p class="white_text">&euro; <?php echo $price; ?></p>
    </div>
  </div>

  <div class="col-sm-6 col-md-8 col-lg-8">
        <h3 style="margin-left:15px" class="register_forms">Subjects</h2>
  </div>

  <div class="row">
    <div class="col-sm-4 col-md-2 col-lg-2 col-xs-offset-1">
      <h2><small style="color:white;font-family: 'Lato', sans-serif;">Junior Certificate</small> </h2>
          <p class="white_text">
            <?php

            $jc_id = 1;
            getSubjects($conn, $jc_id);
            listSubjects($list_subjects);

             ?>
          </p>
    </div>
    <div class="col-sm-4 col-md-2 col-lg-2">
      <h2><small style="color:white;font-family: 'Lato', sans-serif;">Leaving Certificate</small> </h2>
      <p class="white_text">
        <?php

        $lc_id = 2;
        getSubjects($conn, $lc_id);
        listSubjects($list_subjects);

         ?>
      </p>
    </div>
    <div class="col-sm-4 col-md-2 col-lg-2">
      <h2><small style="color:white;font-family: 'Lato', sans-serif;">Third Level</small> </h2>
      <p class="white_text">
        <?php

        $tl_id = 3;
        getSubjects($conn, $tl_id);
        listSubjects($list_subjects);

         ?>
      </p>
    </div>
  </div>

</div>

  <div class="container-fluid" style="padding-left:0px;padding-right:0px;">
  <!-- Add the Google Map in Here -->
  	<iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2379.636004935249!2d-6.259728683839165!3d53.38556197998734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e113b293d85%3A0xc81174de93fa22d6!2sSchool+of+Computing%2C+Dublin+City+University!5e0!3m2!1sen!2sie!4v1480694368387"></iframe>

  </div>

  </div>

<div class="container-fluid" style="margin-bottom:20px;">
  <?php include($root . "content_pages/footer.html"); ?>
</div>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="/TutorMe_Web/js/contact.js"></script>
<script type="text/javascript" src="/TutorMe_Web/js/mapSettings.js"></script>

</html>
