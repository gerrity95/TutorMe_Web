<?php include("backend/tut_fullreg.php") ?>

<html>
<head>

</head>
<body>

  <div style="margin-top:50px" class="">
    <h3 class="general_text">Tutor Registration for TutorMe</h3><br>
     <form action="" method="POST">
     <div class="form-group">
       <label for="firstname" class="h4 general_text">First Name *</label>
          <input style="border-radius:5px" type="text" class="form-control" name="firstname" id="inputFirstName" placeholder="First Name" required>
          <div class="help-block with-errors"></div>
      </div><br>
      <div class="form-group">
      <label for="surname" class="h4 general_text">Surname *</label>
         <input style="border-radius:5px" type="text" class="form-control" name="surname" id="inputSurname" placeholder="Surname" required>
         <div class="help-block with-errors"></div>
     </div><br>
     <div class="form-group">
     <label for="location" class="h4 general_text">Location *</label><br>
        <?php include("dropdown_files/locationDrop.php"); ?>
    </div><br>
    <div class="form-group">
    <label for="phone" class="h4 general_text">Phone Number *</label>
       <input style="border-radius:5px" type="text" class="form-control" name="phone" id="inputPhoneNumber" placeholder="Phone Number" required>
       <div class="help-block with-errors"></div>
   </div><br>
   <div class="form-group"
   <label for="price" class="h4 general_text">Price *</label>
      <input style="border-radius:5px" type="text" class="form-control" name="price" id="inputPrice" placeholder="Price" required>
      <div class="help-block with-errors"></div>
  </div><br>
  <div class="form-group">
    <label for="jc" class="h4 general_text">Junior Cert Subjects</label><br>
    <?php include("dropdown_files/jc_subjectDrop.php"); ?>
  </div>
  <div class="form-group">
    <label for="lc" class="h4 general_text">Leaving Cert Subjects</label><br>
      <?php include("dropdown_files/lc_subjectDrop.php"); ?>
    </div>
    <div class="form-group">
      <label for="tl" class="h4 general_text">Third Level Subjects</label><br>
      <?php include("dropdown_files/tl_subjectDrop.php"); ?>
 </div>
      <input type="submit" name="tutorreg-submit" value="Register" id="submit" class="btn btn-success btn-lg pull-right ">
      <p class="general_text">* All fields required</p>
<br>
</form>
  </div>

</body>
</html>
