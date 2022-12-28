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
    }
    .card{
  background: #ecf0f3;
  font-family: 'Nunito', sans-serif;
  padding: 40px;
  border-radius: 20px;
  box-shadow: 14px 14px 20px #EFB731, -14px -14px 20px #EFB731;
}

.container .text-uppercase{
    color: black;
    font-size: 25px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-align: center;
    margin: 0 0 20px;
}

.container .form-control-lg{
    color: #333;
    background: #white;
    font-size: 15px;
    padding: 20px;
    letter-spacing: 1px;
    border: none;
    border-radius: 50px;
    box-shadow: inset 3px 3px 3px #cbced1, inset -6px -6px 6px #fff;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.container .ab{
    color: #333;
    background: #ecf0f3;
    font-size: 15px;
    padding: 20px;
    letter-spacing: 1px;
    border: none;
    background-color: white;
    border-radius: 20px;
    box-shadow: inset 3px 3px 3px #cbced1, inset -6px -6px 6px #fff;
    display: inline-block;
    transition: all 0.3s ease 0s;
}


.container .form-select{
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

.container .btn{
    /* color: #000; */
    color: #fff;
    /* background-color: #ac40ab; */
    font-size: 15px;
    font-weight: bold;
    text-transform: uppercase;
    width: 30%;
    padding: 12px 15px 11px;
    border-radius: 20px;
    box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
    border: none;
    transition: all 0.5s ease 0s;
}
.form-container .btn:hover,
.form-container  .btn:focus{
    color: #000;
    letter-spacing: 3px;
    box-shadow: none;
    outline: none;
}
  </style>
<?php include 'Dashboard.php';?>

 
<form action="Category.php" method = "post" enctype="multipart/form-data" class = "container mt-3"> 
<h1 class = "text-center head">ADD CATEGORY</h1>

  <div class = "row ml-5 mt-5 container-fluid">
    <div class = "col-lg-6 col-md-6 col-sm-12" > 
      <h3>Category</h3>
      <select class="form-select" aria-label="Default select example" name = "categorys">
        <option dsiabled>Select The Category</option>
        <option value="Civil Law">Civil Law</option>
        <option value="Family Law">Family Law</option>
        <option value="Cyber Law">Cyber Law</option>
        <option value="Workplace Accident">Workplace Accident</option>
        <option value="Criminal Law">Criminal Law</option>
        <option value="Real State Law">Real State Law</option>
    
      </select>
    </div>
    <div class="icon-box-se col-lg-6 col-md-6 col-sm-12">
        <h3>Icon</h3>
       <label for="form-label">Icon: </label> <input class = "form-control form-control-lg" type="text" name = "icon">
    </div>

 </div>

 <div class = "row ml-5 mt-4">
 <div class="form-outline col-lg-6 col-md-6 col-sm-12 mb-4">
 <h3>Description</h3>
    <textarea class="form-control ab" id="form4Example3" rows="4" name = "cat_description"></textarea>
    
  </div>

 </div>

    <div class = "text-center mt-2">
     <input type="submit" value = "submit" class = "btn btn-danger" name = "btn">
    </div>
 </form>


<?php
   if(isset($_POST['btn'])){
    $CatName = $_POST['categorys'];
    $Icon = $_POST['icon'];
    $catDescription = $_POST['cat_description'];

    $query = "insert into catageriws_laywers(Name,Icon,description) values ('$CatName','$Icon','$catDescription')";
    $res = mysqli_query($con,$query);

    if($res){
        echo "<script>alert('Data Inserted succesfully');window.location.href = '../Main_Layout/services.php'</script>";
    }else{
        echo "<script>alert('Data Insert Failed')</script>";
    }
   }
?>

<?php
   if(isset($_POST['update'])){
    $catID = $_POST['C_id'];
    $CatName = $_POST['categorys'];
    $Icon = $_POST['icon'];
    $catDescription = $_POST['cat_description'];

    $update = "update catageriws_laywers set Name = '$CatName',Icon = '$Icon',Description = '$catDescription' 
    where C_id = '$catID'";
    $res = mysqli_query($con,$update);

    if($res){
        echo "<script>alert('Data Updated succesfully');window.location.href = 'cat_man.php'</script>";
    }else{
        echo "<script>alert('Data Update Failed')</script>";
    }
   }
?>

</body>
</html>