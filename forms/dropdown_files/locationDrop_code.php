<?php

//include("connection.php");

$sql = $conn->query("SELECT location_id, location_name from Location");

echo "<html>";
    echo "<body>";
    echo "<select name='location'>";

    while ($row = $sql->fetch_assoc()) {

                      unset($id, $name);
                      $id = $row['location_id'];
                      $name = $row['location_name'];
                      echo '<option name="loc_id" value="'.$id.'">'.$name.'</option>';

    }

        echo "</select>";
        echo "</body>";
        echo "</html>";

 ?>
