<?php include 'CompanyHeader.php';?>
<?php include '../config/connection.php'; ?>


<?php
            $query = 'select * from products where Status = "launched"';
            ($Prodres = mysqli_query($con, $query)) or die('Incorrect Query!!');
        
?>


<main class="dash-content">
              <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                    <?php while ($data = mysqli_fetch_assoc($Prodres)) { echo " <div class='col-xl-4'>";?>
                     
                            <div class="card">
                                <img src="<?= $data['Image']?>" class="card-img-top" alt="..." width="50" height="225px">
                                <div class="card-body" >
                                <h5 class="card-title"><?=  $data['ProductName'] ?></h5>
                                <p class="card-text"><?= $data['Description']?></p>
                                <p class="card-text"><small class="text-muted"><?= $data['Status'] ?></small></p>
                                <a href="productTest.php?id=<?= $data['ProductId']?>" class = "btn btn-primary">Product Testing</a>
                                </div>
                            </div>
                        
                        <?php echo "</div>" ;} ?>
                    
                    </div>
             
                </div>
            </main> 
</main>











