<?php
session_start();

if (!isset($_SESSION['db_Role'])) {
    echo "<script>alert('Unauthorize to Access!!');window.location.href = '../MainLayout/index.php'</script>";
} elseif ($_SESSION['db_Role'] != 'CRIP') {
    echo "<script>alert('Unauthorize to Access!!');window.location.href = '../MainLayout/index.php'</script>";
}

?>
