<?php include 'header.php';?>

<?php include '../config/connection.php'; ?>

<?php

       $Id =  $_GET['id'];

       $query = "update companytester set Result = 'Refused' where cplrId =  $Id";

       $res = mysqli_query($con, $query);

        if ($res) {
            echo "<script>alert('status Refused');window.location.href = 'ViewTestProd.php';</script>";
        } else {
            echo "<script>alert('sataus not Refused');window.location.href = 'ViewTestProd.php';</script>";
        }



?>