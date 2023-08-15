<?php
require_once('conn.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch data based on ID
    $sql = "SELECT * from pencil WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!-- Modal for displaying product details -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Product details will be dynamically loaded here -->
        <img src="<?php echo $row['photo']; ?>" class="card-img-top" alt="Product Photo">
        <h5 class="card-title"><?php echo $row['name']; ?></h5>
        <p class="card-text"><?php echo $row['feature']; ?></p>
        <p class="card-text">Price: $<?php echo $row['price']; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add to Cart</button>
        <button type="button" class="btn btn-success">Buy Now</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to open the modal -->
<script>
$(document).ready(function() {
    $('#productModal').modal('show');
});
</script>
