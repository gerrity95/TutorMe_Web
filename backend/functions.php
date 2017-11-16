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

function jc_checkbox()
{
  $jc_sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = '1' ORDER BY  `Subjects`.`subject_name` ASC ");

    echo "<div class='checkbox checkbox-info checkbox_scroller' style='height:150px;width:350px;'>";
      //echo "<select style='' name='location' class='selectpicker show-tick' data-live-search='true'>";

      while ($jc_row = $jc_sql->fetch_assoc()) {

                        unset($jc_id, $jc_name);
                        $jc_id = $jc_row['subject_id'];
                        $jc_name = $jc_row['subject_name'];
                        echo '<input id="'.$jc_id.'" name="jc[]" type="checkbox" value="'.$jc_id.'"><label for="'.$jc_name.'">'.$jc_name.'</label><br>';
      }
          echo "</div>";

}

?>
