
<?php include '../MainLayout/connection.php'; ?>

<!-- insert Work -->

<?php if (isset($_POST['ins'])) {
    $Name = $_POST['theater'];
    $Screen = $_POST['screen'];
    $Date = $_POST['date'];
    $Seat = $_POST['seats'];
    $Amount = $_POST['AmSeat'];
    $Movie = $_POST['Movie'];

    $query = "insert into theater (	name,screen,date,no_of_seat,amount_per_seat,movie_Product) values ('$Name','$Screen','$Date','$Seat','$Amount','$Movie')";
    $res = mysqli_query($con, $query);
    if ($res) {
        echo "<script>alert('Data Inserted Successfully');window.location.href = 'viewtheater.php'</script>";
    } else {
        echo "<script>alert('Data Insertion Failed')</script>";
    }
} ?>


<!-- update Work -->
<?php if (isset($_POST['Upd'])) {
    $Name = $_POST['theater'];
    $theaterid = $_POST['theater_id'];
    $Screen = $_POST['screen'];
    $date = $_POST['date'];
    $Seat = $_POST['seats'];
    $AmSeat = $_POST['AmSeat'];
    $query = "update theater set name = '$Name',screen = '$Screen',date = '$date',no_of_seat = '$Seat',amount_per_seat = '$AmSeat' where id = '$theaterid'";

    $res = mysqli_query($con, $query);

    if ($res) {
        echo "<script>alert('Data Updated');window.location.href = 'viewtheater.php'</script>";
    } else {
        echo "<script>alert('Data Updation Failed');window.location.href = 'viewtheater.php'</script>";
    }
} ?>







