<?php

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap stylesheets -->
  <title>Student Home</title> <!-- Potentially change to the user's name -->
<!-- To incorporate Lato - a Google font -->
 <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'  type='text/css'>

<!-- For social media buttons -->
<!-- The stylesheet where we add our own stylings -->
<link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>


<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../css/bootstrap-select.css">
<link rel="stylesheet" href="../css/my_style.css">
<link rel="stylesheet" href="../social_media/css/button_style.css">
<link rel="stylesheet" href="../css/animate.css">

</head>
<body style="background:#dbdfe5">
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

      <a href="index.html"><img src="../images/smallLogoWhite.png" style="padding-right:50px"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li class=""><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-home"></span>Home</a></li>
                <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-envelope"></span>Messages</a></li>
                <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-calendar"></span>Schedule</a></li>
            </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" style="padding-right:20px" class="dropdown-toggle" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-user"></span>Joe Bloggs</a>
          <ul style="" class="dropdown-menu">
            <li><a href="">Settings</a></li>
            <li><a href="../backend/logout.php">Logout</a></li>
          </ul>
        </li>

        </div>
      </ul>
    </div>
  </div>
  </nav>

  <div class="jumbotron">
      <div class="container-fluid">
  	<div class="page-header">
  		<h1>TutorMe <small style="font-family: 'Source Sans Pro', sans-serif;">Find the perfect tutor.</small></h1>
  	</div>
          <p style="" class="lead">TutorMe makes sure you never have to worry about a grind again.</p>
          <p><a href="register.html" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
      </div>
  </div>

  <div class="header-2">
  	<div class="page-header header-filter" style="background-image: url('../images/blurred-background-4.jpg');background-size:cover;min-height:750px">
  	   <div class="container-fluid">

         <div class="row"> <!-- Upcoming Grinds Row -->
           <div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 ">
            <!-- Put logo in here -->
             <h2><small style="color:white;font-family: 'Lato', sans-serif;">Message about upcoming grinds</small> </h2>

           </div>

           <div style="margin-top:60px;" class="index_search_style col-sm-6 col-md-4 col-lg-4 col-xs-offset-1">
             <p>Include Upcoming Grinds Here
          </div>
         </div>

  		    <div class="row"> <!-- Search Bar Row -->
        		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 ">
             <h2><small style="color:white;font-family: 'Lato', sans-serif;">Message about searching for a tutor</small> </h2>
            </div>

        		<div style="margin-top:60px;" class="index_search_style col-sm-6 col-md-4 col-lg-4 col-xs-offset-1">
              <!--<li style="list-style: none;" class="dropdown">
              <a href="#" onClick="getForm()" data-toggle="dropdown"><img alt="Tutor Search" class="search_images" src="../images/orig_search.png"></a>
              <div id="search_form"></div>
            </li> -->
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

                  <select id="subject" title="Subject" class="" data-live-search="true">
                    <option>Maths</option>
                    <option>Spanish</option>
                    <option>English</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-xs-6">

                  <select id="cycle" title="Cycle" class="" data-live-search="true">
                    <option value="" disabled selected style="display: none;">Cycle</option>
                    <option>Junior Certificate</option>
                    <option>Leaving Certificate</option>
                    <option>Third Level</option>
                  </select>
                </div>
                <div class="form-group col-xs-6">
                        <div class="col-xs-10 pull-right">
                            <input style="" class="" type="image" src="../images/small_search1.png" name="login-submit" id="login-submit" tabindex="2" class=""> <!-- Change this a search icon -->
                        </div>
                </div>
              </div>
                <!-- Error Message -->
                <span><?php echo $error; ?></span>

            </form>
        </div>

            </div>
          </div>

          <div class="row"> <!-- Messaging Row -->
        		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 ">
        		</div>

        		<div style="margin-top:60px;" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-1">
            </div>
          </div>

          <div class="row"> <!-- Schedule Row -->
        		<div style="margin-top:60px" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-2 ">
        		</div>

        		<div style="margin-top:60px;" class="col-sm-6 col-md-4 col-lg-4 col-xs-offset-1">

            </div>
          </div>


        </div>
      </div>
    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/bootstrap-select.js"></script>
<script type="text/javascript">
function getForm() {
$( "#search_form" ).load("index_search.php");
}


</script>
</body>

</html>
