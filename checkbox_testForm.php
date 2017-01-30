<?php

include("backend/connection.php");

if(isset($_POST['submit']))
{
  if(empty($_POST['checkso']))
  {
    echo "<script language='javascript'>
    alert('all fields are required');
    </script>";
  }
  $answer = $_POST['checkso'];
  $count = count($answer);
  $theUserID = "2";
  $userSession = "joe_bloggs";

  for($i=0;$i < $count; $i++)
  {

    $addthem = "INSERT INTO tutor_subjects (user_id, cycle_id, subject_id) VALUES ((SELECT user_id FROM users WHERE username = '$userSession'), '1', '$answer[$i]')";
    mysqli_query($conn, $addthem);
  }
}
?>
