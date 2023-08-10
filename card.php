<?php
include 'conn.php';

// Fetch data from the "pencil" table
$sql = "SELECT * FROM pencil";
$result = mysqli_query($conn, $sql);

// Store the fetched data in an array
$pencils = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pencils[] = $row;
}

// Close the database connection

?>
<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cards</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card-img-top {
      height: 200px; /* Set the fixed height for all the card images */
      object-fit: cover; /* Scale images to cover the entire container */
    }
    .add-to-cart-btn, .whishlist-btn, .buy-now-btn {
      background-color: #007bff;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
    }
    .whishlist-btn {
      background-color: #dc3545;
      margin-left: 5px;
    }
    .box-card {
      background-color: #f8f9fa;
      padding: 20px;
      border: 1px solid #dee2e6;
      border-radius: 5px;
      margin-top: 20px;
    }
    /* Center the buttons within the card */
    .card-buttons {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <?php
  require_once('header.php');

  ?>
<div class="container">
    <h2 class="my-4">Pencil Sketches</h2>
    <div class="box-card">
      <div class="row">
        <?php $count = 0; ?>
        <?php foreach ($pencils as $pencil) { ?>
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="<?php echo $pencil['photo']; ?>" class="card-img-top" alt="Product Photo">
              <div class="card-body">
                <h5 class="card-title"><?php echo $pencil['name']; ?></h5>
                <p class="card-text"><?php echo $pencil['feature']; ?></p>
                <p class="card-text">Price: $<?php echo $pencil['price']; ?></p>
                <div class="card-buttons">
                  <button class="add-to-cart-btn">Add to Cart</button>
                  <button class="whishlist-btn">Add to Wishlist</button>
                  
                </div>
              </div>
            </div>
          </div>
          <?php $count++; ?>
          <?php if ($count >= 4) break; ?>
        <?php } ?>
          
       
      </div>
      <div class="text-center mt-3">
      <a href="http://localhost/final/allpencil.php"><button class="btn btn-primary" id="showMoreBtn">Show More</button></a>
    </div>
    </div>
    <?php


    

// Fetch data from the "pencil" table
$sql1 = "SELECT * FROM acrylic";
$result1 = mysqli_query($conn, $sql1);

// Store the fetched data in an array
$pencils1 = [];
while ($row1 = mysqli_fetch_assoc($result1)) {
    $pencils1[] = $row1;
}
?>
<div class="container">
    <h2 class="my-4">Acrylic Sketches</h2>
    <div class="box-card">
      <div class="row">
        <?php $count = 0; ?>
        <?php foreach ($pencils1 as $acc) { ?>
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="<?php echo $acc['photo']; ?>" class="card-img-top" alt="Product Photo">
              <div class="card-body">
                <h5 class="card-title"><?php echo $acc['name']; ?></h5>
                <p class="card-text"><?php echo $acc['feature']; ?></p>
                <p class="card-text">Price: $<?php echo $acc['price']; ?></p>
                <div class="card-buttons">
                  <button class="add-to-cart-btn">Add to Cart</button>
                  <button class="whishlist-btn">Add to Wishlist</button>
                  
                </div>
              </div>
            </div>
          </div>
          <?php $count++; ?>
          <?php if ($count >= 4) break; ?>
        <?php } ?>
          
       
      </div>
      <div class="text-center mt-3">
      <a href="http://localhost/final/acryliccard.php"><button class="btn btn-primary" id="showMoreBtn">Show More</button></a>
    </div>
    </div>
    <?php


    

// Fetch data from the "pencil" table
$sql2 = "SELECT * FROM canvas";
$result2 = mysqli_query($conn, $sql2);

// Store the fetched data in an array
$pencils2 = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
    $pencils2[] = $row2;
}
?>
<div class="container">
    <h2 class="my-4">Canvas Paintings</h2>
    <div class="box-card">
      <div class="row">
        <?php $count = 0; ?>
        <?php foreach ($pencils2 as $canvas) { ?>
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="<?php echo $canvas['photo']; ?>" class="card-img-top" alt="Product Photo">
              <div class="card-body">
                <h5 class="card-title"><?php echo $canvas['name']; ?></h5>
                <p class="card-text"><?php echo $canvas['feature']; ?></p>
                <p class="card-text">Price: $<?php echo $canvas['price']; ?></p>
                <div class="card-buttons">
                  <button class="add-to-cart-btn">Add to Cart</button>
                  <button class="whishlist-btn">Add to Wishlist</button>
                  
                </div>
              </div>
            </div>
          </div>
          <?php $count++; ?>
          <?php if ($count >= 4) break; ?>
        <?php } ?>
          
       
      </div>
      <div class="text-center mt-3">
      <a href="http://localhost/final/canvas.php"><button class="btn btn-primary" id="showMoreBtn">Show More</button></a>
    </div>
    </div>

    <?php


    

// Fetch data from the "pencil" table
$sql3 = "SELECT * FROM nature";
$result3 = mysqli_query($conn, $sql3);

// Store the fetched data in an array
$pencils3 = [];
while ($row3 = mysqli_fetch_assoc($result3)) {
    $pencils3[] = $row3;
}
?>
<div class="container">
    <h2 class="my-4">Nature Paintings</h2>
    <div class="box-card">
      <div class="row">
        <?php $count = 0; ?>
        <?php foreach ($pencils3 as $nature) { ?>
          <div class="col-md-3 mb-4">
            <div class="card">
              <img src="<?php echo $nature['photo']; ?>" class="card-img-top" alt="Product Photo">
              <div class="card-body">
                <h5 class="card-title"><?php echo $nature['name']; ?></h5>
                <p class="card-text"><?php echo $nature['feature']; ?></p>
                <p class="card-text">Price: $<?php echo $nature['price']; ?></p>
                <div class="card-buttons">
                  <button class="add-to-cart-btn">Add to Cart</button>
                  <button class="whishlist-btn">Add to Wishlist</button>
                  
                </div>
              </div>
            </div>
          </div>
          <?php $count++; ?>
          <?php if ($count >= 4) break; ?>
        <?php } ?>
          
       
      </div>
      <div class="text-center mt-3">
      <a href="http://localhost/final/canvas.php"><button class="btn btn-primary" id="showMoreBtn">Show More</button></a>
    </div>
    </div>
</body>
</html>
