<?php

include("Mark_Search_Results.php");

 ?>
<html>
<head>
	<link rel="stylesheet" href="css/my_style.css">
<title>Search</title>
</head>
<!--Search by name form-->
<body>
</h1>Search for a tutor by Cycle</h1>
<form action="" method="post">

  <?php include($root . "forms/dropdown_files/cycleSubject.php"); ?>


      <input type = "text" name="search_loc" placeholder = "Enter a Location"/>
  <input type = "submit" id ="cycle" name= 'submit' value =">>"/>
</form>




</body>


</html>
