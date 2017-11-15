<?php

include($_SERVER['DOCUMENT_ROOT'] ."/TutorMe_Web/backend/connection.php");

 ?>


<html>
<head>
	<link rel="stylesheet" href="css/my_style.css">
</head>

<body>
    <div style="" class="index_search_style animated fadeIn col-lg-8" style="">
        <div class=""><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Find a Tutor </h3><br>
            <form style="" action="static_results.php" method="POST" role="form">
              <div class="row">
                <div class="form-group col-xs-12">
                  <?php include($root . "forms/dropdown_files/cycleSubject.php"); ?>
                </div>
                <div class="form-group col-xs-6">

                      <?php include($root . "forms/dropdown_files/locationDrop.php"); ?>
                </div>

                <div class="form-group col-xs-6">
                        <div class="col-xs-6 pull-right">
                            <input type="submit" name="search_submit" value="Search" class="btn btn-success pull-right">
                        </div>
                </div>

              </div>

            </form>
          </div>
    </div>
</ul>
<script>
$('#location').selectpicker("refresh");
$('#cycle').selectpicker("refresh");
$('#subject').selectpicker("refresh");
</script>

</body>


</html>
