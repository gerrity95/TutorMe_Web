<?php

//include("connection.php");

$sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = 1");

echo "<html>";
    echo "<body>";
    echo "<select name='jc_subjects' class='selectpicker show-tick' multiple>";

    while ($row = $sql->fetch_assoc()) {

                      unset($id, $name);
                      $id = $row['subject_id'];
                      $name = $row['subject_name'];
                      echo '<option name="jc_subject_id" value="'.$id.'">'.$name.'</option>';

    }

        echo "</select>";
        echo "</body>";
        echo "</html>";

 ?>
