<ul class="dropdown-menu animated fadeIn" style="margin-top:20px;width:100%" role="menu">
    <div class="col-lg-12">
        <div class=""><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Find a Tutor </h3><br>
        <form id="" action="" method="POST" role="form">
          <div class="row">
            <div class="form-group col-xs-6">

                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Location" value="" autocomplete="off">
            </div>

            <div class="form-group col-xs-6">

                <input type="text" name="cycle" id="cycle" tabindex="2" class="form-control" placeholder="Cycle" autocomplete="off">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-6">

                <input type="text" name="subjects" id="subjects" tabindex="2" class="form-control" placeholder="Subject" autocomplete="off">
            </div>

            <div class="form-group col-xs-6">
                    <div class="col-xs-10 pull-right">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="2" class="form-control btn btn-success" value="Search"> <!-- Change this a search icon -->
                    </div>
            </div>
          </div>
            <!-- Error Message -->
            <span><?php echo $error; ?></span>

        </form>
    </div>
</ul>
