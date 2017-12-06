<?php
//include("backend/connection.php");
//include("checkbox_testForm.php");

//Checkbox for the tutor registration form

$jc_sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = '1' ORDER BY  `Subjects`.`subject_name` ASC ");

  echo "<div class='checkbox checkbox-info checkbox_scroller' style='height:150px;width:350px;'>";
    //echo "<select style='' name='location' class='selectpicker show-tick' data-live-search='true'>";

    while ($jc_row = $jc_sql->fetch_assoc()) {

                      unset($jc_id, $jc_name);
                      $jc_id = $jc_row['subject_id'];
                      $jc_name = $jc_row['subject_name'];
                      echo '<input id="'.$jc_id.'" name="jc[]" type="checkbox" value="'.$jc_id.'"><label for="'.$jc_name.'">'.$jc_name.'</label><br>';
    }
        echo "</div>";
      //  echo "<center><input onClick='' type='submit' value='Submit' name='submit'></center>";
        //echo "</form>";

?>
