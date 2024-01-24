<?php include 'includes/header.php'; 

	$sql = "SELECT * FROM employees";
	$result = mysqli_query($con, $sql);
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
?>




<main id="employees-main">
	
	<span id="emp-span">
			<img class="index-pets-icon" src="images/empCat.png">
			<h5 id="emp-h5">Meet Our Team</h5>
	</span>
	
	<div class="emp-container">
		<?php foreach($products as $items): ?>
		<div class="emp-card">
		  <div class="emp-image">
			<?php echo $items['image']; ?>
		  </div>
		  <div class="emp-content">
			<h3><?php echo $items['name']; ?></h3>
			<p><?php echo $items['position']; ?></p>
		  </div>
		</div> 
		<?php endforeach; ?>
	</div>
	

</main>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>