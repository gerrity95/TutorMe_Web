<nav id="myNavbar" style="background-color: #000000;background: #000000;border-color: #000000;" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
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
          <ul class="white_text nav navbar-nav">
              <li class=""><a id="register_link" href="/TutorMe_Web/student_pages/home.php"><span style="padding-right:10px" class="glyphicon glyphicon-home"></span>Home</a></li>
              <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-envelope"></span>Messages</a></li>
              <li><a id="register_link" href="#"><span style="padding-right:10px" class="glyphicon glyphicon-calendar"></span>Schedule</a></li>
              <li><a id="register_link" href="/TutorMe_Web/student_pages/search_results.php"><span style="padding-right:10px" class="glyphicon glyphicon-search"></span>Search</a></li>
          </ul>
    <ul class="nav navbar-nav navbar-right">

      <li class="white_text dropdown">
        <a href="#" style="padding-right:20px" class="dropdown-toggle" data-toggle="dropdown"><span style="padding-right:10px" class="glyphicon glyphicon-user"></span><?php echo $get_firstname; echo " "; echo $get_surname; ?></a>
        <ul style="" class="white_text dropdown-menu">
          <li><a href="">Settings</a></li>
          <li><a href="/TutorMe_Web/backend/logout.php">Logout</a></li>
        </ul>
      </li>

      </div>
    </ul>
  </div>
</div>
</nav>
