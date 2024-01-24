<?php include 'includes/header.php'; 
?>

<?php

	$username = $pass = $name = $email = $address = $city = $postalCode = '';
	$usernameErr = $passErr = $nameErr = $emailErr = $addressErr = $cityErr = $postalCodeErr = '';
	
	if(isset($_POST['submit'])){
		
		if(empty($_POST['username'])){
			$usernameErr = 'Username is required!';
		}
		else{
			$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['pass'])){
			$passErr = 'Password is required!';
		}
		else{
			$pass = filter_input(INPUT_POST,'pass',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['name'])){
			$nameErr = 'Name is required!';
		}
		else{
			$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['email'])){
			$emailErr = 'Email is required!';
		}
		else{
			$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['add'])){
			$addressErr = 'Address is required!';
		}
		else{
			$address = filter_input(INPUT_POST,'add',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['city'])){
			$cityErr = 'City is required!';
		}
		else{
			$city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['postalCode'])){
			$podestalCodeErr = 'Email is required!';
		}
		else{
			$postalCode = filter_input(INPUT_POST,'postalCode',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}		
		if(empty($usernameErr) && empty($passErr) && empty($nameErr) && empty($emailErr) && empty($addressErr) && empty($cityErr) && empty($postalCodeErr)){
		$sql = "INSERT INTO clients (username, password, name, address, city, postalCode, email) VALUES('$username', '$pass', '$name', '$address', '$city', '$postalCode','$email')";
		if(mysqli_query($con, $sql)){
				//echo '<script> alert("Succesfully Registered!")';
			}
			else{
				echo 'Error: ' . mysqli_error($con);
			}
	}
	}
	
	


?>

<main id="register-main">

	<span id="register-title-span">
		<img class="index-pets-icon" src="images/registerIcon.png">
		<h5 id="emp-h5">Create Account</h5>
	</span>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="register-form">
		<span class="register-rows">
			<div class="register-span">
				<h6>Username*:</h6>
				<input type="text" placeholder="Username" name="username">
			</div>
			<div class="register-span right">
				<h6>Password*:</h6>
				<input type="password" placeholder="Password" name="pass">
			</div>
			<div class="clear"></div>
		</span>
		
		<span class="register-rows">
			<div class="register-span">
				<h6>Full Name*:</h6>
				<input type="text" placeholder="Full Name" name="name">
			</div>
			<div class="register-span right">
				<h6>Email*:</h6>
				<input type="text" placeholder="Email" name="email">
			</div>
			<div class="clear"></div>
		</span>
		<span class="register-rows">
			<div class="register-span">
				<h6>Address*:</h6>
				<input type="text" placeholder="Address" name="add">
			</div>
			<div class="register-span right">
				<h6>City*:</h6>
				<input type="text" placeholder="City" name="city">
			</div>
			<div class="clear"></div>
		</span>
		<div id="postal" class="register-span">
			<h6>Postal Code*:</h6>
			<input type="text" placeholder="Postal Code" name="postalCode">
		</div>
		<div class="clear"></div>
		<div class="register-btn">
			<input class="index-cart-button" type="submit" name="submit" value="Register">
		</div>
	</form>

</main>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>


<?php include 'includes/footer.php'; ?>