<?php   include 'header.php'; ?>
<?php include '../config/connection.php'; ?>

<?php
if (isset($_POST['ins'])) {
  $ProdId  = $_POST['Pid'];
  $ProductName = $_POST['PName'];
  $Remarks = $_POST['remarks'];
  $Result = $_POST['result'];
  $CName = $_SESSION['db_name'];
  
 
  $query = "insert into labtesting (slrName,ProductId,ProdName,Remarks,Result) values ('$CName',$ProdId,'$ProductName','$Remarks','$Result')";
  echo $query;
  $res = mysqli_query($con, $query);

  if ($res) {
      echo "<script>alert('Data Inserted');window.location.href = 'ViewTestProd.php';</script>";
  } else {
      echo "<script>alert('Data Insertion Failed')</script>";
  }
}



?>