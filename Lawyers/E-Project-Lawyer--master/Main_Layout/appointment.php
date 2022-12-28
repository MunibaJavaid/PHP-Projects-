<?php include 'Connection.php'; ?>
<?php include 'header.php'; ?>

<?php if (!isset($_SESSION['userRole'])) { //A or V
    echo "<script>alert('Please login Your Account!!');window.location.href = 'login.php'</script>";
}?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="assets/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style_app.css">
  


<?php
$ID = $_GET['id'];
$query = "select * from lawyers_info Inner join lawyers on lawyers_info.Lawyers_Name = lawyers.Lawyer_Id 
inner join catageriws_laywers on lawyers_info.category = catageriws_laywers.C_id where lawyers_id = $ID";
  $GetData = mysqli_query($con,$query);
  $res = mysqli_fetch_assoc($GetData);
$CName = $res['Name'];
$LName = $res['Lawyer_Name'];

?>
       <!-- Appointment Start -->
       <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Get An Appointment</h1>

                            <form action = "appIns.php" method = "post">

                            <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4"  name = "name"
                                    value ="<?=$_SESSION['username']?>" readonly />
                                </div>
                              
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" name = "email" required="required"
                                    />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input date" name = "date" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" name = "time" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4"  name = "catName"
                                    value ="<?= $CName ?>" readonly />
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4"  name = "lawyer_name"
                                    value ="<?= $LName ?>" readonly />
                                </div>
                                <div class="form-outline mb-4">
                                  <label class="form-label text-white" for="form4Example3">Message</label>
                                  <textarea class="form-control" id="form4Example3" name = "message" rows="4"></textarea>
    
                                </div>
                                <div class = "text-center mt-5">
                                    <button class="btn btn-warning btn-block border-0 py-3" type="submit" name = "appoint" id = "btn">Get An Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    


<?php include 'footer.php';?>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="assets/lib/tempusdominus/js/moment.min.js"></script>
<script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="assets/js/main_new.js"></script>