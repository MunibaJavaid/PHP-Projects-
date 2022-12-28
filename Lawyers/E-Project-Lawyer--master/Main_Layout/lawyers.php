<?php include 'connection.php';?>
<?php include 'header.php';?>

<?php
     $querrys = 'select * from lawyers';
          ($res = mysqli_query($con,$querrys)) or die('Incorrect Querry');
     
        $rowCount = mysqli_num_rows($res);
     
        if($rowCount > 0){
?> 

<div class="attorneys-section pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-7">
               <div class="section-title1 text-center">
                  <h2>Our Attorneys</h2>
                  <p>In consequat tincidunt turpis sit amet imperdiet. Praesent Class officelan nonatoureanor mauris
                     laoreet, iaculis libero quis.Curabitur et tempus eri consequat tincidunt.</p>
               </div>
            </div>
         </div>
         <div class="row">
         <?php while($data =  mysqli_fetch_assoc($res)){ ;
                ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
            
                  <div class="swiper-slide wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="attorney-single">
                           <!-- <img src="assets/images/bg/attorney1.png" class="casestudy1" alt="image"> -->
                           <img src="<?=$data ['Lawyer_Img']?>" class="casestudy1" alt="image">
                           <div class="content">
                           
                              <h4><a href="lawyer-details.html"><?=$data ['Lawyer_Name']?></a></h4> 
                              <a href="practice-details.html"
                           class="eg-btn btn--primary btn--outline btn--md capsule white">Completed Case (12)</a>               
                              <p><?=$data ['Lawyer_Category'] ?></p>
                              <ul class="social-list gap-3">
                                 <li><a href="lawyer_des.php?id=<?=@$data['Lawyer_Id ']?>" class="eg-btn btn--primary btn--outline btn--lg capsule">Book An Appointment</a></li>
                              </ul>
                           </div>
                        </div>
                  </div>
            </div>
            <?php };
             ?>
         </div>
         
      </div>
   </div>
   <?php } else{echo '<p> No record Found </p>';}
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