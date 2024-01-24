<?php include 'includes/header.php'; ?>

<?php 
	$limit = 9;
	$offset = 0;
	$sql = "SELECT * FROM products LIMIT $limit OFFSET $offset";
	$result = mysqli_query($con, $sql);
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<main id="products-main">
	<div id="products-div" class="product-cards">
		
		<?php foreach($products as $index => $items): ?>
		<form id="products-form-<?php echo $index; ?>" class="products-form" action="cart.php" method="POST">
			<div class="product-card">
				<input type="hidden" name="product-name" value="<?php echo $items['product']; ?>">
				<input type="hidden" name="price" value="<?php echo $items['price']; ?>">
				<div class="product-img">
					<?php echo $items['img_dir']; ?>
				<div class="product-body">
					<h5 class="card-title"><?php echo $items['product']; ?></h5>
					<p>€<?php echo number_format((double)$items['price'],2, '.', ''); ?></p>
				</div>
				<div class="products-buttons">
					<span><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2, "<?php echo htmlspecialchars($items['product']); ?>");'><input readonly="true" id="<?php echo htmlspecialchars($items['product']); ?>" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1, "<?php echo htmlspecialchars($items['product']); ?>");'></span>
				</div>
				<input class="prod-cart-button" type="submit" value="Add To Cart">
				</div>	
			</div>
		</form>
		<?php endforeach; ?>
		<div class="clear"></div>

	</div>

</main>
<div id="divLoadMore-btn"><button id="loadMore" type="button">Show More</button></div>
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>