<?php include 'header.php';?>

<?php include '../config/connection.php'; ?>

<?php

       $Id =  $_GET['id'];

       $query = "update labtesting set Result = 'Approved' where sIrId =  $Id";

       $res = mysqli_query($con, $query);

        if ($res) {
            echo "<script>alert('Status Approved');window.location.href = 'ViewTestProd.php'</script>";
        } else {
            echo "<script>alert('Status not Approved');window.location.href = 'ViewTestProd.php'</script>";
        }



?>