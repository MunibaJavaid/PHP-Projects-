<?php include 'Connection.php';?>
<?php include 'Dashboard.php';?>

<link rel="stylesheet" href="ab.css">

<style>
     .head{
    text-align: center;
    font-size: 40px;
 }
  </style>

<?php
$Id = $_GET['id'];
$query = "select * from lawyers where Lawyer_Id = $Id";
$getData = mysqli_query($con,$query);
$res = mysqli_fetch_assoc($getData);
?>

<form action="Lawyer_add.php" method = "post" enctype="multipart/form-data"> 
<input type="hidden" name="Lawyer_Id" value = <?= $res['Lawyer_Id'] ?> >
        <h2 class ="head mb-5">Edit Lawyers</h2>

  <div class = "row container-fluid">

    <div class = "col-lg-6 col-md-6 col-sm-12" > 
      <h3>Category</h3>
      <label for="">Category:</label> <select class="form-select" aria-label="Default select example" name = "categorys" >
      <?php
                                $querys = "select * from catageriws_laywers";
                                $rs = mysqli_query($con,$querys);
                                if(mysqli_num_rows($rs) > 0){
                                    while($data  = mysqli_fetch_array($rs)){?>
                            <option value="<?= $data['C_id']?>" 
                            <?php if ($res['Lawyer_Category'] == $data['C_id']){
                              echo 'selected';
                            } ?>> <?= $data['Name']?></option>
                            <?php
                            }
                            }else{  ?>
                            <option>NO records Found</option>
                            <?php }
                             ?>
      </select>
    </div>
    
    <div class = "col-lg-6 container">

     <div class="d-flex flex-column align-items-center text-center user-profile-image">
       <input class="form-control" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;" />

        <img class="" style="width:400px;" src="<?= @$res[
                            'Lawyer_Img'
                        ] ?>" id="UserImage">

          <div class="upload-photo  ">
             <br />
           <img src="Images/camera.png" alt="cameraImg"  class = "img-responsive" >    
          </div>
      </div>
    </div>
 </div>

 <div class = "row container">
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Lawyer's Name</h3>
   <label for="">Lawyer:</label> <input type="text" placeholder = "Enter Lawyer Name" name = "Name" value =<?=$res['Lawyer_Name']?>>
  </div>
 </div>
 

    <div class = "text-center mt-2">
     <input type="submit" value = "submit" class = "btn btn-danger btn-lg" name = "upd">
    </div>
</form>


<script>
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