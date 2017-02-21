<?php
include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/connection.php");
$sql = mysqli_query($conn, "SELECT * FROM Cycle");
if(mysqli_num_rows($sql)) {
  $data = array();
  while($row=mysqli_fetch_array($sql))
  {
    $data[] = array(
      'cycle_id' => $row['cycle_id'],
      'cycle_name' => $row['cycle_name']

    );
  }
  header('Content=type: application/json');
  echo json_encode($data);
}

 ?>
