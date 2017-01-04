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
                <select id="location" title="Location" class="selectpicker show-tick form-control" data-live-search="true">
                  <option>Sligo</option>
                  <option>Dublin</option>
                  <option>Cork</option>
                </select>
            </div>
						<div class="form-group col-xs-6">

							<select id="subject" title="Subject" class="selectpicker show-tick form-control" data-live-search="true">
								<option>Maths</option>
								<option>Spanish</option>
								<option>English</option>
							</select>
						</div>
          </div>

          <div class="row">
						<div class="form-group col-xs-6">

              <select id="cycle" title="Cycle" class="selectpicker show-tick form-control" data-live-search="true">
                <option value="" disabled selected style="display: none;">Cycle</option>
                <option>Junior Certificate</option>
                <option>Leaving Certificate</option>
                <option>Third Level</option>
              </select>
            </div>
            <div class="form-group col-xs-6">
                    <div class="col-xs-10 pull-right">
                        <input style="" class="" type="image" src="images/small_search1.png" name="login-submit" id="login-submit" tabindex="2" class=""> <!-- Change this a search icon -->
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
