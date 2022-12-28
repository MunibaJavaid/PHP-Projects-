<?php session_start(); ?>
<?php include '../Config/Connection.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/styless.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="assets/dist/js/chart-js-config.js"></script>
 </head>
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="login-form">    
    <form action="login.php" method="post">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Enter your Email" required="required" name = "email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Enter your password" required="required" name = "Pass">
        </div>
       
        <button class="btn btn-success" type = submit name = "btn">Click to Login</button>
             
    </form>			
</div>


 
<?php if (isset($_POST['btn'])) {
    $Email = $_POST['email'];
    $Password = $_POST['Pass'];
    $EmailSearch = "select * from user where Email = '$Email'";
    $query = mysqli_query($con, $EmailSearch); //abc@gmail.com
    $EmailCount = mysqli_num_rows($query);
    //1
    if ($EmailCount) {
        $res = mysqli_fetch_assoc($query);
        $db_Pass = $res['Password'];
        $_SESSION['db_name'] = $res['Name'];
        $_SESSION['db_Role'] = $res['Role'];
        echo $_SESSION['db_Role'];
        $pass_decode = password_verify($Password, $db_Pass);
        if ($pass_decode) {
            if ($_SESSION['db_Role'] == 'admin') {
                //db_name aega
                echo "<script>window.location.href = '../AdminLayout/index.php'</script>";
            } elseif ($_SESSION['db_Role'] == 'CRIP') {
                echo "<script>window.location.href = '../Company/CompanyIndex.php'</script>";
            } elseif ($_SESSION['db_Role'] == 'LRIP') {
                echo "<script>window.location.href = '../Laboratory/LaboratoryIndex.php'</script>";
            } else {
                echo "<script>alert('Again Try Login');window.location.href = 'MainLayout/header.php'</script>"; // header('location:index.php');
            }
        } else {
            echo "<script>alert('Login Failed')</script>";
        }
    } else {
        echo "<script>alert('Invalid Email')</script>";
    }
} ?>




</body>
</html>   