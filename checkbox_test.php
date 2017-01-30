<?php
//include("backend/connection.php");
include("checkbox_testForm.php");

$sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = '1' ORDER BY  `Subjects`.`subject_name` ASC ");

echo "<html>";
    echo "<body>";
    echo "<center><h4>From DB</h4></center>";
    echo "<form action='' method='POST' style=''>";
    echo "<div class='checkbox checkbox-info checkbox_scroller' style='height:150px;width:350px;'>";
    //echo "<select style='' name='location' class='selectpicker show-tick' data-live-search='true'>";

    while ($row = $sql->fetch_assoc()) {

                      unset($id, $name);
                      $id = $row['subject_id'];
                      $name = $row['subject_name'];
                      echo '<input id="'.$name.'" name="checkso[]" type="checkbox" value="'.$id.'"><label for="'.$name.'">'.$name.'</label><br>';
    }
        echo "</div>";
        echo "<center><input onClick='' type='submit' value='Submit' name='submit'></center>";
        echo "</form>";
        echo "</body>";
        echo "</html>";

?>

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
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <link rel="stylesheet" href="css/my_style.css">
  <link rel="stylesheet" href="social_media/css/button_style.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/checkbox.css">


</head>
