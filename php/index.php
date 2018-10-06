<?php 
    include_once('includes/header.php'); 
    include_once('nav.php');
?>
<body class="index-content">
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1">
                <h3>Student Login</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enrollment Number" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd">Forgot Password</a>
                    </div>
                </form>
            </div>
            <div class="col-md-6 login-form-2">
                <h3>Faculty Login</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Faculty Id" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd" value="Login">Forgot Password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    include_once('includes/footer.php');
?>