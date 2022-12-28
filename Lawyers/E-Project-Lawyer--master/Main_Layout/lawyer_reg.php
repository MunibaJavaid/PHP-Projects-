<?php include 'Connection.php';?>
<!DOCTYPE html>
<html>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.4/vue.js'></script>
<style>
@import "https://fonts.googleapis.com/css?family=Roboto";
body {
  background-color: #f6f6f6;
  font-family: 'Roboto', sans-serif;
}

.step-wrapper {
  padding: 20px 0;
  display: none;
}
.step-wrapper.active {
  display: block;
}

.step-indicator {
  border-collapse: separate;
  display: table;
  margin-left: 0px;
  position: relative;
  table-layout: fixed;
  text-align: center;
  vertical-align: middle;
  padding-left: 0;
  padding-top: 20px;
}
.step-indicator li {
  display: table-cell;
  position: relative;
  float: none;
  padding: 0;
  width: 1%;
}
.step-indicator li:after {
  background-color: #ccc;
  content: "";
  display: block;
  height: 1px;
  position: absolute;
  width: 100%;
  top: 32px;
}
.step-indicator li:after {
  left: 50%;
}
.step-indicator li:last-child:after {
  display: none;
}
.step-indicator li.active .step {
  border-color: #4183D7;
  color: #4183D7;
}
.step-indicator li.active .caption {
  color: #4183D7;
}
.step-indicator li.complete:after {
  background-color: #87D37C;
}
.step-indicator li.complete .step {
  border-color: #87D37C;
  color: #87D37C;
}
.step-indicator li.complete .caption {
  color: #87D37C;
}
.step-indicator .step {
  background-color: #fff;
  border-radius: 50%;
  border: 1px solid #ccc;
  color: #ccc;
  font-size: 24px;
  height: 64px;
  line-height: 64px;
  margin: 0 auto;
  position: relative;
  width: 64px;
  z-index: 1;
}
.step-indicator .step:hover {
  cursor: pointer;
}
.step-indicator .caption {
  color: #ccc;
  padding: 11px 16px;
}
.reg{
  margin-top: 80px;
}
.center{
  padding-left: 100px;
  padding-right: 100px;
  justify-content: center;
}
</style>

</head>
<body>

     <!-- it's nav -->
   <?php include 'header.php';?>

<!-- nav end -->
<div class="container">
<h1 class="reg"><b>Register</b></h1>
<div class="center"><h3>Sign up as lawyer</h3>
<h6>BY FILLING THIS FORM YOU WILL BECOME AN ONLINE ASSOCIATE OF US, THEN YOUR PROFILE WILL BE LISTED ON THIS WEBSITE.</h6>
</div>

<form action="lawyer_reg.php" method="post" enctype="multipart/form-data">
<div class="container">
    <div id="app">
        <step-navigation :steps="steps" :currentstep="currentstep">
        </step-navigation>
        
        <div v-show="currentstep == 1">
            <h1>Step 1</h1>
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Name</label>
              <input type="text" name="name" value ="<?=$_SESSION['username']?>" class="form-control" id="validationDefault01"  readonly>
            </div>
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="validationDefault01"  required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Degree</label>
              <input type="text" name="degree" class="form-control" id="validationDefault01"  required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault04" class="form-label">Expertise</label>
              <select class="form-select" name="expertise" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>Civil Law</option>
                <option>Cyber Law</option>
                <option>Family Law</option>
                <option>WorkPlace Accident</option>
                <option>Real State Law</option>
                <option>Criminal Law</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationDefault04" class="form-label">Add your image for profile</label>
              <input type="file" class="form-control" id="validationDefault04" aria-label="file example" name = "Pic" required>
            </div>
            <br>
        </div>

        <div v-show="currentstep == 2">
            <h1>Step 2</h1>
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Phone number</label>
              <input type="number" name="number" class="form-control" id="validationDefault01"  required>
            </div>
            <div class="col-md-4">
              <label for="validationDefault04" class="form-label">City</label>
              <select class="form-select" name="city" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>Karachi</option>
                <option>Lahore</option>
                <option>Islamabad</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="validationDefault01"  required>
            </div>
        </div>

        <div v-show="currentstep == 3">
            <h1>Step 3</h1>
            <div class="form-group">
                <label for="textarea">Example textarea</label>
                <textarea class="form-control" name="textarea" rows="4"></textarea>
            </div>
            <div class="form-group">
                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
        </div>

        <step v-for="step in steps" :currentstep="currentstep" :key="step.id" :step="step" :stepcount="steps.length" @step-change="stepChanged">
        </step>

        <script type="x-template" id="step-navigation-template">
            <ol class="step-indicator">
                <li v-for="step in steps" is="step-navigation-step" :key="step.id" :step="step" :currentstep="currentstep">
                </li>
            </ol>
        </script>

        <script type="x-template" id="step-navigation-step-template">
            <li :class="indicatorclass">
                <div class="step"><i :class="step.icon_class"></i></div>
                <div class="caption hidden-xs hidden-sm">Step <span v-text="step.id"></span>: <span v-text="step.title"></span></div>
            </li>
        </script>

        <script type="x-template" id="step-template">
            <div class="step-wrapper" :class="stepWrapperClass">
                <button type="button" class="btn btn-primary" @click="lastStep" :disabled="firststep">
                    Back
                </button>
                <button type="button" class="btn btn-primary" @click="nextStep" :disabled="laststep">
                    Next
                </button>
                <button type="submit" class="btn btn-primary" v-if="laststep" name = "btn">
                    Submit
                </button>
            </div>
        </script>
    </div>
