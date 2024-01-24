<?php 
include 'includes/header.php'; 
error_reporting(0);

	if(isset($_POST['submit'])){
		if(!isset($_SESSION['cart'])){
			echo '<script type="text/javascript">'; 
			echo 'window.alert("Your cart is empty!")';
			echo '</script>';
		}
		else{
			$query = "SELECT MAX(orderid) AS lastOrderId FROM orders";
			$result = mysqli_query($con, $query);
			$row = $result->fetch_assoc();
			$lastOrderId = $row['lastOrderId'] + 1;
			
			foreach($_SESSION['cart'] as $items){
				$product = $items['product'];
				$price = $items['price'];
				$quantity = $items['quantity'];
				
				$sql = "INSERT INTO orders (orderid, product, price, quantity) VALUES ('$lastOrderId','$product', '$price', '$quantity')";
				mysqli_query($con, $sql);
			}
			
			session_destroy();
			echo '<script type="text/javascript">'; 
			echo 'window.location.href = "index.php"';
			echo '</script>';
		}
	}
	
?>

<main id="cart-main">
		
		<span class="cart-span">
			<img id="cart-icon" src="images/newDogCart.png">
			<h5 id="cart-h5">Your Shopping Cart</h5>
		</span>
		
		<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" >
		<table id="cart-table" class="table table-striped">
			  <thead id="cart-table-header">
				<tr>
				  <th scope="col" colspan="2">Product</th>
				  <th scope="col">Price</th>
				  <th scope="col">Quantity</th>
				  <th scope="col">Total Price</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
				if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product-name']) && isset($_POST['price']) && isset($_POST['quantity'])) {
					$product_name = $_POST['product-name'];
					$product_price = $_POST['price'];
					$product_quantity = $_POST['quantity'];
					
					if(!isset($_SESSION['cart'])){
						$_SESSION['cart'] = array();
					}
					
					$item_found = false;
					foreach ($_SESSION['cart'] as $key => $item) {
						if ($item['product'] == $product_name) {
							$_SESSION['cart'][$key]['quantity'] += $product_quantity;
							$item_found = true;
							break;
						}	
					}
				
					if(!$item_found){
						$cart_item = array('product' => $product_name, 'price' => $product_price, 'quantity' => $product_quantity);
						$_SESSION['cart'][] = $cart_item;
					}
					
					
					
						
				}
				
				if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
					foreach($_SESSION['cart'] as $item){
					$product = $item['product'];
					$sql = "SELECT img_dir FROM products WHERE product = '$product'";
					$result = $con->query($sql);
					$img = $result->fetch_assoc();
					$totalPrice = $item['price'] * $item['quantity'];
					$finalPrice += $totalPrice;
					echo '<tr class="table-body">';
					echo '<td class="cart-products">' . $img['img_dir'] . '</td>';
					echo '<td class="cart-products">' . $item['product'] . '</td>';
					echo '<td class="cart-products">' . number_format($item['price'],2, '.', '') . '</td>';
					echo '<td class="cart-products">' . $item['quantity'] . '</td>';
					echo '<td class="cart-products">' . number_format($totalPrice,2, '.', '') . '</td>';
					echo '</tr>';
					}
					echo '<tr class="table-body">';
					echo '<td style="font-weight:bold;" class="cart-products"> Final Price: </td>';
					echo '<td colspan="3"></td>';
					echo '<td style="font-weight:bold;">' . number_format($finalPrice,2, '.', '') . '</td>';
					echo '</tr>';
				}
				else{
					echo '<tr class="table-body">';
					echo '<td colspan="5" style="text-align:center;"> Your Cart Is Empty </td>';
					echo '</tr>';
				}
				

				
			?>

			  </tbody>
		</table>

		
		<span id="cart-butons">
			<button type="button" id="clear-cart-btn"><a href="session_destroy.php">Clear Cart</a></button>
			<input id="btn-buy" name="submit" type="submit" value="Finish & Pay">
		</span>
	</form>


</main>
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>

<?php include 'includes/footer.php'; ?>