<!DOCTYPE html>
<html>
<head>
  <title>Product Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Add the SweetAlert library -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    /* Optional custom CSS styles */
    body {
      padding: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="my-4">Product Form</h2>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="productID">ID:</label>
        <input type="text" class="form-control" id="productID" name="productID" required>
      </div>
      <div class="form-group">
    <label for="productFeature">Type of Sketch</label>
    <select class="form-control" id="type" name="type" required>
        <option value="" disabled selected>Select an option</option>
        <option value="Pencil">Pencil Sketch</option>
        <option value="Acrylic">Acrylic Paintings</option>
        <option value="Canvas">Canvas Paintings</option>
        <option value="Nature">Nature Artwork</option>
        <!-- Add more options as needed -->
    </select>
</div>
      <div class="form-group">
        <label for="productName">Name:</label>
        <input type="text" class="form-control" id="productName" name="productName" required>
      </div>
      <div class="form-group">
        <label for="productPrice">Price:</label>
        <input type="number" step="0.01" class="form-control" id="productPrice" name="productPrice" required>
      </div>
      <div class="form-group">
        <label for="productPhoto">Photo:</label>
        <input type="file" class="form-control-file" name="productPhoto" id="productPhoto">
      </div>
      <div class="form-group">
        <label for="productFeature">Feature:</label>
        <textarea class="form-control" id="productFeature" name="productFeature" rows="3" required></textarea>
      </div>
      







      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include 'conn.php';
if(isset($_POST['submit'])){

  // Get data from the Form
  $id = $_POST['productID'];
  $name = $_POST['productName'];
  $price = $_POST['productPrice'];
  $image = $_FILES['productPhoto'];
  $feature = $_POST['productFeature'];

  $filename = $image['name'];
  $filepath = $image['tmp_name'];
  $fileerror = $image['error'];
  $type=$_POST['type'];

  if($fileerror === 0){
    $destfile = 'upload/' . $filename;
    move_uploaded_file($filepath, $destfile);
    if($type=='Pencil'){

    // Use $destfile instead of $image in the INSERT query to store the file path in the database
    $insertquery = "INSERT INTO `pencil` (`id`, `name`, `price`, `photo`, `feature`) VALUES ('$id', '$name', '$price', '$destfile', '$feature');";
    $res = mysqli_query($conn, $insertquery);

    if($res){
      echo '<script>swal("Good job!", "Successfully Added!", "success");</script>';
    } else {
      echo '<script>swal("Oops!", "Something went wrong, Retry Again!", "error");</script>';
    }
}
   if($type=='Acrylic')
  {   
    $insertquery="INSERT INTO `acrylic` (`id`, `name`, `price`, `photo`, `feature`) VALUES ('$id', '$name', '$price', '$destfile', '$feature');";
    $res = mysqli_query($conn, $insertquery);

    if($res){
      echo '<script>swal("Good job!", "Successfully Added!", "success");</script>';
    } else {
      echo '<script>swal("Oops!", "Something went wrong, Retry Again!", "error");</script>';
    }
 }
 if($type=='Canvas')
 {   
   $insertquery="INSERT INTO `canvas` (`id`, `name`, `price`, `photo`, `feature`) VALUES ('$id', '$name', '$price', '$destfile', '$feature');";
   $res = mysqli_query($conn, $insertquery);

   if($res){
     echo '<script>swal("Good job!", "Successfully Added!", "success");</script>';
   } else {
     echo '<script>swal("Oops!", "Something went wrong, Retry Again!", "error");</script>';
   }
}
if($type=='Nature')
 {   
   $insertquery="INSERT INTO `nature` (`id`, `name`, `price`, `photo`, `feature`) VALUES ('$id', '$name', '$price', '$destfile', '$feature');";
   $res = mysqli_query($conn, $insertquery);

   if($res){
     echo '<script>swal("Good job!", "Successfully Added!", "success");</script>';
   } else {
     echo '<script>swal("Oops!", "Something went wrong, Retry Again!", "error");</script>';
   }
}
else{
    echo "wrong"; 
}
}
  }

?>
