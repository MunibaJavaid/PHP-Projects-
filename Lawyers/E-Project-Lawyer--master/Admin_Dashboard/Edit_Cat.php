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
    <!-- <link rel="stylesheet" href="category.css"> -->

</head>
<body>
  <style>
    .head{
      color:black;
      font-size: 35px;
    }
  </style>
<?php include 'Dashboard.php';?>

<?php
$Id = $_GET['id'];
$query = "select * from catageriws_laywers where C_id = $Id";
$getData = mysqli_query($con,$query);
$res = mysqli_fetch_assoc($getData);
?>
 
<form action="category.php" method = "post" enctype="multipart/form-data" class = "container mt-3"> 
<input type="hidden" name="C_id" value = <?= $res['C_id'] ?> >
<h2 class = "text-center head">Edit Your Category</h2>

  <div class = "row ml-5 mt-5 container-fluid">
    <div class = "col-lg-6 col-md-6 col-sm-12" > 
      <h3>Category</h3>
      <select class="form-select" aria-label="Default select example" name = "categorys">
        <option dsiabled>Select The Category</option>
        <option value="Civil Law" <?php if($res ['Name'] == 'Civil Law') {echo 'selected';} ?>>Civil Law</option>
        <option value="Family Law" <?php if($res ['Name'] == 'Family Law') {echo 'selected';} ?>>Family Law</option>
        <option value="Cyber Law" <?php if($res ['Name'] == 'Cyber Law') {echo 'selected';} ?>>Cyber Law</option>
        <option value="Workplace Accident" <?php if($res ['Name'] == 'Workplace Accident' ) {echo 'selected';} ?>>Workplace Accident</option>
        <option value="Criminal Law" <?php if($res ['Name'] == 'Criminal Law') {echo 'selected';} ?>>Criminal Law</option>
        <option value="Real State Law" <?php if($res ['Name'] == 'Real State Law') {echo 'selected';} ?>>Real State Law</option>
    
      </select>
    </div>
    <div class="icon-box-se col-lg-6 col-md-6 col-sm-12">
        <h3>Icon</h3>
       <label for="">Icon: </label> <input type="text" name = "icon" value =<?=$res['Icon']?>>
    </div>

 </div>

 <div class = "row ml-5 mt-4">
 <div class="form-outline col-lg-6 col-md-6 col-sm-12 mb-4">
 <h3>Description</h3>
    <textarea class="form-control" id="form4Example3" rows="4" name = "cat_description"><?=$res['Description'] ?></textarea>
    
  </div>

 </div>
    <div class = "text-center mt-2">
     <input type="submit" value = "update" class = "btn btn-danger" style = "width:120px;" name = "update">
    </div>
 </form>


</body>
</html>