<?php include 'Connection.php'; ?>
<?php
     if(isset($_POST['appoint'])){

      $userName = $_POST['name'];
      $Email = $_POST['email'];
      $Date = $_POST['date'];
      $Time = $_POST['time'];
      $Category = $_POST['catName'];
      $Lawyer = $_POST['lawyer_name'];
      $Message = $_POST['message'];
  
      $querys = "insert into appointment (user_Name,Email,Date,Time,Category,Lawyer,Message) values ('$userName','$Email','$Date','$Time','$Category','$Lawyer','$Message')";
      $results = mysqli_query($con,$querys);
      if($results){
          echo "<script>alert('Data Inserted succesfully');window.location.href = 'View Appointment.php'</script>";
      }else{
          echo "<script>alert('Data Insert Failed')</script>";
      }
     }
  ?>
    <!-- Appointment End -->