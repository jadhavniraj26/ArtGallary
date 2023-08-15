<?php
require_once 'conn.php';

// Fetch data from the database
// $sql = "SELECT * from canvas";
// $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            margin-top:20px;
        }
    </style>
</head>
<body>
<?php
require_once 'adminheader.php';
?>
<div class="container mt-4">
        <?php
        // Check if the sketchType parameter exists in the URL
        if (isset($_GET['sketchType'])) {
            $sketchType = $_GET['sketchType'];

            // Display content based on the sketch type
            switch ($sketchType) {
                case 'pencil':
                    echo '<h2>Pencil Sketch</h2>';
                    // Inside the switch statement for each sketchType
                    try {
                      $sql = "SELECT * FROM pencil"; // Replace table_name with the actual table name
                      $result = $conn->query($sql);
    
                     if (!$result) {
                      throw new Exception("Query failed: " . $conn->error);
                       }
                     } catch (Exception $e) {
                      echo "Error: " . $e->getMessage();
                     }

                       
                    break;
                case 'acrylic':
                    echo '<h2>Acrylic Sketch</h2>';
                    try {
                        $sql = "SELECT * FROM acrylic"; // Replace table_name with the actual table name
                        $result = $conn->query($sql);
      
                       if (!$result) {
                        throw new Exception("Query failed: " . $conn->error);
                         }
                       } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                       }
                       break;
  
                case 'nature':
                    echo '<h2>Nature Paintings</h2>';
                    try {
                        $sql = "SELECT * FROM nature"; // Replace table_name with the actual table name
                        $result = $conn->query($sql);
      
                       if (!$result) {
                        throw new Exception("Query failed: " . $conn->error);
                         }
                       } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                       }
                     
                    break;
                case 'canvas':
                    echo '<h2>Canvas Paintings</h2>';
                    try {
                        $sql = "SELECT * FROM canvas"; // Replace table_name with the actual table name
                        $result = $conn->query($sql);
      
                       if (!$result) {
                        throw new Exception("Query failed: " . $conn->error);
                         }
                       } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                       }
                      
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


    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Feature</th>
                    <th>Image</th>
                    <th>Edit & Delete</th>
                    


                </tr>
            </thead>
            <tbody>
                <?php
                // Inside the loop where you are displaying the table rows
                 while ($row = $result->fetch_assoc()) {
                 echo '<tr>';
                 echo '<td>' . $row['id'] . '</td>';
                 echo '<td>' . $row['name'] . '</td>';
                 echo '<td>' . $row['price'] . '</td>';
                 echo '<td>' . $row['feature'] . '</td>';
                 echo '<td><img src="'. $row['photo'] . '" alt="Item Image" style="max-width: 100px;"></td>';
                 echo '<td>';
                 echo '<a href="edit.php?id=' . $row['id'] . '&sketchType=' . $sketchType . '" class="btn btn-primary">Edit</a> ';
                 echo '<a href="delete.php?id=' . $row['id'] . '&sketchType=' . $sketchType . '" class="btn btn-danger">Delete</a>';
                 echo '</td>';
                 echo '</tr>';
                }

               
                
                
                ?>
            </tbody>
        </table>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <?php require_once('footer.php') ?>
</body>
</html>
