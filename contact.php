<?php include 'includes/header.php'; 
	
	$name = $email = $message = '';
	$nameErr = $emailErr = $messageErr = '';
	
	if(isset($_POST['submit'])){
		
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
		if(empty($_POST['message'])){
			$messageErr = 'Email is required!';
		}
		else{
			$message = filter_input(INPUT_POST,'message',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		}
		
		if(empty($nameErr) && empty($emailErr) && empty($messageErr)){
			$query = "INSERT INTO enquiries (name, email, message) VALUES ('$name', '$email', '$message')";
			if(mysqli_query($con, $query)){
				echo '<script type="text/javascript">'; 
				echo 'window.alert("Thank your for contacting us! We will answer as soon as possible.")';
				echo '</script>'; 
			}
			else{
				echo "You must fill the details to send a message!";
			}
		}
	}




?>

<main id="contact-main">

	<span id="contact-span">
			<img class="index-pets-icon" src="images/contactDog.png">
			<h5 id="emp-h5">Get In Touch</h5>
	</span>

	<div id="contact-info">		
		<div id="form-frame">
			<form id="contact-form" method="POST" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div id="contact-init" class="form-details">
					<h6>Name:</h6>
					<input name="name" type="text" placeholder="Name">
				</div>
				<div class="form-details">
					<h6>Email:</h6>
					<input name="email" type="email" placeholder="Email">
				</div>
				<div class="form-details">
					<h6>Message:</h6>
					<textarea name="message" rows="3" style="width:75%;" type="text" placeholder="Message"></textarea>
				</div>
				<div class="form-details">
					<input id="btn-submit-message" type="submit" name="submit" value="Enquire">
				</div>			
			</form>
		</div>	
				
		<div id="location-box">
			<div class="location-details">
				<span class="details-span"><i class="fa-solid fa-location-dot fa-2x"></i><label class="contact-labels">13/14 Aungier Street - Dublin</label></span>
			</div>
			<div class="location-details">
				<span class="details-span"><i class="fa-solid fa-phone fa-2x"></i><label class="contact-labels">(01) 683 5555</label></span>
			</div>
			<div class="location-details">
				<span class="details-span"><i class="fa-solid fa-envelope fa-2x"></i><label class="contact-labels">contact@pawsandclaws.ie</label></span>
			</div>
		</div>
	</div>
	
	<div id="location-frame"> 
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2364.13587786496!2d-6.692825324406115!3d53.662378551031516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48675b3174ce4877%3A0xec2a283699d4765!2sPaws&#39;n&#39;Claws!5e0!3m2!1sen!2sie!4v1701887198363!5m2!1sen!2sie" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	
</main>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>