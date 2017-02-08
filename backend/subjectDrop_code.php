<link rel="stylesheet" href="/TutorMe_Web/css/my_style.css">

<?php

//include("connection.php");

//Adjust cycle_id so it equals whatever cycle the user has picked in the DB
$sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = '1'");

echo "<html>";
    echo "<body>";
    echo "<div>";
    echo "<select style='' name='subject' class='form-control' data-live-search='true'>";
    echo "<option value='' disabled selected>Subject</option>";

    while ($row = $sql->fetch_assoc()) {

                      unset($id, $name);
                      $id = $row['subject_id'];
                      $name = $row['subject_name'];
                      echo '<option name="subject_id" value="'.$id.'">'.$name.'</option>';

    }

        echo "</select>";
        echo "</div>";
        echo "</body>";
        echo "</html>";

 ?>
