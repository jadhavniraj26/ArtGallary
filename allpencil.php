<?php
include 'conn.php';
require_once('header.php');

// Fetch data from the "pencil" table
$sql = "SELECT * FROM pencil";
$result = mysqli_query($conn, $sql);

// Store the fetched data in an array
$pencils = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pencils[] = $row;
}

// Close the database connection
mysqli_close($conn);
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
<div class="container">
    <h2 class="my-4">Pencil Sketches</h2>
    <div class="box-card">
      <div class="row">

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
          
        <?php } ?>
          
       
      </div>
    </div>
    
    
</body>
</html>