<?php
//include("checkbox_testForm.php");

$lc_sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = '2' ORDER BY  `Subjects`.`subject_name` ASC ");

echo "<div class='checkbox checkbox-info checkbox_scroller' style='height:150px;width:350px;'>";
    //echo "<select style='' name='location' class='selectpicker show-tick' data-live-search='true'>";

    while ($lc_row = $lc_sql->fetch_assoc()) {

                      unset($lc_id, $lc_name);
                      $lc_id = $lc_row['subject_id'];
                      $lc_name = $lc_row['subject_name'];
                      echo '<input id="'.$lc_id.'" name="lc[]" type="checkbox" value="'.$lc_id.'"><label for="'.$lc_name.'">'.$lc_name.'</label><br>';
    }
        echo "</div>";
        //echo "<center><input onClick='' type='submit' value='Submit' name='submit'></center>";
      //  echo "</form>";

?>
