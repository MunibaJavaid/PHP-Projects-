
<?php include 'header.php'; ?>

<?php include '../config/connection.php'; ?>

<h2 style="text-align:center;"><b>View Laboratory Tester Result</b></h2>

<?php
$querys = 'select * from labtesting';
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
            <th>Remarks</th>
            <th>Result</th>
     
        </tr>

        <?php while ($data = mysqli_fetch_assoc($res)) {
            echo '<tr>'; ?>

                        <td><?= $data['ProductId'] ?></td>
                        <td><?= $data['ProdName'] ?></td>
                        <td><?= $data['Remarks'] ?></td>
                        <td><?= $data['Result'] ?></td>
                      


        <?php echo '</tr>';
        } ?>
    
    
    </table>




<?php } else {echo '<p>No Records Found</p>';}


?>
