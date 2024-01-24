<?php include'config/connect.php';?>

<?php

	$email = '';
	$emailErr = '';
	
	if(isset($_POST['submit'])){
		
		if(empty($_POST['newsletteremail'])){
			$emailErr = 'Email is required!';
		}
		else{
			$email = filter_input(INPUT_POST,'newsletteremail',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		
		if(empty($emailErr)){
		$sql = "INSERT INTO newsletter (email) VALUES('$email')";
		if(mysqli_query($con, $sql)){
				//header('Location: index.php');
			}
			else{
				echo 'Error: ' . mysqli_error($con);
			}
	}
	}
	
	


?>

	<?php isset($email) ? $email : ''; ?>
	
			<footer>
				<div id="container-carousel" class="container text-center">
					<div class="row row-cols-5">
						<div id="footer-col1" class="col">
							<img id="footer-logo" src="images/CatAndDogLogo.jpg">
						</div>
						<div id="footer-company" class="col">
							<h5>Useful Links</h5>
							<ul class="navbar-nav">
								<li><a href="https://www.thegrocer.co.uk/petcare/139.subject">Pet Care</a></li>
								<li><a href="https://www.dailypaws.com/pet-news-entertainment/feel-good-stories">Feel-Good Stories</a></li>
								<li><a href="https://www.thepetvet.co.uk/news">The Pet Vet</a></li>
							</ul>
						</div>
						<div id="footer-ulinks" class="col">
							<h5>Company</h5>
							<ul class="navbar-nav">
								<li><a href="about.php">About Us</a></li>
								<li><a href="team.php">Our Team</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<div id="newsletter-div" class="col-4">
							<div id="newsletter-form">
								<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="newsletter-register">
									<h5 id="newsletter-h5">Subscribe To Our<br> Newsletter</h5>
									<p id="newsletter-p">Sign up to learn about news & offers</p>
									<input id="newsletter-input" type="text" name="newsletteremail" placeholder="Email Address">
									<input id="newsletter-btn" type="submit" name="submit" value="Sign Up">
								</form>
							</div>
						</div>
						<div id="socialmedia-div" class="col">
							<hr>
							<a href="https://instagram.com"><img class="footer-icons" src="images/instagramIcon.png"></a>
							<a href="https://tiktok.com"><img class="footer-icons" src="images/tiktokLogo.png"></a>
							<a href="https://x.com"><img class="footer-icons" src="images/X-Logo.jpg"></a>
							<a href="https://youtube.com"><img class="footer-icons" src="images/YoutubeLogo.png"></a>
							<p id="socialmedia-p">Follow Us on Instagram, <br>TikTok, X and YouTube</p>
						</div>
					</div>	
				</div>
			</footer>
			<div id="last-div">
				<div id="general-information">
					<ul>
						<li><a href="index.php">Copyright &copy; Paws & Claws Pet Shop</a></li>
						<li class="divisor">|</li>
						<li><a href="">Cookies</a></li>
						<li class="divisor">|</li>
						<li><a href="">Terms & Conditions</a></li>
					</ul>
				</div>
				<div id="payment">
					<ul>
						<li><img src="images/applePay2.jpg" class="payment-logos"></li>
						<li><img src="images/googleplay2.jpg" class="payment-logos"></li>
						<li><img src="images/visaLogo.jpg" class="payment-logos"></li>
						<li><img src="images/mastercard.jpg" class="payment-logos"></li>
						<li><img src="images/paypalLogo.jpg" class="payment-logos"></li>
					</ul>
				</div>
				<div id="ecommerce-badges">
					<ul>
						<li><img src="images/retailExcellence.jpg" class="ecommerce-logos"></li>
						<li><img src="images/ecommerceEurope.jpg" class="ecommerce-logos"></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>