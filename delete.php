<?php
require_once('conn.php');



if (isset($_GET['id']) && isset($_GET['sketchType'])) {
    $id = $_GET['id'];
    $sketchType = $_GET['sketchType'];

    // Determine the table based on the sketch type
    $table = '';
    switch ($sketchType) {
        case 'pencil':
            $table = 'pencil';
            break;
        case 'acrylic':
            $table = 'acrylic';
            break;
        case 'nature':
            $table = 'nature';
            break;
        case 'canvas':
            $table = 'canvas';
            break;
        default:
            // Invalid sketch type
            echo "Invalid Sketch Type";
            exit();
    }

    // Delete data based on ID
    $deleteSql = "DELETE FROM $table WHERE id = $id";
    if ($conn->query($deleteSql) === TRUE) {
        echo '<script>swal("Success!", "Deleted Successfully", "success");</script>';
        header("Location: sketchdetail.php?sketchType=$sketchType");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
