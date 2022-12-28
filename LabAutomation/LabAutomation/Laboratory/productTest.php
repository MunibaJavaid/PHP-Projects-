<?php include 'header.php'; ?>
<?php include '../config/connection.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--  CSS -->

    <title>Company Tester!</title>
  
  </head>
  <style>
  
body{
  margin: auto ;
	padding:auto;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
}
  </style>
  <body>


  <?php
  
     $Id = $_GET['id'];

     $query = "select * from products where ProductId  = $Id";

     $res = mysqli_query($con,$query);


     $data = mysqli_fetch_assoc($res);

    
    $ProdName =  $data['ProductName'];
    $ProdID =  $data['ProductId'];
  ?>
 
<div class="container"> <br>
  <h3>Company Tester Form</h3> <br>

  <form action="prodins.php" method = "post">


     
     <input type="hidden" value = "<?= $ProdID ?>" name = "Pid">
      <div class="form-group">
          <label for="name">Product Name:</label>
          <input type="text" class="form-control"   name="PName"
          value = "<?= $ProdName ?>" readonly>
        </div>

        

        <div class="form-group">
          <label for="name">Remarks:</label>
          <input type="text" class="form-control" id="remarks" placeholder="Remarks" name="remarks">
        </div>


        <div class="form-group">
          <label for="city">Result :</label>
          <select class="form-control" id="" name = "result">
            <option value="" select disable>--Outcome--</option>
            <option value = "Approve">Approve</option>
            <option value = "Reject">Reject</option>
            
          </select>
        </div>

        <button type="submit" class="btn btn-primary" name = "ins">Submit</button>
  </form>
</div>











  </body>
</html>