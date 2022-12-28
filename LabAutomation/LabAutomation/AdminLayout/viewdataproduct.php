
<?php include 'header.php'; ?>

<?php include '../config/connection.php'; ?>

<h2 style="text-align:center;"><b>View Data Product</b></h2>

<?php
$querys = 'select * from products';
($res = mysqli_query($con, $querys)) or die('Incorrect Querry');
// $data = mysqli_fetch_assoc($res);
// echo '<pre>';
// print_r($data);
// echo '</pre>';

$rowCount = mysqli_num_rows($res);

if ($rowCount > 0) { ?>

    <table class = "container table table-bordered mt-5">


        <tr>
            <th>ProductId</th>
            <th>ProductName</th>
            <th>Status</th>
            <th>Description</th>
            <th>Image</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($res)) {
            echo '<tr>'; ?>

                        <td><?= $data['ProductId'] ?></td>
                        <td><?= $data['ProductName'] ?></td>
                        <td><?= $data['Status'] ?></td>
                        <td><?= $data['Description'] ?></td>
                        <td><img src = "<?= $data['Image'] ?>" alt="" width = 80px></td>
                      
                        <td> <a href="editProd.php?id=<?= $data[
                            'ProductId'
                        ] ?>" class = "btn btn-primary">Edit</a> </td>
                        <td> <a href="viewdataproduct.php?Delid=<?= $data[
                            'ProductId'
                        ] ?>" class = "btn btn-danger" onclick = 
                        "return confirm('Are you sure you want to delete');return false;">Delete</a> </td>



        <?php echo '</tr>';
        } ?>
    
    
    </table>




<?php } else {echo '<p>No Records Found</p>';}

error_reporting(0);

$DelID = $_GET['Delid'];

$query = "delete from products where ProductId = $DelID";

$res = mysqli_query($con, $query);

if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'viewdataproduct.php';</script>";
}
?>
