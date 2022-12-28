<?php include 'Connection.php';?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>

    <!-- Custom fonts for this template-->
    <link href="../Admin_Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="../Admin_Dashboard/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Admin_Dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="back_color">

<style>
    .back_color{
        background-color: rgba(217, 217, 217, 0.97);
}
.bg_fpass{
    background-image: url("https://static.vecteezy.com/system/resources/previews/007/536/069/original/password-reset-icon-for-apps-vector.jpg");
    background-size: cover;
}
</style>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg_fpass"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address and New Password below
                                            and your Password will be reset automatically!</p>
                                    </div>
                                    <form action = "forgot-password.php" method = "post"  class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name = "email"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="pswrd">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Confirm Password" name="Cpswrd">
                                    </div>
                                        <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a> -->
                                        <button type = "submit" class="btn btn-danger btn-user btn-block" name = "reset" >
                                    Reset Password</button>
                                    </form>
                                    <hr>
                                    <hr>
                                    <div class="text-center">
                                        <a class="large" href="register.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="large" href="login.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <?php 

if(isset($_POST['reset'])){

    $Email = $_POST['email'];
    $Pass = $_POST['pswrd'];
    $Cpassword = $_POST['Cpswrd'];
    $Password = password_hash($Pass,PASSWORD_BCRYPT);
    $CPassword = password_hash($Cpassword,PASSWORD_BCRYPT);

    $emcheckquery = "select * from register_form where Email = '$Email'";
    $emcheckresult = mysqli_query($con,$emcheckquery);
    $emailcount = mysqli_num_rows($emcheckresult);

    if($emailcount){

        if($Pass === $Cpassword && $Pass > 0){
            $regquery = "update register_form set Password = '$Password',C_Password = '$CPassword' where Email = '$Email'";
            $result = mysqli_query($con,$regquery);

            if($result){
                echo "<script>alert('Password updated Successfully');window.location.href = 'login.php'</script>";

            }
            else{
                echo "<script>alert('Password doesn't updated succesfully')</script>";
            }
        }
        else{
            echo "<script>alert('Password is not mathching')</script>";

        }
    }
    else{
        echo "<script>alert('Invalid Email')</script>";

    }
}

?>


    <!-- Bootstrap core JavaScript-->
    <script src="../Admin_Dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../Admin_Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Admin_Dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Admin_Dashboard/js/sb-admin-2.min.js"></script>

</body>

</html>