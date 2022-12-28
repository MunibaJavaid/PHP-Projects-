<?php include '../config/connection.php'; ?>

<?php
if (isset($_POST['ins'])) {
  $ProdId  = $_POST['Pid'];
  $ProductName = $_POST['PName'];
  $Remarks = $_POST['remarks'];
  $Result = $_POST['result'];

  $query = "insert into companytester (prodId,ProductName,Remarks,Result) values ('$ProdId','$ProductName','$Remarks','$Result')";

  $res = mysqli_query($con, $query);

  if ($res) {
      echo "<script>alert('Data Inserted');window.location.href = 'ViewTestProd.php';</script>";
  } else {
      echo "<script>alert('Data Insertion Failed')</script>";
  }
}



?>