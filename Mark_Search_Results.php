<?php

include("backend/connection.php");


//Name search php
$noReturn = "";
$Cycle = "";
$anyUsers = "";
$i = 0;



if(isset($_POST['submit'])) {

  $searchCycle = $_POST['cycle'];
  $searchLocation = $_POST['search_loc'];
  $searchSubj = $_POST['subjects'];

  $relevantUserId = array();
  $firstNames = array();
  $surnames = array();
  $locations = array();

  if( (empty($searchCycle)) && (empty($searchLocation)) && (empty($searchSubj)) )
  {
    $noReturn = "No Input Found";
  }
  elseif ( (!empty($searchCycle)) && (empty($searchSubj)) && (empty($searchLocation)) )
  {

    $checkAgainst = "cycle_id";
    $table = "tutor_subjects";
    singleInput($searchCycle, $table, $checkAgainst, $conn, $i, $anyUsers);
  }
  elseif ( (!empty($searchLocation)) && (empty($searchCycle)) )
  {
      $checkAgainst = "location";
      $table = "users";
      singleInput($searchLocation, $table, $checkAgainst, $conn, $i, $anyUsers);
  }
  elseif ( (!empty($searchSubj)) && (empty($searchLocation)))
  {
    $checkAgainst = "subject_id";
    $table = "tutor_subjects";
    singleInput($searchSubj, $table, $checkAgainst, $conn, $i, $anyUsers);
  }
  elseif ( (!empty($searchLocation)) && (!empty($searchCycle)) && (empty($searchSubj))) //This is if location and cycle is filled
  {
    $firstChoice = "cycle_id";
    multipleInput($searchCycle, $searchLocation, $firstChoice, $conn, $i, $anyUsers);
  }
  else //This is if all boxes are filled or basically the location and the subject
  {
    $firstChoice = "subject_id";
    multipleInput($searchSubj, $searchLocation, $firstChoice, $conn, $i, $anyUsers);
  }

}


function singleInput($input, $desiredTable, $check, $connection, $i, $users)
{
  global $relevantUserId;
  global $firstNames;
  global $surnames;
  global $locations;
  global $noReturn;

  if ($check == "location")
  {
      $getRelevantUsers = mysqli_query($connection, "SELECT DISTINCT user_id FROM $desiredTable WHERE $check LIKE '%$input%' AND user_type= 'tutor'");
  }
  else
  {
      $getRelevantUsers = mysqli_query($connection, "SELECT DISTINCT user_id FROM $desiredTable WHERE $check LIKE '%$input%'");
  }

  $countRelevantUsers = mysqli_num_rows($getRelevantUsers);

  if($countRelevantUsers == 0)
  {
    $noReturn = "No Relevant Users";
    $users = "false";
    return $noReturn;
  }
  else {
      while($rowlocation = mysqli_fetch_array($getRelevantUsers)){
      $relevantUserId[$i] = $rowlocation['user_id'];
      $i++;
    }
  }

  if ($users != "false")
  {
    $numOfUsers = sizeof($relevantUserId);


    for($i = 0; $i < $numOfUsers; $i++)
    {
      $userDetails = mysqli_query($connection, "SELECT * FROM users WHERE user_id = '$relevantUserId[$i]' AND user_type= 'tutor'");

      while($row = $userDetails->fetch_assoc())
      {
         $firstNames[$i] = $row["first_name"];
         $surnames[$i] = $row["surname"];
         $locations[$i] = $row["location"];
      }
    }
  }
}

function multipleInput($firstInput, $locationInput, $firstCheck, $connection, $i, $users) {
  global $relevantUserId;
  global $firstNames;
  global $surnames;
  global $locations;
  global $noReturn;


  $getRelevantUsers = mysqli_query($connection, "SELECT * from users WHERE user_id IN (SELECT user_id FROM tutor_subjects WHERE $firstCheck = '$firstInput') AND location LIKE '%$locationInput%' AND user_type = 'tutor'");

  $countRelevantUsers = mysqli_num_rows($getRelevantUsers);

  if($countRelevantUsers == 0)
  {
    $noReturn = "No Relevant Users";
    $users = "false";
    return $noReturn;
  }
  else {
      while($rowlocation = mysqli_fetch_array($getRelevantUsers)){
      $relevantUserId[$i] = $rowlocation['user_id'];
      $i++;
    }
  }

  if ($users != "false")
  {
    $numOfUsers = sizeof($relevantUserId);


    for($i = 0; $i < $numOfUsers; $i++)
    {
      $userDetails = mysqli_query($connection, "SELECT * FROM users WHERE user_id = '$relevantUserId[$i]' AND user_type= 'tutor'");

      while($row = $userDetails->fetch_assoc())
      {
         $firstNames[$i] = $row["first_name"];
         $surnames[$i] = $row["surname"];
         $locations[$i] = $row["location"];
      }
    }
  }

}


?>

<?php echo $noReturn; ?><br><br>


<?php

$length = sizeof($relevantUserId);

  for($i = 0;$i < $length; $i++)
  {
    //echo ("User ID: " + $relevantUserId[$i] + "<br>");
    echo "User ID: ";
    echo $relevantUserId[$i];
    echo "<br>";
    echo "Name: ";
    echo $firstNames[$i];
    echo " ";
    echo $surnames[$i];
    echo "<br>";
    echo "Location: ";
    echo $locations[$i];
    echo "<br>";
  }

?><br><br>
