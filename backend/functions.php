<?php

function starRating($starNumber)
{
  for($x=1;$x<=$starNumber;$x++) {
      echo '<img src="/TutorMe_Web/images/full_star.png" />';
  }
  if (strpos($starNumber,'.')) {
      echo '<img src="/TutorMe_Web/images/half_star.png" />';
      $x++;
  }
  while ($x<=5) {
      echo '<img src="/TutorMe_Web/images/blank_star.png" />';
      $x++;
  }

}

//Below function will check extra details about the user currently in session
function checkUserInfo($userInSesssion, $userType, $membership, $url, $desiredUser)
{

  if ($membership == "false")
  {
    	header("Location: /TutorMe_Web/register_full.php");
  }
  else {
      if ($userType != $desiredUser) //Desired user will depend on the type of page they're on. i.e. on student home the desired user is a student
      {
        header("Location: " . $url);
      }

  }

}
?>