</div>
</form></div>

<!-- it's footer -->

<?php include 'footer.php';?>

<script>
  Vue.component("step-navigation-step", {
    template: "#step-navigation-step-template",
  
    props: ["step", "currentstep"],
  
    computed: {
      indicatorclass() {
        return {
          active: this.step.id == this.currentstep,
          complete: this.currentstep > this.step.id };
  
      } } });
  
  
  
  Vue.component("step-navigation", {
    template: "#step-navigation-template",
  
    props: ["steps", "currentstep"] });
  
  
  Vue.component("step", {
    template: "#step-template",
  
    props: ["step", "stepcount", "currentstep"],
  
    computed: {
      active() {
        return this.step.id == this.currentstep;
      },
  
      firststep() {
        return this.currentstep == 1;
      },
  
      laststep() {
        return this.currentstep == this.stepcount;
      },
  
      stepWrapperClass() {
        return {
          active: this.active };
  
      } },
  
  
    methods: {
      nextStep() {
        this.$emit("step-change", this.currentstep + 1);
      },
  
      lastStep() {
        this.$emit("step-change", this.currentstep - 1);
      } } });
  
  
  
  new Vue({
    el: "#app",
  
    data: {
      currentstep: 1,
  
      steps: [
      {
        id: 1,
        title: "Category",
        icon_class: "fa fa-folder-open" },
  
      {
        id: 2,
        title: "Position",
        icon_class: "fa fa-map-marker"},
  
      {
        id: 3,
        title: "Send",
        icon_class: "fa fa-paper-plane" }] },
  
  
  
  
    methods: {
      stepChanged(step) {
        this.currentstep = step;
      } } });
  </script>
  
  
<?php
    if(isset($_POST['btn'])){
      $Lawyer_Name = $_POST['name'];
      $Email = $_POST['email'];
      $Degree = $_POST['degree'];
      $Expertise = $_POST['expertise'];
      $Number = $_POST['number'];
      $City = $_POST['city'];
      $Address = $_POST['address'];
      $TextArea = $_POST['textarea'];

    $fileProp = $_FILES['Pic'];

      //  echo '<pre>';
      //  print_r($fileProp);
      //  echo '</pre>';

   $FileName = $_FILES['Pic']['name'];
   $FileType = $_FILES['Pic']['type'];
   $FiletempLoc = $_FILES['Pic']['tmp_name'];
   $FileSize= $_FILES['Pic']['size'];

   $Folder = "assets/images/bg/";

      // if(
      //     strtolower($FileType) == 'image/png'||
      //     strtolower($FileType) == 'image/jpg'||
      //     strtolower($FileType) == 'image/jpeg'
      //   ) {
    
        if($FileSize <= 1000000){
    
           $Folders = $Folder.$FileName;
          $query =  "insert into lawyer_reg(Name,Email,Degree,Expertise,Image,Number,City,Address,TextArea)
          values('$Lawyer_Name','$Email','$Degree','$Expertise','$Folders','$Number','$City','$Address','$TextArea')"; 
           $res = mysqli_query($con,$query);
           
           if($res){
            echo "<script>alert('Your Information submitted successfully!');</script>";
            move_uploaded_file($FiletempLoc,$Folders);
            // echo "<a href= 'Form.php' >Insert more Records</a>";
           
           }
           else{
            echo "<script>alert('Information Insertion Failed')</script>";
           }
        } 
        else{
            echo "<script>alert('Image Size should be less than 1 MB')</script>";
        }
      //  }
       
      // else{
      //   echo "<script>alert('Image Format Should not be supported')</script>";
      //  }
    
    
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

</body>
</html>