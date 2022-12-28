<?php include 'connection.php';?>

<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="../Admin_Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="../Admin_Dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style_login.css">

</head>

<body class="back_color">
    <div class="container mt-5">
        

        <!-- Outer Row -->
        <div class="row justify-content-center">
        
            <div class="col-xl-10 col-lg-12 col-md-9">
            
                <div class="card o-hidden border-0 ab my-5">
                
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action = "login.php" method = "post" class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name = "user-emaill"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name = "user-passwordl"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                    
                                        <button type = "submit" class="btn btn-danger btn-user btn-block" name = "btn-login" >
                                    Login</button>
                                   
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="large" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="large" href="register.php">Create an Account!</a>
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
if(isset($_POST['btn-login'])){
    
    $email = $_POST['user-emaill'];
    $password = $_POST['user-passwordl'];

    $regquery = "Select * from register_form where Email = '$email' "; 
    $result = mysqli_query($con, $regquery);
    $rowcheck = mysqli_num_rows($result);

    if($rowcheck){

    $rowl = mysqli_fetch_assoc($result);

  
    $_SESSION['username'] = $rowl['F_Name'];
    $_SESSION['userRole'] = $rowl['Roll_type'];
    $pass_decode = password_verify($password, $rowl['Password']);


    if($pass_decode){
        if($_SESSION['userRole'] == "A"){
            echo "<script>window.location.href = '../Admin_Dashboard/index.php'</script>";
        }
        else{
            echo "<script>alert('Login Successful');window.location.href = 'index.php'</script>";
        }
    }else{
        echo "<script>alert('Password Incorrect');window.location.href = 'login.php'</script>";
    } 
      }
        else{
        echo "<script>alert('Invalid Email');</script>";
    }
}

?>


    <!-- Bootstrap core JavaScript-->
    <script src="../Admin_Dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../Admin_Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>