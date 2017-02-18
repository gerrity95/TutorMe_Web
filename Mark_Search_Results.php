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
  elseif ( (!empty($searchCycle)) && (empty($searchSubj)) )
  {

    $checkAgainst = "cycle_id";
    $table = "tutor_subjects";
    singleInput($searchCycle, $table, $checkAgainst, $conn, $i, $anyUsers);
  }
  elseif (!empty($searchLocation))
  {
      $checkAgainst = "location";
      $table = "users";
      singleInput($searchLocation, $table, $checkAgainst, $conn, $i, $anyUsers);
  }
  elseif (!empty($searchSubj))
  {
    //$getSubjectId = "SELECT subject_id FROM Subjects WHERE subject_name LIKE '%$searchSubj%' AND cycle_id = 1";
    //$subjectId = $conn->query($getSubjectId)->fetch_object()->subject_id;
    $checkAgainst = "subject_id";
    $table = "tutor_subjects";
    singleInput($searchSubj, $table, $checkAgainst, $conn, $i, $anyUsers);
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
