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
    <link rel="stylesheet" href="ab.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

</head>
<body>
<?php include 'Dashboard.php';?>

<form action="Lawyer_add.php" method = "post" enctype="multipart/form-data"> 
        <h2 class ="head mb-5">Add a Lawyers</h2>

  <div class = "row container-fluid">

    <div class = "col-lg-6 col-md-6 col-sm-12" > 
      <h3>Category</h3>
      <label for="">Category:</label> <select class="form-select" aria-label="Default select example" name = "categorys">
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
    
    
    <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Lawyer's Name</h3>
   <label for="form-label">Lawyer:</label> <input class="form-control form-control-lg ab" type="text" placeholder = "Enter Lawyer Name" name = "Name">
  </div>

 </div>

 <div class = "row container mt-5">
  
 <div class = "col-lg-6 container">

<div class="d-flex flex-column align-items-center text-center user-profile-image">
  <input class="form-control" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;" />

   <img class="" style="width:400px;" src="Images/noimage.jpg" id="UserImage">

     <div class="upload-photo  ">
        <br />
      <img src="Images/camera.png" alt="cameraImg"  class = "img-responsive" >    
     </div>
 </div>
</div>

 </div>

    <div class = "text-center mt-5">
     <input type="submit" value = "submit" class = "btn btn-danger bt" name = "btn">
    </div>
</form>


<?php
    if(isset($_POST['btn'])){
      $Lawyer_Name = $_POST['Name'];
      $CatName = $_POST['categorys'];

    $fileProp = $_FILES['uploaded'];

      //  echo '<pre>';
      //  print_r($fileProp);
      //  echo '</pre>';

   $FileName = $_FILES['uploaded']['name'];
   $FileType = $_FILES['uploaded']['type'];
   $FiletempLoc = $_FILES['uploaded']['tmp_name'];
   $FileSize= $_FILES['uploaded']['size'];

   $Folder = "../Main_Layout/assets/images/bg/";

    if(
        strtolower($FileType) == 'image/png'||
        strtolower($FileType) == 'image/jpg'||
        strtolower($FileType) == 'image/jpeg'
       ) {
    
        if($FileSize <= 1000000){
    
           $Folder = $Folder.$FileName;
          $query =  "insert into Lawyers (Lawyer_Name,Lawyer_Category,Lawyer_Img) values
                ('$Lawyer_Name','$CatName','$Folder')";
                
           
           $res = mysqli_query($con,$query);
           
           if($res){
            echo "<script>alert('Data Insert successfully!');</script>";
            move_uploaded_file($FiletempLoc,$Folder);
            // echo "<a href= 'Form.php' >Insert more Records</a>";

           
           }
           else{
            echo "<script>alert('Data Insert Failed')</script>";
           }
        }
    
        else{
            echo "<script>alert('Image Size should be less than 1 MB')</script>";
        }
       }
       
       
       else{
        echo "<script>alert('Image Format Should not be supported')</script>";
       }
    
    
    }
?>



<?php
    if(isset($_POST['upd'])){
      $LawyerID = $_POST['Lawyer_Id'];
      $Lawyer_Name = $_POST['Name'];
      $CatName = $_POST['categorys'];

    $fileProp = $_FILES['uploaded'];

      //  echo '<pre>';
      //  print_r($fileProp);
      //  echo '</pre>';

   $FileName = $_FILES['uploaded']['name'];
   $FileType = $_FILES['uploaded']['type'];
   $FiletempLoc = $_FILES['uploaded']['tmp_name'];
   $FileSize= $_FILES['uploaded']['size'];

   $Folder = "../Main_Layout/assets/images/bg/";

   if (is_uploaded_file($_FILES['uploaded']['tmp_name'])) {
    if(
        strtolower($FileType) == 'image/png'||
        strtolower($FileType) == 'image/jpg'||
        strtolower($FileType) == 'image/jpeg'
       ) {
    
        if($FileSize <= 1000000){
    
           $Folder = $Folder.$FileName;
          $query =  "update lawyers set Lawyer_Name = '$Lawyer_Name',Lawyer_Category = '$CatName',Lawyer_Img = '$Folder'
                    where Lawyer_Id = $LawyerID";          
           $res = mysqli_query($con,$query);
           
           if($res){
            echo "<script>alert('Data Update successfully!');window.location.href = 'lawyer_man.php'</script>";
            move_uploaded_file($FiletempLoc,$Folder);
            // echo "<a href= 'Form.php' >Insert more Records</a>";

           }
           else{
            echo "<script>alert('Data update Failed')</script>";
           }
        }
    
        else{
            echo "<script>alert('Image Size should be less than 1 MB')</script>";
        }
       }
       
       
       else{
        echo "<script>alert('Image Format Should not be supported')</script>";
       }

    } else{
      $query = "update lawyers set Lawyer_Name = '$Lawyer_Name',Lawyer_Category ='$CatName' where Lawyer_Id = '$LawyerID'";
        echo $query;
        $res = mysqli_query($con, $query);
        if ($res) {
          move_uploaded_file($FileTempLoc, $folder);
          echo "<script>alert('Data Updated Successfully');window.location.href = 'lawyer_man.php'</script>";
      } else {
          echo "<script>alert('Data Updation Failed')</script>";
      }
    }
  }
?>






<Script>

    $(document).ready(function(){
        $(".upload-photo").click(function(){
            $("#Pro_Image").trigger('click')
        })
        $("#UserImage").click(function(){
            $("#Pro_Image").trigger('click')
        })

        $("#Pro_Image").change(function(){
            if(this.files && this.files[0]){
               var fileReader = new FileReader();
               fileReader.readAsDataURL(this.files[0]);
               fileReader.onload = function(x){
                $("#UserImage").attr('src',x.target.result);
               }
            }
        })
    })

</Script>

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