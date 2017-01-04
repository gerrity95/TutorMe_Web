<html>
<head>
	<link rel="stylesheet" href="css/my_style.css">
</head>

<body>
    <div class="index_search_style animated fadeIn col-lg-12" style="  background-color: #FFFFFF;margin-top: 20px;border-radius: 5px;">
        <div class=""><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Find a Tutor </h3><br>
        <form id="" action="" method="POST" role="form">
          <div class="row">
            <div class="form-group col-xs-6">
                <select title="Location" class="form-control" data-live-search="true">
                  <option>Sligo</option>
                  <option>Dublin</option>
                  <option>Cork</option>
                </select>
            </div>

            <div class="form-group col-xs-6">

              <select title="Cycle" class="form-control" data-live-search="true">
                <option value="" disabled selected style="display: none;">Cycle</option>
                <option>Junior Certificate</option>
                <option>Leaving Certificate</option>
                <option>Third Level</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-6">

              <select title="Subject" class="form-control" data-live-search="true">
                <option>Maths</option>
                <option>Spanish</option>
                <option>English</option>
              </select>
            </div>

            <div class="form-group col-xs-6">
                    <div class="col-xs-10 pull-right">
                        <input type="image" src="images/small_search.png" name="login-submit" id="login-submit" tabindex="2" class=""> <!-- Change this a search icon -->
                    </div>
            </div>
          </div>
            <!-- Error Message -->
            <span><?php echo $error; ?></span>

        </form>
    </div>
</ul>


</body>


</html>
