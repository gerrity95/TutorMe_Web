<?php
include("connection.php");
$sql = mysqli_query($conn, "SELECT * FROM Subjects WHERE cycle_id='".$_GET["sid"]."' ORDER BY subject_name");
if(mysqli_num_rows($sql)) {
  $data = array();
  while($row=mysqli_fetch_array($sql))
  {
    $data[] = array(
      'subject_id' => $row['subject_id'],
      'sid' => $row['cycle_id'],
      'subject_name' => $row['subject_name']

    );
  }
  header('Content=type: application/json');
  echo json_encode($data);
}

 ?>
