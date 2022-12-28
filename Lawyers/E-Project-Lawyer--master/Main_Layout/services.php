<?php include 'connection.php';?>
<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/corelaw/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 14:57:39 GMT -->

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Law Network</title>
   <link rel="icon" href="assets/images/law short logo.png" type="image/gif" sizes="20x20">
   <link rel="stylesheet" href="assets/css/animate.css">

   <link rel="stylesheet" href="assets/css/all.css">

   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <link rel="stylesheet" href="assets/css/boxicons.min.css">

   <link rel="stylesheet" href="assets/css/bootstrap-icons.css">

   <link rel="stylesheet" href="assets/css/jquery-ui.css">

   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/slick-theme.css">
   <link rel="stylesheet" href="assets/css/slick.css">

   <link rel="stylesheet" href="assets/css/nice-select.css">

   <link rel="stylesheet" href="assets/css/magnific-popup.css">

   <link rel="stylesheet" href="assets/css/odometer.css">

   <link rel="stylesheet" href="assets/css/style.css">
</head>

<style>
   .carousel-caption{
      top: 50%;
      bottom:50%;
   }
</style>

<body>

<div id="carousel" data-ride="carousel">
  <img src="assets/images/bg2.jpg" width = "100%" height =  "550px" alt="img">
  <h1 class = "carousel-caption">Services</h1>
</div>

<?php
     $querrys = 'select * from catageriws_laywers';
          ($res = mysqli_query($con,$querrys)) or die('Incorrect Querry');
     
        $rowCount = mysqli_num_rows($res);
     
        if($rowCount > 0){
?>

 <div class="practice-area-section pb-120 mt-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-7">
               <div class="section-title1 text-center">
                  <h2>Services</h2>
                  <p>We are providing excellent service for our valuable customers. The purpose of the services is to encourage people
                     to reach out to us with their legal issues and queries. Although there are many notable lawyers in world our 
                     team is also a blend of professional, enthusiastic and experienced lawyers who are expert in their departments.
                  </p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center g-4 mb-5">
          <?php while($data =  mysqli_fetch_assoc($res)){ ;
                ?>
            <div class="col-lg-4 col-md-6 col-sm-10">
               <div class="practice-single wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                  <div class="header">
                     <div class="icon-area">
                        <i class = "<?=$data ['Icon'] ?>"></i>
                        <a href="practice-details.html"
                           class="eg-btn btn--primary btn--outline btn--sm capsule">Completed Case (12)</a>
                     </div>
                     <h4><a href="practice-details.html"><?=$data['Name']?></a></h4>
                  </div>
                  <div class="body">
                     <p><?=$data['Description']?></p>


                     <a href="lawyers_new.php?id=<?=@$data['C_id']?>" class="details-btn">Learn More</a>
                  </div>
               </div>
          </div>
            <?php };
             ?>
      </div>
   </div>

   <?php } else{echo '<p> No record Found </p>';}
   ?>

   <?php include 'footer.php';?>





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
</body>

<!-- Mirrored from demo.egenslab.com/html/corelaw/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 14:58:04 GMT -->

</html>   