<?php include 'header.php'; ?>
<?php include '../Config/Connection.php'; ?>


<?php
$ID = $_GET['id'];
$query = "select * from products where ProductId = $ID";
$getData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($getData);
print_r($res);

// $checkEdit = $res['Courses'];
// $checkBox = explode(',', $checkEdit);
// print_r($checkBox);
?>


<div class="container"> 
  <h3 class = "mt-5">EDIT In DataBase</h3> 

  <form action="insertproduct.php" method = "post" enctype="multipart/form-data">

    
  <div class = "row">

     
      <div class = "col-sm-12 col-lg-6" style = "margin-top:55px;">
      
          
          <input type="hidden"  name="ProductId" value = "<?= $res[
              'ProductId'
          ] ?>" >
          <div class="form-group">
            <label for="name">ProductName:</label>
            <input type="text" class="form-control" id="name" name="pname" value = <?= @$res[
                'ProductName'
            ] ?>>
          </div>

      

          <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" class="form-control" id="status"  name="sta" value = <?= @$res[
                'Status'
            ] ?>>
          </div>

          <div class="form-group">
            <label for="des">Description:</label>
            <input type="text" class="form-control" id="des" name="des" value = <?= @$res[
                'Description'
            ] ?> >
          </div>


          <button type="submit" class="btn btn-primary" name = "Up">Update</button>
      </div>



       <div class = "col-sm-12 col-lg-4 ">

            <div class="d-flex flex-column align-items-center text-center  user-profile-image mt-3">

            <input class="form-control hidden" type="file" id="Pro_Image" name="image" style="visibility: hidden;" />

             
                
                  <img class="mt-5" style="width:250px;" src="<?= @$res[
                      'Image'
                  ] ?>" id="UserImage">

                  
                <div class="upload-photo text-center ">
                    <br />
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('Pro_Image').click(); return false;">
                        <i class="fas fa-download"></i>  Upload Image
                    </button>
                </div>
            </div>
    
       </div>
    <div>
  </form>
</div>




<script>
        $(document).ready(function () {


            //$("#upload-photos").click(function () {
            //    $("#BrowseImage").trigger('click')
            //})

            $("#UserImage").click(function () {
                $("#Pro_Image").trigger('click')
            })


            $("#Pro_Image").change(function () {
                if (this.files && this.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(this.files[0]);
                    fileReader.onload = function (x) {

                        $("#UserImage").attr('src', x.target.result);
                    }
                }
            })
        })
    </script>
