<?php
require_once('conn.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete data based on ID
    $deleteSql = "DELETE FROM canvas WHERE id = $id";
    if ($conn->query($deleteSql) === TRUE) {
        // header("Location: admin.php");
        echo '<script>swal("Success!", "Deleted Successfully", "success");</script>';
        header("Location: sketchdetail.php");

    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
