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

function checkUserInfo($userInSesssion, $userType, $membership, $url, $desiredUser, $rejectedUser, $rejectUrl)
{

  if ($membership == "false")
  {
    //Redirect straight away to register_full
  }
  else {
      if ($userType == $desiredUser) //Desired user will depend on the type of page they're on. i.e. on student home the desired user is a student
      {
        //Redirect to $url
      }
      elseif ($userType == $rejectedUser) //This will be the opposite of the desired user
      {
        //Redirect to $rejectUrl
      }
  }



}

?>
