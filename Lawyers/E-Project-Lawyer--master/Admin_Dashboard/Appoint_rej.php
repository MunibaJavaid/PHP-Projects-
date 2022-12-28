<?php include 'Connection.php';?>
<?php
$RejID = $_GET['Rejid'];
$query = "update appointment set Status = 'Rejected' where Id= $RejID ";
$res = mysqli_query($con,$query);

if($res){
echo "<script>alert('Appointment Status Updated');window.location.href = 'Appoint_Request.php'</script>";
}