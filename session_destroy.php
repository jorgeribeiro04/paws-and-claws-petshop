<?php 
include 'includes/header.php';
error_reporting(0);
session_destroy();
echo '<script type="text/javascript">'; 
echo 'window.location.href="cart.php"';
echo '</script>'; 
?>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>