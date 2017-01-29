<?php
include("backend/connection.php");

$sql = $conn->query("SELECT subject_id, subject_name from Subjects WHERE cycle_id = '1' ORDER BY  `Subjects`.`subject_name` ASC ");

echo "<html>";
    echo "<body>";
    echo "<center><h4>From DB</h4></center>";
    echo "<div class='checkbox checkbox-info checkbox_scroller' style='height:150px;width:350px;'>";
    //echo "<select style='' name='location' class='selectpicker show-tick' data-live-search='true'>";

    while ($row = $sql->fetch_assoc()) {

                      unset($id, $name);
                      $id = $row['subject_id'];
                      $name = $row['subject_name'];
                      echo '<input id="'.$name.'" name="checkso[]" type="checkbox" value="'.$id.'"><label for="'.$name.'">'.$name.'</label><br>';
    }

        echo "</div>";
        echo "</body>";
        echo "</html>";

$test = "hello";

?>

<body style="background:#dbdfe5">
  <!--
<center><h4>Manual Input</h4></center>
<form action="" method="POST">
                <div class="checkbox checkbox-info checkbox_scroller" style="height: 150px;width:350px;">
    <input id="jc1" name="" type="checkbox"><label for="jc1">Art </label><br>
    <input id="jc2" name="" type="checkbox"><label for="jc2">Business Studies </label><br>
    <input id="jc3" name="" type="checkbox"><label for="jc3">CSPE </label><br>
    <input id="jc4" name="" type="checkbox"><label for="jc4">English </label><br>
    <input id="jc5" name="" type="checkbox"><label for="jc5">French </label><br>
    <input id="jc6" name="" type="checkbox"><label for="jc6">Geography </label><br>
    <input id="jc7" name="" type="checkbox"><label for="jc7">German </label><br>
    <input id="jc8" name="" type="checkbox"><label for="jc8">History </label><br>
    <input id="jc9" name="" type="checkbox"><label for="jc9">Home Economics </label><br>
    <input id="jc10" name="" type="checkbox"><label for="jc10">Irish </label><br>
    <input id="jc11" name="" type="checkbox"><label for="jc11">Italian </label><br>
    <input id="jc12" name="" type="checkbox"><label for="jc12">Latin </label><br>
    <input id="jc13" name="" type="checkbox"><label for="jc13">Materials Technology (wood) </label><br>
    <input id="jc14" name="" type="checkbox"><label for="jc14">Maths </label><br>
    <input id="jc15" name="" type="checkbox"><label for="jc15">Metalwork </label><br>
    <input id="jc16" name="" type="checkbox"><label for="jc16">Music </label><br>
    <input id="jc17" name="" type="checkbox"><label for="jc17">Science </label><br>
    <input id="jc18" name="" type="checkbox"><label for="jc18">Spanish </label><br>
    <input id="jc19" name="" type="checkbox"><label for="jc19">Technical Graphics </label><br>
    <input id="jc20" name="" type="checkbox"><label for="jc20">Technology </label><br>
</div>

<center><input type="submit" name="register-submit" value="Register" id="reg-submit" class="btn btn-success "></center>
</form>
-->

                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                      <script src="js/bootstrap-select.js"></script>
</body>
