<?php include'config/connect.php';

if(isset($_GET['limit']) && isset($_GET['offset'])){
	$limit = $_GET['limit'];
	$offset = $_GET['offset'];
	
	$query = "SELECT * FROM products LIMIT $limit OFFSET $offset";
	$result = $con->query($query);
	$index = 0;
	while($row = $result->fetch_assoc()){
		echo '<form id="products-form-' . $index . '" class="products-form" action="cart.php" method="POST">';
		echo '<input type="hidden" name="product-name" value="' . $row['product'] . '">';
		echo '<input type="hidden" name="price" value="' . $row['price'] . '">';
		echo '<input type="hidden" name="quantity" value="1">';
		echo'<div class="product-card">';
		echo'<div class="product-img">';
		echo $row['img_dir'];
		echo'<div class="product-body">';
		echo'<h5 class="card-title">' . $row['product'] . '</h5>';
		echo'<p>€' .  number_format((double)$row['price'],2, '.', '') .'</p>';
		echo'</div>';
		echo '<div class="products-buttons">';
		echo '<span>
			  <img class="button-Minus" src="images/pawMinus.png" onClick="changeQuantity(2, \'' . htmlspecialchars($row['product']) . '\');">
			  <input readonly="true" id="' . htmlspecialchars($row['product']) . '" type="number" value="1" min="1" max="20" step="1" name="quantity"/>
			  <img class="button-Plus" src="images/pawPlus.png" onClick="changeQuantity(1, \'' . htmlspecialchars($row['product']) . '\');"></span>';
		echo '</div>';
		echo'<input class="prod-cart-button" type="submit" value="Add To Cart">';
		echo'</div>';	
		echo'</div>';
		echo '</form>';
		$index++;
	}
}





?>