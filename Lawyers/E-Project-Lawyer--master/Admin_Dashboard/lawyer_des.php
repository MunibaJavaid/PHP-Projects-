<?php include 'Connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

</head>
<body>
  <style>
    .head{
      text-align: center;
      color: black;
      margin-top:20px;
        }

        .form-select{
    color: #333;
    background: white;
    font-size: 15px;
    height: 60px;
    padding: 20px;
    letter-spacing: 1px;
    border: none;
    border-radius: 50px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.form-control{
  color: #333;
    background: white;
    font-size: 15px;
    letter-spacing: 1px;
    border: none;
    border-radius: 20px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.bt{
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
    width: 40%;
    padding: 12px 15px 11px;
    border-radius: 20px;
    box-shadow: 6px 6px 6px #959595, -6px -6px 6px #fff;
    border: none;
    transition: all 0.5s ease 0s;
}
  </style>

<?php include 'Dashboard.php';?>
<form action="lawyer_des.php" method = "post" enctype="multipart/form-data" class = "container">
<h1 class = "head">Add Lawyer Info</h1> <br><br>

  <div class ="row">
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
     <h3>Lawyer Name</h3>
   <label for="">lawyer Name:</label> <select class="form-select" aria-label="Default select example" name = "Name">
      <?php
                                $query = "select * from lawyers";
                                $rs = mysqli_query($con,$query);
                                if(mysqli_num_rows($rs) > 0){
                                    while($data  = mysqli_fetch_array($rs)){?>
                            <option value="<?= $data['Lawyer_Id']?>"><?= $data['Lawyer_Name']?></option>
                            <?php
                            }
                            }else{  ?>
                            <option>NO records Found</option>
                            <?php } ?>
      </select>
  </div>
    <div class ="col-lg-6 col-md-6 col-sm-12">
      <h3>Category</h3> 
     <label for="">Category: </label> <select class="form-select" aria-label="Default select example" name = "categorys">
      <?php
                                $query = "select * from catageriws_laywers";
                                $rs = mysqli_query($con,$query);
                                if(mysqli_num_rows($rs) > 0){
                                    while($data  = mysqli_fetch_array($rs)){?>
                            <option value="<?= $data['C_id']?>"><?= $data['Name']?></option>
                            <?php
                            }
                            }else{  ?>
                            <option>NO records Found</option>
                            <?php } ?>
      </select>
    </div>
    
    
 </div>
 <div class = "row mt-4">
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Contact No.</h3>
  Contact No. <input class ="form-control" type="text" placeholder = "Enter Lawyer Contact No." name = "Contact">
 </div>
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Address</h3>
  Address <input class ="form-control"  type="text" placeholder = "Enter Lawyer Address" name = "Address">
 </div>
 </div>

 <div class = "row mt-4">
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Experience</h3>
    <label for="">Cases Complete: </label> <input class ="form-control"  type="text" placeholder = "Enter Lawyer Experience" name = "Experience">
  </div>

 <div class="form-outline col-lg-6 col-md-6 col-sm-12 mb-4">
  <h3>Description</h3>
     <label class="form-label" for="form4Example3">Dsecription:</label>
    <textarea class="form-control" id="form4Example3" rows="4" name = "lawyer_des"></textarea>
  </div>
</div>
    <div class = "text-center">
     <input type="submit" value = "submit" class = "btn btn-danger bt" name = "btn">
    </div>
</form>


<?php
   if(isset($_POST['btn'])){
    $CatName = $_POST['categorys'];
    $Name = $_POST['Name'];
    $Contact = $_POST['Contact'];
    $Address = $_POST['Address'];
    $Experience = $_POST['Experience'];
    $Description = $_POST['lawyer_des'];

    $query = "insert into lawyers_info(Lawyers_Name,Lawyers_Experience,Lawyers_contact,Lawyers_Addres,
    	category,des) values ('$Name','$Experience','$Contact','$Address','$CatName','$Description')";

    $res = mysqli_query($con,$query);

    if($res){
        echo "<script>alert('Data Inserted succesfully')</script>";
    }else{
        echo "<script>alert('Data Insert Failed')</script>";
    }
   }
?>


<?php
   if(isset($_POST['update'])){
    $Lawyer_infoId = $_POST['lawyers_id']; 
    $CatName = $_POST['categorys'];
    $Name = $_POST['Name'];
    $Contact = $_POST['Contact'];
    $Address = $_POST['Address'];
    $Experience = $_POST['Experience'];
    $Description = $_POST['lawyer_des'];

    $query = "update lawyers_info set Lawyers_Name = '$Name',Lawyers_Experience = '$Experience',Lawyers_contact = '$Contact'
    ,Lawyers_Addres = '$Address',	category = '$CatName' ,des = '$Description' where lawyers_id  = $Lawyer_infoId ";

    $res = mysqli_query($con,$query);

    if($res){
        echo "<script>alert('Data update Succesfully succesfully')</script>";
    }else{
        echo "<script>alert('Data update Failed')</script>";
    }
   }
?>





<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/jquery-ui.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/jquery.nice-select.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/viewport.jquery.js"></script>
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/main.js"></script>