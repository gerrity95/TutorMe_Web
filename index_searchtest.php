<?php
include("SearchTest.php")
?>

<html>
<head>
	<link rel="stylesheet" href="css/my_style.css">
</head>

<body>
    <div class="index_search_style animated fadeIn col-lg-12" style="">
        <div class=""><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Find a Tutor </h3><br>
        <form action="SearchTest.php" method="POST" role="form">
          <div class="row">
            <div class="form-group col-xs-6">
							<label for="location" class="h4 general_text">Location</label><br>
              <input type = "text" name="search" placeholder = "Enter a Location"/>
              <input type = "submit" id= "location" name= 'location_submit' value =">>"/>
            </div>
						<div class="form-group col-xs-6">
							<label for="subject" class="h4 general_text">Subject</label><br>
              <input type = "text" name="search" placeholder = "Enter a Subject"/>
              <input type = "submit" id = "subject" name= 'subject_submit' value =">>"/>
						</div>

					<div class="form-group col-xs-6">
					  <label for="cycle" class="h4 general_text">Cycle</label><br>
            <input type = "text" name="search" placeholder = "Enter a cycle"/>
            <input type = "submit" id ="cycle" name= 'cycle_submit' value =">>"/>
					</div></div>
				</div>
          <div class="row">
						<div class="form-group col-xs-7">
                    <div class="col-xs-10">
                        <a href="#">Advanced Options...</a> <!-- pop up allowing to specify date and time -->
                    </div>
            </div>
          </div>

        </form>
    </div>
</ul>
<?php print $Subject;?>
<?php print $Cycle;?>
<?php print $Location;?>
</body>
</html>
