<?php
 ?>


<html>
<head>
	<link rel="stylesheet" href="css/my_style.css">
</head>

<body>
    <div style="" class="index_search_style animated fadeIn col-lg-12" style="">
        <div class=""><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Find a Tutor </h3><br>
        <form style="padding-left:25px;padding-right:25px;" action="" method="POST" role="form">
          <div class="row">
						<div class="form-group col-xs-6">
							<?php include($root . "forms/dropdown_files/cycleSubject.php"); ?>
						</div>
            <div class="form-group col-xs-6">
							   <label for="phone_number" class="h4 general_text">Location *</label>
                  <?php include($root . "forms/dropdown_files/locationDrop.php"); ?>
            </div>
					</div>
				</div>
          <div class="row">
						<div class="form-group col-xs-7">
                    <div class="col-xs-10">
                        <a href="#">Advanced Options...</a> <!-- pop up allowing to specify date and time -->
                    </div>
            </div>
						<div class="form-group col-xs-5">
                    <div class="col-xs-10 pull-right">
                        <input type="submit" value="Search" class="btn btn-success pull-right"> <!-- Change this a search icon -->
                    </div>
            </div>

          </div>
            <!-- Error Message -->
            <span><?php echo $error; ?></span>

        </form>
    </div>
</ul>
<script>
$('#location').selectpicker("refresh");
$('#cycle').selectpicker("refresh");
$('#subject').selectpicker("refresh");
</script>

</body>


</html>
