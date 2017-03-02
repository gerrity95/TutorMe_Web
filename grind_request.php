<?php
include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/check.php");

//include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/student_pages/search_results.php");

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

<div class="container">

  <?php
    $var_value = $_GET['tutorid'];
    echo "<h2>";
    echo $var_value;
    echo "</h2>";
   ?>
  <!-- Trigger the modal with a button -->
  <ul><li><a href="/TutorMe_Web/backend/logout.php">Logout</a></li></ul>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Request a Grind</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Request a Grind</h4>
        </div>
        <div class="modal-body">
          <form style="" action="" method="POST" role="form" id="requestGrind">
            <div class="row">
              <div class="form-group col-xs-6">
                <label for="firstname" class="h4 general_text">Name *</label>
                <input name="name" class="form-control" type="text" value="<?php echo $get_firstname; echo " "; echo $get_surname; ?>">
              </div>


              <div class="form-group col-xs-6">
                <label for="firstname" class="h4 general_text">Email *</label>
                <input name="email" class="form-control" type="text" placeholder="Enter Email...">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-6">
                <label for="firstname" class="h4 general_text">Date *</label>
                <input name="date" class="form-control" type="text" placeholder="Enter date...">
              </div>

              <div class="form-group col-xs-6">
                <label for="firstname" class="h4 general_text">Time *</label>
                <input name="time" class="form-control" type="text" placeholder="Enter Time...">
              </div>
            </div>
            <!-- Optional, put in a message box where the student can tell the tutor a little about themselves and the problem they are having -->

            <div id="msgSubmit" class="h3 text-center hidden"></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Submit</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/TutorMe_Web/js/request_grind.js"></script>
</body>
</html>

</body>
</html>
