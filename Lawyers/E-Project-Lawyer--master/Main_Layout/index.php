<?php 'Connection.php';?>

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

<body>

   <!-- it's nav -->
  <?php include 'header.php';?>

   <!-- it's carousel -->
   <div class="banner-section">
      <div class="banner-social-area">
         <ul class="banner-social gap-4">
            <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
            <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
            <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
            <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest'></i></a></li>
         </ul>
      </div>
      <div class="banner-scroll-area">
         <a href="#service">Law Network<i class="bi bi-arrow-right"></i></a>
      </div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-10">
               <div class="banner-content">
                  <span>Welcome to Law Network</span>
                  <h1>We will give you proper <span>solution of cases</span></h1>
                  <div class="button-area">
                     <a href="services.php" class="eg-btn btn--primary btn--lg"><i
                           class="bi bi-dash-lg"></i>Want To Hire a Lawyer</a>
                           <a href="lawyer_reg.php" class="eg-btn btn--primary btn--lg"><i
                           class="bi bi-dash-lg"></i>Want To Become a lawyer</a>
                     <div class="phone-call d-flex justify-content-center align-items-center flex-row">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="intro-section mt-5 mb-5">
      <div class="container-lg container-fluid">
         <div class="row justify-content-center gx-0">
            <div class="col-lg-3 col-md-3 col-sm-6  wow animate fadeInUp" data-wow-duration="1.5s"
               data-wow-delay="0.2s">
               <div class="intro-single">
                  <span class="s-number">01</span>
                  <div class="intro-wrap d-flex flex-column">
                     <img src="assets/images/icons/intro-icon1.svg" class="img-fluid" alt="image">
                     <h3 class="odometer" data-odometer-final="150">10</h3>
                     <h5>Expert Attorneys</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6  wow animate fadeInUp" data-wow-duration="1.5s"
               data-wow-delay="0.4s">
               <div class="intro-single">
                  <span class="s-number">02</span>
                  <div class="intro-wrap d-flex flex-column">
                     <img src="assets/images/icons/intro-icon2.svg" alt="image">
                     <h3 class="odometer" data-odometer-final="250">20</h3>
                     <h5>Happy Client</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow animate fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.6s">
               <div class="intro-single">
                  <span class="s-number">03</span>
                  <div class="intro-wrap d-flex flex-column">
                     <img src="assets/images/icons/intro-icon3.svg" alt="image">
                     <h3 class="odometer" data-odometer-final="330">50</h3>
                     <h5>Case Complete</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6  wow animate fadeInUp" data-wow-duration="1.5s"
               data-wow-delay="0.8s">
               <div class="border-unset intro-single">
                  <span class="s-number">04</span>
                  <div class="intro-wrap d-flex flex-column">
                     <img src="assets/images/icons/intro-icon4.svg" alt="image">
                     <h3 class="odometer" data-odometer-final="28">8</h3>
                     <h5>Case Closed</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   

   <?php
     $querrys = 'select * from catageriws_laywers';
          ($res = mysqli_query($con,$querrys)) or die('Incorrect Querry');
     
        $rowCount = mysqli_num_rows($res);
     
        if($rowCount > 0){
?>

 <div class="practice-area-section pb-120">
      <div class="container mt-5">
         <div class="row justify-content-center">
            <div class="col-md-7">
               <div class="section-title1 text-center">
                  <h2>Services</h2>
                  <p>We are providing excellent service for our valuable customers. The purpose of the services is to encourage people
                     to reach out to us with their legal issues and queries. Although there are many notable lawyers in world our 
                     team is also a blend of professional, enthusiastic and experienced lawyers who are expert in their departments.</p>
               </div>
            </div>
         </div>
         <div class="row justify-content-center g-4">
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

<div class="casestudy-section pt-120 pb-120">
      <img src="assets/images/bg/section-bg1.svg" class="section-bg1 img-fluid" alt="image">
      <img src="assets/images/bg/section-bg2.svg" class="section-bg2 img-fluid" alt="image">
      <div class="container">
         <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
               <div class="section-title1 text-start">
                  <h2>Case Study</h2>
                  <p>Awareness of law is necessary for promoting a culture where rule of law has its supremacy. Not only citizens
                     must know their rights but they should also recognize and respect the rights of others.
                  </p>
               </div>
            </div>
            <div class="col-md-2 text-lg-end text-center">
               <div class="eg-btn btn--primary btn--lg d-lg-inline-block d-none">
                  <a href="study1.php"><i class="bi bi-dash-lg"></i>Learn More</a>
               </div>
            </div>
         </div>
         <div class="row justify-content-center g-4">
            <div class="col-lg-6 col-md-6 col-sm-10 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
               <div class="casestudy-single">
                  <img src="assets/images/bg/casestudy1.png" class="casestudy1" alt="image">
                  <a href="study1.php" class="read-more"><span class="btn-text">Read more</span><span
                        class="btn-arrow"><i class="bi bi-arrow-right"></i></span></a>
                  <div class="text">
                     <span>skirmish</span>
                     <h3><a href="study1.php">Family Law</a></h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
               <div class="casestudy-single">
                  <img src="assets/images/bg/cs-details1.png"class="casestudy1" alt="image">
                  <a href="study2.php" class="read-more"><span class="btn-text">Read more</span><span
                        class="btn-arrow"><i class="bi bi-arrow-right"></i></span></a>
                  <div class="text">
                     <span>skirmish</span>
                     <h3><a href="study2.php">criminal law</a></h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



      <div class="container-fluid bg-dark facts py-5 mb-5" style = "height: 340px">
        <div class="container py-5">
            <div class="row gx-5 pt-4 gy-4">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fa fa-star fs-2 text-warning"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="text-warning">Case Won</h4>
                            <h1 class="counting display-5 text-white mb-0" data-toggle="947">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fa fa-users fs-2 text-warning"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="text-warning">Lawyers</h4>
                            <h1 class="counting display-5 text-white mb-0" data-toggle="800">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fa fa-check fs-2 text-warning"></i>
                        </div>
                        <div class="ps-2">
                            <h4 class="text-warning">Complete Cases</h4>
                            <h1 class="counting display-5 text-white mb-0" data-toggle="1200">0</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fa fa-mug-hot fs-2 text-warning"></i>
                        </div>
                        <div class="ps-4">
                            <h4 class="text-warning">Happy Clients</h4>
                            <h1 class="counting display-5 text-white mb-0" data-toggle="500">0</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>

<?php

   // $query = "select * from lawyers WHERE Lawyer_Id IN ('11','15','24','36')";

   $query = "select * from lawyers Inner join catageriws_laywers on lawyers.Lawyer_Category  = catageriws_laywers.C_id
where Lawyer_Id in ('11','15','40','36') ";
   $res = mysqli_query($con,$query);
?>


<div class="attorneys-section pb-120">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-7">
               <div class="section-title1 text-center">
                  <h2>Our Attorneys</h2>
                  <p>Lawyers, also known as attorneys, are certified professionals who advise and represent 
                     natural and juristic persons in legal matters. They counsel clients, perform legal 
                     research, prepare legal documents and represent clients in criminal and civil court
                     proceedings.</p>
               </div>
            </div>
         </div>
      <div class="row g-4">
       <?php while($data = mysqli_fetch_assoc($res)){?>  
        <div class="col-lg-3 col-md-6 col-sm-6"> 
                  <div class="swiper-slide wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="attorney-single">
                           <!-- <img src="assets/images/bg/attorney1.png" class="casestudy1" alt="image"> -->
                           <img src="<?=@$data['Lawyer_Img'] ?>" class="casestudy1" alt="image">
                           <div class="content">
                           
                              <h4><a href="lawyers_info.php?id=<?=@$data['Lawyer_Id']?>"><?=@$data['Lawyer_Name']?></a></h4> 
                              <a href="lawyers_info.php?id=<?=@$data['Lawyer_Id']?>"
                           class="eg-btn btn--primary btn--outline btn--md capsule white text-white">Completed Cases</a>               
                              <p><?=@$data['Name']?></p>
                              <ul class="social-list gap-3">
                                 <li><a href="lawyers_info.php?id=<?=@$data['Lawyer_Id']?>" class="eg-btn btn--primary btn--outline btn--md capsule">Book An Appointment</a></li>
                              </ul>
                           </div>
                        </div>
                  </div> 
            </div> 
            <?php };?>
         </div> 
         
      </div>
   </div>
   
  </div>
</div>



   
<div class="contact-section pb-120 mt-5">
      <div class="container-fluid">
         <div class="row g-0">
            <div class="col-lg-6 bg--light">
               <div class="contact-wrap wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="200ms">
                  <div class="section-title1 text-lg-start text-center">
                     <h2>Contact Now</h2>
                     <p>Please select a topic related to your inquiry. if you don't find what you need,fill out our contact form.</p>
                  </div>
                  <form class="contact-form" action="index.php" method = "post">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-inner">
                              <input type="text" placeholder="Enter your name" name="name" required>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-inner" required>
                              <select name="Category">
                                 <option>Civil Law</option>
                                 <option>Family Law</option>
                                 <option>WorkPlace Accident</option>
                                 <option>Criminal Law</option>
                                 <option>Real State Law</option>
                                 <option>Cyber Law</option>
                              </select>
                           </div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-inner">
                              <input type="email" placeholder="Enter your email" name="email" required>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-inner">
                              <input type="text" placeholder="Enter your Phone" name="phone" required>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-inner">
                              <textarea rows="5" placeholder="Your message"  name="message"  required></textarea>
                           </div>
                        </div>
                        <div class="col-lg-12 text-lg-start text-center">
                              <input type="submit" value = "submit"  name = "submit" class="eg-btn btn--dark btn--lg" >
                        </div>
                     </div>
                  </form>
               </div>
            </div>

            <!-- INSERT WORK -->

    <?php if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Category = $_POST['Category'];
        $EmailID =  $_POST['email'];
        $Phone =  $_POST['phone'];
        $Textarea =  $_POST['message']; 
 
                $query =  "insert into contact(Name,Category,Email,Phone,Message) values( '$Name','$Category','$EmailID ','$Phone','$Textarea')";
                $res = mysqli_query($con,$query);
                if($res){
                    echo "<script>alert('Your Response have successfully submitted!');window.location.href = 'index.php' </script>";
                }
                else {
                    echo "<script>alert('Failed To submit the Form!')</script>";
                }
               }
    ?>

            <div class="col-lg-6">
               <ul class="address-list ps-lg-5">
                  <li>
                     <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_153_65)">
                              <path
                                 d="M22 0.125C13.519 0.125 6.61914 7.02485 6.61914 15.5059C6.61914 18.3713 7.41288 21.1677 8.91508 23.5938L21.1245 43.2691C21.3584 43.646 21.7704 43.875 22.2135 43.875C22.217 43.875 22.2203 43.875 22.2237 43.875C22.6707 43.8715 23.0836 43.6354 23.3132 43.2519L35.2114 23.386C36.6307 21.0112 37.3809 18.2863 37.3809 15.5059C37.3809 7.02485 30.481 0.125 22 0.125ZM33.0115 22.0699L22.1941 40.1311L11.0939 22.2432C9.84348 20.2239 9.16553 17.8942 9.16553 15.5059C9.16553 8.43835 14.9325 2.67139 22 2.67139C29.0675 2.67139 34.8259 8.43835 34.8259 15.5059C34.8259 17.8233 34.1927 20.0935 33.0115 22.0699Z" />
                              <path
                                 d="M22 7.81543C17.7595 7.81543 14.3096 11.2654 14.3096 15.5059C14.3096 19.7193 17.7034 23.1963 22 23.1963C26.3496 23.1963 29.6904 19.673 29.6904 15.5059C29.6904 11.2654 26.2405 7.81543 22 7.81543ZM22 20.6499C19.1582 20.6499 16.856 18.34 16.856 15.5059C16.856 12.6789 19.173 10.3618 22 10.3618C24.827 10.3618 27.1355 12.6789 27.1355 15.5059C27.1355 18.2986 24.8868 20.6499 22 20.6499Z" />
                           </g>
                           <defs>
                              <clipPath id="clip0_153_65">
                                 <rect width="43.75" height="43.75" fill="white" transform="translate(0.125 0.125)" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="text">
                        <h4>Location</h4>
                        <p>SD-1, Block A North Nazimabad Town, Karachi City, Pakistan</p>
                     </div>
                  </li>
                  <li>
                     <div class="icon">
                        <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
                           <g clip-path="url(#clip0_153_52)">
                              <path
                                 d="M34.7007 27.2267C33.805 26.2941 32.7247 25.7955 31.5797 25.7955C30.444 25.7955 29.3544 26.2849 28.4218 27.2175L25.5039 30.1261C25.2638 29.9969 25.0238 29.8768 24.7929 29.7568C24.4605 29.5906 24.1466 29.4336 23.8788 29.2674C21.1456 27.5314 18.6617 25.2692 16.2794 22.3421C15.1252 20.8832 14.3496 19.6551 13.7863 18.4085C14.5435 17.716 15.2452 16.9958 15.9285 16.3032C16.1871 16.0447 16.4456 15.7769 16.7042 15.5184C18.6433 13.5793 18.6433 11.0677 16.7042 9.12861L14.1834 6.6078C13.8971 6.32156 13.6016 6.02608 13.3246 5.7306C12.7706 5.1581 12.1889 4.56714 11.5887 4.01312C10.693 3.12668 9.62189 2.65576 8.49537 2.65576C7.36886 2.65576 6.27928 3.12668 5.3559 4.01312C5.34667 4.02235 5.34667 4.02235 5.33744 4.03159L2.19797 7.19876C1.01605 8.38068 0.341985 9.82114 0.194245 11.4924C-0.0273642 14.1887 0.766737 16.7003 1.37616 18.3439C2.87203 22.379 5.10659 26.1187 8.43997 30.1261C12.4843 34.9554 17.3505 38.7689 22.9092 41.4559C25.033 42.4624 27.8678 43.6535 31.0349 43.8567C31.2288 43.8659 31.432 43.8752 31.6166 43.8752C33.7496 43.8752 35.541 43.1088 36.9445 41.5852C36.9538 41.5667 36.9722 41.5575 36.9815 41.539C37.4616 40.9573 38.0156 40.431 38.5974 39.8677C38.9944 39.4891 39.4007 39.0921 39.7977 38.6766C40.7119 37.7255 41.192 36.6174 41.192 35.4817C41.192 34.3367 40.7026 33.2379 39.77 32.3145L34.7007 27.2267ZM38.0064 36.9499C37.9972 36.9499 37.9972 36.9591 38.0064 36.9499C37.6463 37.3377 37.2769 37.6886 36.8799 38.0764C36.2797 38.6489 35.6703 39.2491 35.0978 39.9231C34.1652 40.9204 33.0663 41.3913 31.6259 41.3913C31.4874 41.3913 31.3396 41.3913 31.2011 41.382C28.4587 41.2066 25.9102 40.1355 23.9988 39.2214C18.7725 36.6913 14.1834 33.0994 10.3698 28.5472C7.22112 24.7521 5.11583 21.2433 3.72153 17.4759C2.8628 15.1767 2.54885 13.3854 2.68735 11.6956C2.77969 10.6152 3.19521 9.71957 3.96161 8.95317L7.11031 5.80447C7.56277 5.37971 8.04292 5.14887 8.51384 5.14887C9.09557 5.14887 9.56649 5.49975 9.86197 5.79523C9.8712 5.80447 9.88043 5.8137 9.88967 5.82293C10.4529 6.34926 10.9885 6.89405 11.5517 7.47577C11.838 7.77125 12.1335 8.06673 12.4289 8.37144L14.9498 10.8923C15.9285 11.871 15.9285 12.7759 14.9498 13.7547C14.682 14.0225 14.4234 14.2903 14.1557 14.5488C13.38 15.3429 12.6413 16.0816 11.838 16.8018C11.8195 16.8203 11.8011 16.8295 11.7918 16.848C10.9977 17.6421 11.1455 18.4177 11.3117 18.9441C11.3209 18.9718 11.3301 18.9995 11.3394 19.0272C11.995 20.6154 12.9183 22.1112 14.3219 23.8934L14.3311 23.9026C16.8796 27.0421 19.5666 29.489 22.5307 31.3634C22.9092 31.6035 23.2971 31.7974 23.6664 31.9821C23.9988 32.1483 24.3128 32.3053 24.5805 32.4715C24.6175 32.49 24.6544 32.5177 24.6913 32.5361C25.0053 32.6931 25.3008 32.767 25.6055 32.767C26.3719 32.767 26.852 32.2868 27.009 32.1298L30.167 28.9719C30.4809 28.658 30.9795 28.2794 31.5612 28.2794C32.1337 28.2794 32.6047 28.6395 32.8909 28.9534C32.9001 28.9627 32.9001 28.9627 32.9094 28.9719L37.9972 34.0597C38.9482 35.0015 38.9482 35.9711 38.0064 36.9499Z" />
                              <path
                                 d="M23.7683 10.5319C26.1875 10.9382 28.3851 12.0832 30.1395 13.8376C31.8939 15.592 33.0297 17.7897 33.4452 20.2089C33.5468 20.8183 34.0731 21.2431 34.6733 21.2431C34.7471 21.2431 34.8118 21.2338 34.8857 21.2246C35.5689 21.1138 36.0214 20.4674 35.9106 19.7842C35.412 16.8571 34.0269 14.1885 31.9124 12.074C29.7979 9.95945 27.1293 8.57439 24.2022 8.07577C23.5189 7.96497 22.8818 8.41742 22.7618 9.09148C22.6417 9.76554 23.085 10.4211 23.7683 10.5319Z" />
                              <path
                                 d="M43.8237 19.424C43.0019 14.604 40.7304 10.218 37.24 6.72766C33.7496 3.23731 29.3636 0.965807 24.5436 0.144004C23.8695 0.0239658 23.2324 0.485653 23.1124 1.15972C23.0016 1.84301 23.454 2.48014 24.1373 2.60018C28.4402 3.32964 32.3646 5.3703 35.4856 8.48207C38.6066 11.6031 40.638 15.5274 41.3675 19.8303C41.4691 20.4398 41.9954 20.8645 42.5956 20.8645C42.6694 20.8645 42.7341 20.8553 42.8079 20.846C43.482 20.7445 43.9437 20.0981 43.8237 19.424Z" />
                           </g>
                           <defs>
                              <clipPath id="clip0_153_52">
                                 <rect width="43.75" height="43.75" fill="white" transform="translate(0.125 0.125)" />
                              </clipPath>
                           </defs>
                        </svg>
                     </div>
                     <div class="text">
                        <h4>Phone</h4>
                        <a href="tel:+012-3456-789102">012-3456-789102</a> <br>
                        <a href="tel:+012-3456-789102">+012-3456-789102</a>
                     </div>
                  </li>
               </ul>
               <div class="contact-image-area">
                  <img src="assets/images/bg/contact-img.png" alt="image" class="contact-img wow fadeInUp"
                     data-wow-duration="1.5s" data-wow-delay="400ms">
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="testimonial-section mb-5">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-md-5">
               <div class="section-title1 text-center">
                  <h2>Testimonial</h2>
                  <p>Our team is comprehensive, strategic, one step ahead, and a powerful opponent. When you 
                     hire our firm to manage your case, you have hired a team of legal advocates who care, 
                     who will keep you informed, who will fight for you, and be the voice you need to 
                     represent you again the opposing party and their attorneys. Our peers recommend us, our 
                     clients recommend us, and we are confident that soon you will too.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row justify-content-center">
            <div class="swiper testi3-slider">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="testi3-single sibling2">
                        <div class="image">
                           <img src="assets/images/bg/testi31.png" alt="image">
                           <div class="img-content">
                              <h3>Sebastian Ethan</h3>
                              <span>Crime Case</span>
                           </div>
                        </div>
                        <div class="content">
                           <img src="assets/images/icons/testi-quote.svg" class="testi3-quote" alt="image">
                           <p>"My experience with Law Network was excellent. My attorney, Sebastian Ethan, gave my 
                              case all the time and attention that was needed to be successful in court. He 
                              was a calming and confident presence during very difficult court proceedings. 
                              Although I acquired his services through the Modest Means Program, I never once 
                              was treated as anything other than a valuable client by Mr. Cadwell. I very much 
                              appreciate the knowledge and support I received through Law Network." </p>
                           <span class="ms-auto">01</span>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="testi3-single sibling2">
                        <div class="image">
                           <img src="assets/images/bg/testi32.png" alt="image">
                           <div class="img-content">
                              <h3>Angelo Marks</h3>
                              <span>Family Case</span>
                           </div>
                        </div>
                        <div class="content">
                           <img src="assets/images/icons/testi-quote.svg" class="testi3-quote" alt="image">
                           <p>"Angelo Marks helped me finish a long time case I’ve been trying to wrap up for
                               years. He was completely understanding, professional and worked very diligently
                              to the end and I’m so grateful! Highly recommend!!" </p>
                           <span class="ms-auto">02</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div
               class="slider-arrows testi3-arrows text-center d-lg-flex d-none flex-row justify-content-center align-items-center gap-5">
               <div class="testi3-prev swiper-prev-arrow style-3" tabindex="0" role="button"
                  aria-label="Previous slide">
                  <img src="assets/images/icons/arr-prev.svg"  alt="image">
               </div>
               <div class="testi3-next swiper-next-arrow style-3" tabindex="0" role="button" aria-label="Next slide">
                  <img src="assets/images/icons/arr-next.svg" alt="image">
               </div>
            </div>
         </div>
      </div>
   </div>


   <!-- it's footer -->

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

   <script>
      $('.counting').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-toggle');
  
      $({ countNum: $this.text()}).animate({
        countNum: countTo
        },

      {

      duration: 9000,
      easing:'linear',
      step: function() {
      $this.text(Math.floor(this.countNum));
    },
      complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

    });  
  

  });
    </script>
   

</body>

<!-- Mirrored from demo.egenslab.com/html/corelaw/preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 14:58:04 GMT -->

</html>