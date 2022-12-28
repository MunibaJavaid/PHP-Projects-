<?php include 'Connection.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Account</title>

    <!-- Custom fonts for this template-->
    <link href="../Admin_Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Admin_Dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style_login.css">

</head>

<body class="back_color">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-reg"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action = "register.php" method = "post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" name="F_name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" name="L_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="pswrd">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="Rpswrd">
                                    </div>
                                </div>
                                <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->
                                <button type = "submit" class="btn btn-danger btn-user btn-block" name = "btn-register" >
                                    Register Account</button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="large" href="forgot-password.php">Forgot Password?</a>
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


    <?php 

if(isset($_POST['btn-register'])){

    
    $FirstName = $_POST['F_name'];
    $LastName = $_POST['L_name'];
    $Email = $_POST['email'];
    $Pass = $_POST['pswrd'];
    $Rpassword = $_POST['Rpswrd'];
    $Password = password_hash($Pass,PASSWORD_BCRYPT);
    $CPassword = password_hash($Rpassword,PASSWORD_BCRYPT);

    $emcheckquery = "select * from register_form where Email = '$Email'";
    $emcheckresult = mysqli_query($con, $emcheckquery);
    $emailcount = mysqli_num_rows($emcheckresult);

    if($emailcount > 0){
        echo "<script>alert('Email Already Exist');</script>";
   }
   else{
    if($Pass === $Rpassword){

        $regquery = "insert into register_form(F_Name,L_Name,Email,Password,C_Password,Roll_type) VALUES ('$FirstName','$LastName','$Email','$Password','$CPassword','V')"; 
        $result = mysqli_query($con,$regquery);

        if($result){
            echo "<script>alert('Acount Registered Successfully');</script>";

        }
        else{
            echo "<script>alert('Account doesn't registered');</script>";

        }
    }
    else{
        echo "<script>alert('Password Do not match');</script>";
    }
   }
}
?>

    <!-- Bootstrap core JavaScript-->
    <script src="../Admin_Dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../Admin_Dashboard/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../Admin_Dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../Admin_Dashboard/js/sb-admin-2.min.js"></script>

</body>

</html>