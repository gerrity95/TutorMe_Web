<html>
<head>
	<link rel="stylesheet" href="css/my_style.css">
</head>

<body>
    <div class="index_search_style animated fadeIn col-lg-12" style="">
        <div class=""><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Find a Tutor </h3><br>
        <form id="" action="" method="POST" role="form">
          <div class="row">
            <div class="form-group col-xs-6">
							<label for="location" class="h4 general_text">Location</label><br>
                <select id="location" title="Location" class="selectpicker show-tick form-control" data-live-search="true">
                  <option>Sligo</option>
                  <option>Dublin</option>
                  <option>Cork</option>
                </select>
            </div>
						<div class="form-group col-xs-6">
							<label for="location" class="h4 general_text">Subject</label><br>
							<select id="subject" title="Subject" class="selectpicker show-tick form-control" data-live-search="true">
								<option>Maths</option>
								<option>Spanish</option>
								<option>English</option>
							</select>
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
