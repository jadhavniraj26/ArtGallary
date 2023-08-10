<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sketch Detail Page</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <?php
        // Check if the sketchType parameter exists in the URL
        if (isset($_GET['sketchType'])) {
            $sketchType = $_GET['sketchType'];

            // Display content based on the sketch type
            switch ($sketchType) {
                case 'pencil':
                    echo '<h2>Pencil Sketch</h2>';
                    $sql = "SELECT * from pencil";
                    $result = $conn->query($sql);

                    break;
                case 'acrylic':
                    echo '<h2>Acrylic Sketch</h2>';
                    $sql = "SELECT * from acrylic";
                    $result = $conn->query($sql);
                    break;
                case 'nature':
                    echo '<h2>Nature Paintings</h2>';
                    $sql = "SELECT * from nature";
                    $result = $conn->query($sql);                    
                    break;
                case 'canvas':
                    echo '<h2>Canvas Paintings</h2>';
                    $sql = "SELECT * from pencil";
                    $result = $conn->query($sql);                    
                    break;
                default:
                    echo '<h2>Invalid Sketch Type</h2>';
                    break;
            }
        } else {
            echo '<h2>No Sketch Type Selected</h2>';
        }
        ?>
    </div>

    <!-- Include Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
