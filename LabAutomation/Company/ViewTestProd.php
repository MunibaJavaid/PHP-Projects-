
<?php include 'CompanyHeader.php';?>

<?php include '../config/connection.php'; ?>

<h2 style="text-align:center;"><b>View Testing Product</b></h2>

<?php
$querys = 'select * from companytester';
($res = mysqli_query($con, $querys)) or die('Incorrect Querry');
// $data = mysqli_fetch_assoc($res);
// echo '<pre>';
// print_r($data);
// echo '</pre>';

$rowCount = mysqli_num_rows($res);

if ($rowCount > 0) { ?>

    <table class = "container table table-bordered mt-5">


        <tr>
            
            <th>ProductName</th>
            <th>Remarks</th>
            <th>Result</th>
         
        </tr>

        <?php while ($data = mysqli_fetch_assoc($res)) {
            echo '<tr>'; ?>

                        <td><?= $data['ProductName'] ?></td>
                        <td><?= $data['Remarks'] ?></td>
                        <td><?= $data['Result'] ?></td>
                      
                      
                        <td>
                            <a href="send.php?id=<?= $data['cplrId']?>" class = "btn btn-primary">Send</a>
                            <a href="Refused.php?id=<?= $data['cplrId']?>" class = "btn btn-danger">Refused</a>
                        </td>



        <?php echo '</tr>';
        } ?>
    
    
    </table>




<?php } else {echo '<p>No Records Found</p>';}

error_reporting(0);

$DelID = $_GET['Delid'];

$query = "delete from products where ProductId = $DelID";

$res = mysqli_query($con, $query);

if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'ViewTestProd.php';</script>";
}
?>





<!-- update Work --> <?php

if (isset($_POST['ins'])) {
  $ProdId  = $_POST['Pid'];
  $ProductName = $_POST['PName'];
  $Remarks = $_POST['remarks'];
  $Result = $_POST['result'];


    $query = "update products set prodId =  '$ProdId' ,ProductName = '$Name',Remarks = '$Remarks',Result = '$Result ',
      where ProdId = '$ProdId'";

    $res = mysqli_query($con, $query);

    if ($res) {
        echo "<script>alert('Data Updated');window.location.href = 'ViewTestProd.php.php'</script>";
    } else {
        echo "<script>alert('Data Updation Failed')</script>";
    }
} ?>

<?php include 'footer.php'; ?>