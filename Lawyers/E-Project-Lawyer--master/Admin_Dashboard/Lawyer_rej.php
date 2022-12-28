<?php include 'Connection.php';?>
<?php
$RejID = $_GET['Rejid'];
$query = "update lawyer_reg set Status = 'Rejected' where Id= $RejID ";
$res = mysqli_query($con,$query);

if($res){
echo "<script>alert('Lawyer Status Updated');window.location.href = 'LawyerRequest.php'</script>";
}