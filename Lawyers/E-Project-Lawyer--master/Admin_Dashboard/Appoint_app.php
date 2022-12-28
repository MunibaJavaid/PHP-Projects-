<?php include 'Connection.php';?>


<?php
$AppID = $_GET['Appid'];
$querys = "update appointment set Status = 'Approved' where Id= $AppID ";
$result = mysqli_query($con,$querys);
if($result){
echo "<script>alert('Appointment Status Updated');window.location.href = 'Appoint_Request.php'</script>";
}

?>