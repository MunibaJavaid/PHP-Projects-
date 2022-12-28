<?php include 'Connection.php';?>
<?php include 'Dashboard.php';?>

<style>
    .head{
      text-align: center;
      color: black;
      margin-top:20px;
        }
  </style>

<?php
$Id = $_GET['id'];
$query = "select * from lawyers_info where lawyers_id = $Id";
$getData = mysqli_query($con,$query);
$res = mysqli_fetch_assoc($getData);
?>

<form action="lawyer_des.php" method = "post" enctype="multipart/form-data" class = "container">
<input type="hidden" name="lawyers_id" value = <?= $res['lawyers_id'] ?> >
<h1 class = "head">Edit Lawyer Info</h1> <br><br>

  <div class ="row">
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
     <h3>Lawyer Name</h3>
   <label for="">lawyer Name:</label> <select class="form-select" aria-label="Default select example" name = "Name">
      <?php
                                $query = "select * from lawyers";
                                $result = mysqli_query($con,$query);
                                if(mysqli_num_rows($result) > 0){
                                    while($data  = mysqli_fetch_array($result)){?>
                            <option value="<?=$data['Lawyer_Id']?>" 
                             <?php if ($res['Lawyers_Name'] == $data['Lawyer_Id']){
                               echo 'selected';
                             }?>><?=$data['Lawyer_Name']?></option>
                             <?php
                             }
                            } else{  ?>
                                <option>NO records Found</option>
                                <?php }
                                 ?>
      </select>
  </div>
    <div class ="col-lg-6 col-md-6 col-sm-12">
      <h3>Category</h3> 
     <label for="">Category: </label> <select class="form-select" aria-label="Default select example" name = "categorys">
      <?php
                                 $querys = "select * from catageriws_laywers";
                                 $rs = mysqli_query($con,$querys);
                                 if(mysqli_num_rows($rs) > 0){
                                     while($data  = mysqli_fetch_array($rs)){?>
                             <option value="<?=$data['C_id']?>" 
                             <?php if ($res['category'] == $data['C_id']){
                               echo 'selected';
                             } ?>><?= $data['Name']?></option>
                             <?php
                             }
                             }else{  ?>
                             <option>NO records Found</option>
                             <?php }
                              ?>
      </select>
    </div>
    
    
 </div>
 <div class = "row mt-4">
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Contact No.</h3>
  Contact No. <input type="text" placeholder = "Enter Lawyer Contact No." name = "Contact" value =<?=$res['Lawyers_contact']?>>
 </div>
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Address</h3>
  Address <input type="text" placeholder = "Enter Lawyer Address" name = "Address" value =<?=$res['Lawyers_Addres']?>>
 </div>
 </div>

 <div class = "row mt-4">
  <div class = "col-lg-6 col-md-6 col-sm-12 ">
    <h3>Experience</h3>
    <label for="">Cases Complete: </label> <input type="text" placeholder = "Enter Lawyer Experience" name = "Experience" value =<?=$res['Lawyers_Experience']?>>
  </div>

 <div class="form-outline col-lg-6 col-md-6 col-sm-12 mb-4">
  <h3>Description</h3>
     <label class="form-label" for="form4Example3">Dsecription:</label>
    <textarea class="form-control" id="form4Example3" rows="4" name = "lawyer_des"><?=$res['des']?></textarea>
  </div>
</div>
    <div class = "text-center">
     <input type="submit" value = "Update" class = "btn btn-danger btn-lg" name = "update">
    </div>
</form>