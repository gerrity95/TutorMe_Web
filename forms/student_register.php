<?php include("backend/stu_fullreg.php"); ?>

<html>
<head>

</head>
<body>
  <div style="margin-top:50px" class="">
    <h3 class="general_text">Student Registration for TutorMe</h3><br>
     <form action="" method="POST">
     <div class="form-group">
       <label for="first_name" class="h4 general_text">First Name *</label>
          <input style="border-radius:5px" type="text" class="form-control" name="firstname" id="inputFirstName" placeholder="First Name" required>
          <div class="help-block with-errors"></div>
      </div><br>
      <div class="form-group">
      <label for="surname" class="h4 general_text">Surname *</label>
         <input style="border-radius:5px" type="text" class="form-control" name="surname" id="inputSurname" placeholder="Surname" required>
         <div class="help-block with-errors"></div>
     </div><br>
     <div class="form-group">
     <label for="location" class="h4 general_text">Location *</label>
        <input style="border-radius:5px" type="text" class="form-control" name="location" id="inputLocation" placeholder="Location" required>
        <div class="help-block with-errors"></div>
    </div><br>
    <div class="form-group">
    <label for="phone_number" class="h4 general_text">Phone Number *</label>
       <input style="border-radius:5px" type="text" class="form-control" name="phone" id="inputPhoneNumber" placeholder="Phone Number" required>
       <div class="help-block with-errors"></div>
   </div><br>
   <div class="form-group">
   <label for="phone_number" class="h4 general_text">School *</label>
      <input style="border-radius:5px" type="text" class="form-control" name="school" id="inputSchool" placeholder="Phone Number" required>
      <div class="help-block with-errors"></div>
  </div><br>
  <div class="form-group">
  <label for="phone_number" class="h4 general_text">Cycle *</label>
     <input style="border-radius:5px" type="text" class="form-control" name="cycle" id="inputCycle" placeholder="Phone Number" required>
     <div class="help-block with-errors"></div>
 </div><br>
 <div class="form-group">
 <label for="subjects" class="h4 general_text">Subjects *</label>
    <input style="border-radius:5px" type="text" class="form-control" name="subjects" id="inputSubjects" placeholder="Phone Number" required>
    <div class="help-block with-errors"></div>
</div><br>
      <input type="submit" name="stu-register_submit" value="Register" id="submit" class="btn btn-success btn-lg pull-right ">
      <p class="general_text">* All fields required</p>
<br>
</form>
  </div>

</body>
</html>
