
<?php include 'CompanyHeader.php'; ?>

<div class="container"> <br>
  <h3>ADD PRODUCT</h3> <br>

  <form action="insertproduct.php" method = "post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="name">ProductName:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter product name " name="pname">
    </div>

    <div class="form-group">
      <label for="status">Status:</label>
      <select class="form-control" id="sta" name = "status">
        <option value="">--Select--</option>
        <option value = "launched">Launched</option>
        <option value = "hold">Hold</option>
       
      </select>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter description" name="description">
    </div>

    <div class="form-group">
      <label for="file">Image:</label>
      <input type="file" class="form-control" id="name" name="image">
    </div>

    <button type="submit" class="btn btn-primary" name = "ins">Submit</button>
  </form>
</div>
