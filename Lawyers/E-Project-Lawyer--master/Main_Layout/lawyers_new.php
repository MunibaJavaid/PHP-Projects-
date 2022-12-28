<?php include 'connection.php';?>
<?php include 'header.php';?>

<?php
$ID = $_GET['id'];
$query = "select * from lawyers Inner join catageriws_laywers on lawyers.Lawyer_Category  = catageriws_laywers.C_id
where Lawyer_Category = $ID";
// $querys = "select * from lawyers where Lawyer_Category = $ID";
$GetData = mysqli_query($con,$query);
$res = mysqli_fetch_assoc($GetData);

$_SESSION['CatName'] = $res['Name'];
?>
    <form action="manageCart.php" method = "post">
    <input type="hidden" name = "prodid" value = "<?=@$res[
                        'Lawyer_Id'
                    ] ?>">
                    <input type="hidden" name = "Lawyername" value = "<?=@$res['Lawyer_Name'] ?>">
                    <input type="hidden" name = "LawyerCategory" value = "<?=@$res[
                        'Lawyer_Category '
                    ] ?>">
                   
                    <input type="hidden" name = "LawyerImg" value = "<?=@$res[
                        'Lawyer_Img'
                    ] ?>">

<div class="attorneys-section pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-7">
               <div class="section-title1 text-center">
                  <h2>Our Attorneys</h2>
                  <p>Lawyers, also known as attorneys, are certified professionals who advise and represent natural and juristic persons in legal matters. They counsel clients, perform legal research, prepare legal documents and represent clients in criminal and civil court proceedings..</p>
               </div>
            </div>
         </div>
         <div class="row g-4">
            <?php while($data = mysqli_fetch_assoc($GetData)){?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="swiper-slide wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="attorney-single">
                           <!-- <img src="assets/images/bg/attorney1.png" class="casestudy1" alt="image"> -->
                           <img src="<?=@$data['Lawyer_Img'] ?>" class="casestudy1" alt="image">
                           <div class="content">
                           
                              <h4><?=@$data['Lawyer_Name']?></h4> 
                              <a href="lawyers_info.php?id=<?=@$data['Lawyer_Id']?>"
                           class="eg-btn btn--primary btn--outline btn--md capsule white text-white">Completed Cases!</a>               
                              <p><?=@$data['Name']?></p>
                              <ul class="social-list gap-3">
                                 <li><a href="lawyers_info.php?id=<?=@$data['Lawyer_Id']?>" class="eg-btn btn--primary btn--outline btn--lg capsule">Book An Appointment</a></li>
                              </ul>
                           </div>
                        </div>
                  </div>
            </div>
            <?php };?>
         </div>   
      </div>
   </div>
</form>



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