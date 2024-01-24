
<?php include 'includes/header.php'; 
	
	$username = $password = '';
	$usernameErr = $passErr = '';
	
	if(isset($_POST['submit'])){
		
		if(empty($_POST['username'])){
			$usernameErr = 'Username is required!';
		}
		else{
			$username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		if(empty($_POST['pass'])){
			$passErr = 'Rating is required!';
		}
		else{
			$password = filter_input(INPUT_POST,'pass',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		
		if(empty($usernameErr) && empty($passErr)){
			$query = "SELECT * FROM clients WHERE username = '$username'";
			$validUsername = $con->query($query);
			if($validUsername->num_rows > 0){
				$user = $validUsername->fetch_assoc();
				if($user['password'] === $password){
					echo '<script type="text/javascript">'; 
					echo 'window.alert("Successfully logged in!")';
					echo '</script>'; 
				}
				else{
					echo '<script type="text/javascript">'; 
					echo 'window.alert("Wrong Password! Please, try again.")';
					echo '</script>'; 
				}
			}
			else{
				echo '<script type="text/javascript">'; 
				echo 'window.alert("Username not found!")';
				echo '</script>'; 
			}
		}
	}



?>

<main id="login-main">

	<span id="login-title-span">
		<img class="index-pets-icon" src="images/LoginIcon.png">
		<h5 id="emp-h5">Log In</h5>
	</span>
	
	<div>
		<form id="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<div class="login-details">
				<h6>Username*:</h6>
				<input type="text" placeholder="Username" name="username">
			</div>
			<div class="login-details">
				<h6>Password*:</h6>
				<input type="password" placeholder="Password" name="pass">
			</div>
			<div class="login-details">
				<input id="btn-login" type="submit" name="submit" value="Login">
			</div>
		</form>
	</div>


</main>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>