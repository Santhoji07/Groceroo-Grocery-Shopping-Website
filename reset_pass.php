<?php
if (isset($_GET['login_error']) && $_GET['login_error'] == 1) {
    echo "<script>alert('Your Password is not matching!')</script>";
    echo "<script>window.location.assign('login.php')</script>";
}
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Groceroo - Reset Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("upload/200731042306.jpg");
        background-repeat: no-repeat;
        width: auto;
        background-position: center;
        background-size: cover;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.php"><h2 class="text-primary">Groceroo</h2></a><span class="splash-description">Update Password.</span></div>
            <div class="card-body">
                <form id="form" data-parsley-validate="" method="post" action="check_changed_pass.php">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="password" name="users_password" required="" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Confirm Password" name="users_cpassword">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Change</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="register.php" class="footer-link">Create An Account</a></div>
               <!-- <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgotpass.php" class="footer-link">Forgot Password</a>
                </div> -->
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/parsley.js"></script>
    <script>
    $('#form').parsley();
    </script>
</body>
 
</html>