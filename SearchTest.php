<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '2p64yhj7');
define('DB_NAME', 'james');

//Establish connection with the server

		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//Selecting the database

		//$db = mysqli_select_db($conn, "php_test");

		$root = $_SERVER['DOCUMENT_ROOT'] . "/TutorMe_Web/";


//Name search php
$Cycle = "";

if(isset($_POST['cycle_submit'])) {

  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
  $query = mysqli_query($conn, "SELECT * FROM users WHERE CYCLE LIKE '%$searchq%' ORDER BY FIRSTNAME") or die ("could not match any results to your search");
  $count = mysqli_num_rows($query);



  if($count ==0){
    $Cycle = 'Sorry we could not match any results with your search please try another query.';
  }else{
    while($row = mysqli_fetch_array($query)){
      $fname = $row['FIRSTNAME'];
      $lname = $row['SURNAME'];
      $id = $row['USER_ID'];

      $Cycle .= '<div>'.$fname.' '.$lname.'</div>';

// $row = $mysqli->query("SELECT.....")->fetch_array();
      }

    }
}
//Location search php
$Location = "";

if(isset($_POST['location_submit'])) {

  $searchlocation = $_POST['search'];
  $searchlocation = preg_replace("#[^0-9a-z]#i","",$searchlocation);
  $querylocation = mysqli_query($conn, "SELECT * FROM users WHERE LOCATION LIKE '%$searchlocation%' ORDER BY FIRSTNAME") or die ("could not match any results to your search");
  $countlocation = mysqli_num_rows($querylocation);



  if($countlocation ==0){
    $Location = 'Sorry we could not match any results with your search please try another query.';
  }else{
    while($rowlocation = mysqli_fetch_array($querylocation)){
      $fname = $rowlocation['FIRSTNAME'];
      $lname = $rowlocation['SURNAME'];
      $id = $rowlocation['USER_ID'];

      $Location .= '<div>'.$fname.' '.$lname.'</div>';


// $row = $mysqli->query("SELECT.....")->fetch_array();
      }

    }
}

//Subject Search PHP
$Subject = "";

if(isset($_POST['subject_submit'])) {

  $searchsubject = $_POST['search'];
  $searchsubject = preg_replace("#[^0-9a-z]#i","",$searchsubject);
  $querysubject = mysqli_query($conn, "SELECT * FROM users WHERE SUBJECT LIKE '%$searchsubject%' ORDER BY FIRSTNAME") or die ("could not match any results to your search");
  $countsubject = mysqli_num_rows($querysubject);



  if($countsubject ==0){
    $Subject = 'Sorry we could not match any results with your search please try another query.';
  }else{
    while($rowsubject = mysqli_fetch_array($querysubject)){
      $fname = $rowsubject['FIRSTNAME'];
      $lname = $rowsubject['SURNAME'];
      $id = $rowsubject['USER_ID'];

      $Subject .= '<div>'.$fname.' '.$lname.'</div>';

//$row = $mysqli->query("SELECT.....")->fetch_array();
      }

    }
}
?>


<?php echo $Location; ?>
<?php echo $Cycle; ?>
<?php echo $Subject; ?>