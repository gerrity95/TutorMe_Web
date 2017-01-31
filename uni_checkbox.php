<?php
//include("backend/connection.php");
//include("checkbox_testForm.php");

$uni_sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = '3' ORDER BY  `Subjects`.`subject_name` ASC ");

echo "<html>";
    echo "<body>";
    echo "<center><h4>University Subjects</h4></center>";
    //echo "<form action='' method='POST' style=''>";
    echo "<div class='checkbox checkbox-info checkbox_scroller' style='height:150px;width:350px;'>";
    //echo "<select style='' name='location' class='selectpicker show-tick' data-live-search='true'>";

    while ($uni_row = $uni_sql->fetch_assoc()) {

                      unset($uni_id, $uni_name);
                      $uni_id = $uni_row['subject_id'];
                      $uni_name = $uni_row['subject_name'];
                      echo '<input id="'.$uni_id.'" name="uni[]" type="checkbox" value="'.$uni_id.'"><label for="'.$uni_name.'">'.$uni_name.'</label><br>';
    }
        echo "</div>";
      //  echo "<center><input onClick='' type='submit' value='Submit' name='submit'></center>";
      //  echo "</form>";
        echo "</body>";
        echo "</html>";

?>
