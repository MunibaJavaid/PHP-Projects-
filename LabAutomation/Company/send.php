<?php include 'header.php';?>

<?php include '../config/connection.php'; ?>

<?php

       $Id =  $_GET['id'];

       $query = "update companytester set Result = 'Send' where cplrId =  $Id";

       $res = mysqli_query($con, $query);

        if ($res) {
            echo "<script>alert('status Send');window.location.href = 'ViewTestProd.php';</script>";
        } else {
            echo "<script>alert('sataus not Send');window.location.href = 'ViewTestProd.php';</script>";
        }



?>