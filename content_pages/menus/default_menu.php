<?php
$root = $_SERVER['DOCUMENT_ROOT'] . "/TutorMe_Web/";

 ?>

<nav id="myNavbar" style="position:fixed;background-color: #000000;background: #000000;border-color: #000000;" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

    <a href="index.php"><img src="images/smallLogoWhite.png" style="padding-right:50px"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav white_text">
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About</a></li>
              <li><a href="contactus.php">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">How it Works <span class="caret"></span></a>
                <ul style="" class="dropdown-menu white_text">
                  <li><a href="student_how.html">For a student</a></li>
                  <li><a href="tutor_how.html">For a tutor</a></li>
                </ul>
              </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php" class="white_text"><span style="padding-right:10px" class="glyphicon glyphicon-user"></span>Register</a></li>
            <li class="dropdown">
        <a href="#" class="white_text" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-log-in"></span>Login</a>
        <?php include($root . "forms/dropdown_login_form.php"); ?>
      </li>

          </ul>
  </div>
</div>
</nav>
