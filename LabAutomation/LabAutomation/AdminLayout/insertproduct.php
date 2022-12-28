
<?php include 'header.php'; ?>

<?php include '../Config/Connection.php'; ?>

<!-- insert Work -->

<?php if (isset($_POST['ins'])) {
    $PName = $_POST['pname'];
    $Status = $_POST['status'];
    $Description = $_POST['description'];

    $FileProp = $_FILES['image'];

    $FileName = $_FILES['image']['name'];
    $FileType = $_FILES['image']['type'];
    $FileTempLoc = $_FILES['image']['tmp_name'];
    $FileSize = $_FILES['image']['size'];

    $folder = '../MainLayout/assets/images/';

    if (
        strtolower($FileType) == 'image/jpeg' ||
        strtolower($FileType) == 'image/jpg' ||
        strtolower($FileType) == 'image/png'
    ) {
        if ($FileSize <= 1000000) {
            //1MB likha hai bytes mai convert kar k

            $folder = $folder . $FileName;
            $query = "insert into products (ProductName,Status,Description,Image) values ('$PName','$Status','$Description','$folder')";
            $res = mysqli_query($con, $query);
            if ($res) {
                echo "<script>alert('Data Inserted Successfully');window.location.href = 'viewdataproduct.php';</script>";
                move_uploaded_file($FileTempLoc, $folder);
            } else {
                echo "<script>alert('Data Insertion Failed')</script>";
            }
        } else {
            echo "<script>alert('Image should be less than 1MB !! ');window.location.href = 'viewdataproduct.php';</script>";
        }
    } else {
        echo "<script>alert('Image Formate not supported!! ');window.location.href = 'viewdataproduct.php';</script>";
    }
} ?>









<!-- Data Updated Code -->


<?php if (isset($_POST['Up'])) {
    $ProductId = $_POST['ProductId'];
    $PName = $_POST['pname'];
    $Status = $_POST['sta'];
    $Description = $_POST['des'];
    $FileProp = $_FILES['image'];

    $FileName = $_FILES['image']['name'];
    $FileType = $_FILES['image']['type'];
    $FileTempLoc = $_FILES['image']['tmp_name'];
    $FileSize = $_FILES['image']['size'];
    $folder = '../MainLayout/assets/images/';
    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        if (
            strtolower($FileType) == 'image/jpeg' ||
            strtolower($FileType) == 'image/jpg' ||
            strtolower($FileType) == 'image/png'
        ) {
            if ($FileSize <= 1000000) {
                //1MB likha hai bytes mai convert kar k
                $folder = $folder . $FileName;
                $query = "update products set ProductName = '$PName',Status = '$Status',Description = '$Description',Image = '$folder' where ProductId  = '$ProductId'";
                $res = mysqli_query($con, $query);
                if ($res) {
                    echo "<script>alert('Data Updated Successfully');window.location.href = 'viewdataproduct.php';</script>";
                    move_uploaded_file($FileTempLoc, $folder);
                } else {
                    echo "<script>alert('Data Updation Failed');window.location.href = 'viewdataproduct.php';</script>";
                }
            } else {
                echo "<script>alert('Image should be less than 1MB !! ')window.location.href = 'viewdataproduct.php';</script>";
            }
        } else {
            echo "<script>alert('Image Formate not supported!! ')window.location.href = 'viewdataproduct.php';</script>";
        }
    } else {
        $query = "update products set ProductName = '$PName',Status = '$Status',Description = '$Description' where ProductId  = '$ProductId'";

        $res = mysqli_query($con, $query);
        if ($res) {
            move_uploaded_file($FileTempLoc, $folder);
            echo "<script>alert('Data Updated Successfully');window.location.href = 'viewdataproduct.php';</script>";
        } else {
            echo "<script>alert('Data Updation Failed');window.location.href = 'viewdataproduct.php';</script>";
        }
    }
}
