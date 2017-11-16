	<link rel="stylesheet" href="css/my_style.css">

    <div style="" class="index_search_style animated fadeIn col-lg-8" style="">
<div class="text-center"><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Sign in to TutorMe</h3><br>
<form id="" action="" method="POST" role="form">
    <div style="text-align:left;" class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
    </div>

    <div style="text-align:left;" class="form-group">
        <label for="password">Password</label><a style="font-family: 'Lato', sans-serif;float:right;" href="http://localhost/TutorMe_Web/PasswordReset.php" tabindex="5" class="forgot-password">Forgot Password?</a>
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-4">
                <input type="checkbox" tabindex="3" name="remember" id="remember">
                <label style="font-family: 'Lato', sans-serif;" for="remember">Remember Me</label>
            </div>
            <div class="col-xs-4 pull-right">
                <!--<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In"> -->
                <button name="login-submit" id="login-submit" tabindex="4" class="btn btn-success pull-right" type="submit">Login</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row" style="text-align:left;padding-left:20px;">
                    <span style="font-family: 'Lato', sans-serif;">New to TutorMe? <a href="register.php" tabindex="5" class="forgot-password">Register here.</a></span>
            </div>
        </div>
    </div>
    <!-- Error Message -->
    <span><?php echo $error; ?></span>

</form>
</div>
</div>
