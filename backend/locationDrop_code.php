<link rel="stylesheet" href="/TutorMe_Web/css/my_style.css">

<?php

//include("connection.php");

$sql = $conn->query("SELECT location_id, location_name from Location");

echo "<html>";
    echo "<body>";
    echo "<div>";
    echo "<select style='' name='location' class='form-control' data-live-search='true'>";

    while ($row = $sql->fetch_assoc()) {

                      unset($id, $name);
                      $id = $row['location_id'];
                      $name = $row['location_name'];
                      echo '<option name="loc_id" value="'.$id.'">'.$name.'</option>';

    }

        echo "</select>";
        echo "</div>";
        echo "</body>";
        echo "</html>";

 ?>
