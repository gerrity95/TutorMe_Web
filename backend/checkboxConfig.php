<?php

//include("backend/connection.php");
//include("backend/check.php");

if(isset($_POST['tutorreg-submit']))
{

  $jc_subjects = $_POST['jc'];
  $lc_subjects = $_POST['lc'];
  $uni_subjects = $_POST['uni'];

  $jc_count = count($jc_subjects);
  $lc_count = count($lc_subjects);
  $uni_count = count($uni_subjects);


  if(!empty($_POST['jc']))
  {
    for($i=0;$i < $jc_count; $i++)
    {

      $addjc = "INSERT INTO tutor_subjects (user_id, cycle_id, subject_id) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '1', '$jc_subjects[$i]')";
      mysqli_query($conn, $addjc);
    }
  }

  if(!empty($_POST['lc']))
  {
    for($i=0;$i < $lc_count; $i++)
    {

      $addlc = "INSERT INTO tutor_subjects (user_id, cycle_id, subject_id) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '2', '$lc_subjects[$i]')";
      mysqli_query($conn, $addlc);
    }
  }

  if(!empty($_POST['uni']))
  {
    for($i=0;$i < $lc_count; $i++)
    {

      $adduni = "INSERT INTO tutor_subjects (user_id, cycle_id, subject_id) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '3', '$uni_subjects[$i]')";
      mysqli_query($conn, $adduni);
    }
  }


}
?>
