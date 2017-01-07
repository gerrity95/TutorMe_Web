<?php
include("backend/loginserv.php");
?>

<ul class="dropdown-menu dropdown_width animated slideInRight" style="width:350px" role="menu">
    <div class="col-lg-12">
        <div class="text-center"><h3 style="text-align:center;font-family: 'Lato', sans-serif;">Login</h3><br>
        <form id="" action="" method="POST" role="form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-7">
                        <input type="checkbox" tabindex="3" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <div class="col-xs-5 pull-right">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Error Message -->
            <span><?php echo $error; ?></span>

        </form>
    </div>
</ul>
