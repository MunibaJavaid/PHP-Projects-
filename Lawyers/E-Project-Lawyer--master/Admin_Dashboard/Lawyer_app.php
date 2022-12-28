<?php include 'Connection.php';?>


<?php

$AppID = $_GET['Appid'];
$querys = "update lawyer_reg set Status = 'Approved' where Id= $AppID ";
$result = mysqli_query($con,$querys);
if($result){
echo "<script>alert('Lawyer Status Updated');window.location.href = 'LawyerRequest.php'</script>";
}

?>