<?php include 'includes/header.php';

	$sql = 'SELECT * FROM reviews ORDER BY Date DESC';
	$result = mysqli_query($con, $sql);
	$comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	$username = $rating = $review = '';
	$usernameErr = $ratingErr = $reviewErr = '';
	
	if(isset($_POST['submit'])){
		
		if(empty($_POST['username'])){
			$usernameErr = 'Username is required!';
		}
		else{
			$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['stars'])){
			$ratingErr = 'Rating is required!';
		}
		else{
			$rating = filter_input(INPUT_POST,'stars',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['review'])){
			$reviewErr = 'Email is required!';
		}
		else{
			$review = filter_input(INPUT_POST,'review',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		
		if(empty($usernameErr) && empty($ratingErr) && empty($reviewErr)){
			$query = "SELECT * FROM clients WHERE username = '$username'";
			$validUsername = $con->query($query);
			if($validUsername->num_rows > 0){
				$insertReview = "INSERT INTO reviews (name, stars, review) VALUES ('$username', '$rating', '$review')";
				mysqli_query($con, $insertReview);
				echo '<script>window.location.href = "reviews.php";</script>';
			}
			else{
				echo '<script type="text/javascript">'; 
				echo 'window.alert("You must be registered to send a review!")';
				echo '</script>'; 
			}
		}
	}
 ?>

<main id="reviews-main">

	<span id="reviews-span">
			<img id="cart-icon" src="images/reviewIcon.png">
			<h5 id="cart-h5">Reviews</h5>
	</span>

	<section id="reviews-section">
		<div id="reviews">
			<?php foreach($comments as $items): ?>
			<div class="reviews-right">
				<span class="span-right-reviews">
					<?php echo $items['profilePic']; ?>
					<p class="review-text"><?php echo $items['review']; ?></p>
				</span>
				<span class="left-stars">
				<?php $stars = $items['stars'];
					  $counter = 1;
					while($counter <= 5){
						if($counter <= $stars){
							echo '<i class="fa fa-star checked"></i>';
						}
						else{
							echo '<i class="fa fa-star"></i>';
						}
						$counter++;
					} ?>
				</span>
				<span class="span-author-right">
					<p><?php echo $items['name']; ?></p>
					<p><?php echo date_format(date_create($items['date']), 'jS F Y'); ?></p>
				</span>
			</div>
			<?php endforeach; ?>
		</div>
	</section>
	
	<section id="form-section">
		<h2 id="review-title">Send Your Review</h2>
		<div id="form-text-div">
			<form id="review-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">			
				<div id="username-review">
					<span class="reviews">
						<h6>Username*:</h6>
						<h6>Rating*:</h6>
					</span>
					<span class="reviews">
						<input type="text" placeholder="Username" name="username">
						<input id="sliderValue" type="range" min="1" max="5" value="1" oninput="updateStars();" name="stars">
					</span>
					<span id="starContainer" class="reviews">
						
					</span>
				</div>
				<div id="review-text">
					<h6>Review*:</h6>
					<span class="reviews">
						<textarea id="review" rows="8" placeholder="Review" name="review"></textarea>
						<input id="btn-submit-review" type="submit" name="submit" value="Submit">
					</span>
				</div>
			</form>
			<img id="review-image" src="images/dogLaptop.png">
		</div>
	</section>
</main>
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>