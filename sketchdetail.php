<?php
require_once 'conn.php';

// Fetch data from the database
$sql = "SELECT * from canvas";
$result = $conn->query($sql);
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

    <div class="container">
        <h2>Admin Panel</h2>
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
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td>' . $row['feature'] . '</td>';
                    echo '<td><img src="'. $row['photo'] . '" alt="Item Image" style="max-width: 100px;"></td>';



                    echo '<td>
                        <a href="edit.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>
                        <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>
                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
