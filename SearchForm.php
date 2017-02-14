<?php
include("SearchTest.php")

 ?>
<html>
<head>
	<link rel="stylesheet" href="css/my_style.css">
<title>Search</title>
</head>
<!--Search by name form-->
<body>
</h1>Search for a tutor by Cycle</h1>
<form action="SearchTest.php" method="request">
  <input type = "text" name="search" placeholder = "Enter a cycle"/>
  <input type = "submit" name= 'james_submit' value =">>"/>
</form>


<!--Location-->

</h1>Search for a tutor by Location</h1>
<form action="" method="post">
  <input type = "text" name="search" placeholder = "Enter a Location"/>
  <input type = "submit" id= "submit" name= 'location_submit' value =">>"/>
</form>


<!--Subjects Form-->
</h1>Search for a tutor by Subject</h1>
<form action="SearchTest.php" method="post">
  <input type = "text" name="search" placeholder = "Enter a Subject"/>
  <input type = "submit" name= 'subject_submit' value =">>"/>

</form>
<?php print $Subject;?>
<?php print $Cycle;?>
<?php print $Location;?>

<script language = 'javascript'>
var fromData = $(#formID).serialize(); // your form's data
$.ajax({
  type: "POST",
  url: "newpage.php",
  data: fromData //sends the data to the new page.
})
  .done(function( msg ) {
    window.location.href = 'SearchOutput.php' // redirects the page when finished.
});
	</script>


</body>


</html>
