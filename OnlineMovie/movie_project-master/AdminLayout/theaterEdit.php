<?php include 'header.php'; ?>
<?php include '../MainLayout/connection.php'; ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
$( function() {
    $( "#datepicker" ).datepicker();
} );
  </script>
<!-- Content Start -->
<?php
$Id = $_GET['id'];
$query = "select * from theater where id = $Id";
$res = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($res);
?>

<main class="dash-content">
    <div class="content">
      

        <div class="container"> <br>
            <h3 >Insert Data In DataBase</h3> <br>

            <form action="theatercud.php" method="post"  enctype="multipart/form-data">

                <div class="row">
                    <div class="col-sm-12 col-lg-6" >
                   
                        <input type="hidden" value = "<?= $data[
                            'id'
                        ] ?>" name = "theater_id">

                        <label for="name">Select theater name:</label>
                            <select class="form-control wrap-input1"  name="theater">
                            <option value="">--select--</option>
                            <option value="bronze theater" 
                            <?php if ($data['name'] == 'bronze theater') {
                                echo 'selected';
                            } ?>>bronze theater</option>
                            <option value="silver theater" <?php if (
                                $data['name'] == 'silver theater'
                            ) {
                                echo 'selected';
                            } ?>>silver theater</option>
                            <option value="gold theater" <?php if (
                                $data['name'] == 'gold theater'
                            ) {
                                echo 'selected';
                            } ?>>gold theater</option>
                            <option value="Diamond theater" <?php if (
                                $data['name'] == 'Diamond theater'
                            ) {
                                echo 'selected';
                            } ?>>Diamond theater</option>
                        
                            
                        </select>
                        <label for="name">Select screen:</label>
                            <input type="text" class="form-control input1" id="Release" placeholder="Enter Movie screen" name="screen" id="datepicker" value = "<?= $data[
                                'screen'
                            ] ?>">
                            <label for="name">Movie Date:</label>
                            <input type="text" class="form-control input1" id="Release" placeholder="Enter Movie date" name="date" id="datepicker" value = "<?= $data[
                                'date'
                            ] ?>">
                            <label for="name">No of seat</label>
                            <input type="text" class="form-control input1" id="Description" placeholder="No of Seat" name="seats" value = "<?= $data[
                                'no_of_seat'
                            ] ?>">
                            <label for="name">Amount of Seat</label>
                            <input type="text" class="form-control input1" id="Release" placeholder="Enter Movie date" name="AmSeat" id="datepicker" value = "<?= $data[
                                'amount_per_seat'
                            ] ?>">
                        
                            
                        </select>

                        <button type="submit" class="btn btn-success mt-5" name="Upd" >Submit</button>

                        </div>
                    </div>  
                    
   

                </div>
            </form>
        </div>
    </div>
</main>
<!-- Content End -->