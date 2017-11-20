<div style="margin-top:50px;margin-right:10%;padding-left:20px;padding-right:20px;" class="index_search_style col-xs-offset-2">
  <h3 style="padding-top:20px;font-family: 'Lato', sans-serif" class="">Register For TutorMe</h3><br>
   <form action="" method="POST">
   <div class="form-group">
    <label style="font-family: 'Lato', sans-serif" class="radio-inline">
      <input type="radio" name="optradio" value="tutor" required>Tutor
    </label>
    <label style="font-family: 'Lato', sans-serif" class="radio-inline">
      <input type="radio" name="optradio" value="student" required>Student
    </label>
  </div>
   <div class="form-group">
     <label for="email" style="font-family: 'Lato', sans-serif">Email *</label>
        <input style="border-radius:5px" type="email" class="form-control" name="email" id="register-email" placeholder="Email" required>
        <div class="help-block with-errors"></div>
    </div>
<div class="form-group">
  <label for="username" style="font-family: 'Lato', sans-serif">Username *</label>
        <input style="border-radius:5px" type="text" class="form-control" name="username" id="reg-username" placeholder="Username" required>
        <div class="help-block with-errors"></div>
    </div>
<div class="form-group">
  <label for="password" style="font-family: 'Lato', sans-serif">Password *</label>
        <input style="border-radius:5px" type="password" class="form-control" name="password" id="reg-password" placeholder="Password" required>
        <div class="help-block with-errors"></div>
    </div><br>
    <input type="submit" name="register-submit" value="Register" id="reg-submit" class="btn btn-success pull-right ">

  </form>
    <p style="font-family: 'Lato', sans-serif" class=""><small>Already a member?<a href='login.php'> Login here.</a></small> </p>
    <!-- Error Message -->
    <span><?php
    echo "<h3 class='general_text' style='color:red;'>";
    echo $error;
    echo "</h3>"; ?></span>
<br>

</div>
