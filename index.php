<?php include 'includes/header.php'; 
error_reporting(0);
session_start();
?>

	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<span><img id="new-products-gif" src="images/giphy.gif"></span>
			<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="index-slider-products div-one">
					<img src="images/CodLiverOil.png" class="card-img-top" alt="...">
					<p class="new-products-p">Cod Liver Oil Capsules</p>
					<p class="new-products-p">€24.50</p>
				</div>
				<div class="index-slider-products div-one">
					<img src="images/EarCleaner.png" class="card-img-top" alt="...">
					<p class="new-products-p">Ear Cleaner</p>
					<p class="new-products-p">€14.50</p>
				</div>
				<div class="index-slider-products div-one">
					<img src="images/TravelEze.png" class="card-img-top" alt="...">
					<p class="new-products-p travel-eze">Travel-Eze Tablets</p>
					<p class="new-products-p travel-eze">€24.50</p>
				</div>
			</div>
			<div class="carousel-item">
				<div class="index-slider-products div-two">
					<img src="images/RoyalCanin.png" class="card-img-top" alt="...">
					<p id="login-name" class="new-products-p">Royal Canin Puppy</p>
					<p class="new-products-p">€34.50</p>
				</div>
				<div class="index-slider-products div-two">
					<img src="images/Pedigree.png" class="card-img-top" alt="...">
					<p class="new-products-p">Pedigree Adult</p>
					<p class="new-products-p">€44.50</p>
				</div>
				<div class="index-slider-products div-two">
					<img src="images/Elite.jpg" class="card-img-top" alt="...">
					<p class="new-products-p">Elite Senior</p>
					<p class="new-products-p">€24.50</p>
				</div>
			</div>
			<div class="carousel-item">
				<div class="index-slider-products div-three">
					<img src="images/Whiskas.png" class="card-img-top" alt="...">
					<p class="new-products-p">Whiskas Ocean Fish Flavour</p>
					<p class="new-products-p">€24.50</p>
				</div>
				<div class="index-slider-products div-three">
					<img src="images/RoyalCaninCat.png" class="card-img-top" alt="...">
					<p class="new-products-p">Royal Canin Feline Nutrition</p>
					<p class="new-products-p">€34.50</p>
				</div>
				<div class="index-slider-products div-three">
					<img src="images/Gain.png" class="card-img-top" alt="...">
					<p class="new-products-p">Gain MeatyCat</p>
					<p class="new-products-p">€14.50</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

<main id="index-main">			
	<section id="dog-index-products">
		<div class="treats-toys">
			<div class="paw-icon">
				<img class="index-pets-icon" src="images/dogIcon.jpg">
			</div>
			<span class="treats-toys-header">
				<h5 class="treats-toys-h5">Dog Treats & Toys Offers</h5>
			</span>
		</div>
		
		<div class="cards">
			<div class="card">
				<img src="images/oatieBites.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Burns Oatie Bites">
						<input type="hidden" name="price" value="3.99">
						<h5 class="card-title">Burns Oatie Bites</h5>
						<span class="prices"><p class="old-price">€4.50</p><p class="new-price" name="price">€3.99</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick="changeQuantity(2,'oatie-Bites');"><input readonly="true" id="oatie-Bites" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick="changeQuantity(1, 'oatie-Bites');"></span>
						<input class="index-cart-button" type="submit" value="Add To Cart">
					</form>
				</div>
			</div>
			<div class="card">
				<img src="images/bertyBoiled.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Berty Boiled Sweet">
						<input type="hidden" name="price" value="6.00">
						<h5 class="card-title">Berty Boiled Sweet</h5>
						<span class="prices"><p class="old-price">€7.00</p><p class="new-price">€6.00</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2, "berty-Boiled");'><input readonly="true" id="berty-Boiled" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1, "berty-Boiled");'></span>
						<input class="index-cart-button" type="submit" value="Add To Cart">
					</form>
				</div>
			</div>
			<div class="card">
				<img src="images/milkBone.png" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Milk-Bone Original">
						<input type="hidden" name="price" value="63.00">
						<h5 class="card-title">Milk-Bone Original</h5>
						<span class="prices"><p class="old-price">€70.00</p><p class="new-price">€63.00</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2, "milk-bone");'><input readonly="true" id="milk-bone" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1,"milk-bone")'></span>
						<input class="index-cart-button" type="submit" Value="Add To Cart">
					</form>
				</div>
			</div>
			<div class="card">
				<img src="images/airKongBone.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Air Kong Squeaker Bone">
						<input type="hidden" name="price" value="9.00">
						<h5 class="card-title">Air Kong Squeaker Bone</h5>
						<span class="prices"><p class="old-price">€10.00</p><p class="new-price">€9.00</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2,"squeaker-bone")'><input readonly="true" id="squeaker-bone" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1, "squeaker-bone")'></span>
						<input class="index-cart-button" type="submit" value="Add To Cart">
					</form>
				</div>
			</div>
		</div>	
	</section>
	
	<section id="cat-index-products">
		<div class="treats-toys">
			<div class="paw-icon">
				<img class="index-pets-icon" src="images/CatIcon.jpg">
			</div>
			<span class="treats-toys-header">
				<h5 class="treats-toys-h5">Cat Bowls & Litter Offers</h5>
			</span>
		</div>
		
		<div class="cards">
			<div class="card">
				<img src="images/CatBowl.png" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Ceramic Cat Bowl">
						<input type="hidden" name="price" value="15.00">
						<h5 class="card-title">Ceramic Cat Bowl</h5>
						<span class="prices"><p class="old-price">€20.50</p><p class="new-price">€15.00</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick="changeQuantity(2,'ceramic-bowl');"><input readonly="true" id="ceramic-bowl" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick="changeQuantity(1, 'ceramic-bowl');"></span>
						<input class="index-cart-button" type="submit" value="Add To Cart">
					</form>
				</div>
			</div>
			<div class="card">
				<img src="images/CatLitter.png" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Breeder Celect Cat Litter">
						<input type="hidden" name="price" value="15.00">
						<h5 class="card-title">Celect Cat Litter</h5>
						<span class="prices"><p class="old-price">€17.00</p><p class="new-price">€15.00</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2, "celect-litter");'><input readonly="true" id="celect-litter" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1, "celect-litter");'></span>
						<input class="index-cart-button" type="submit" value="Add To Cart">
					</form>
				</div>
			</div>
			<div class="card">
				<img src="images/SteelCatBowl.png" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Stainless Steel Cat Bowl">
						<input type="hidden" name="price" value="5.00">
						<h5 class="card-title">Stainless Steel Cat Bowl</h5>
						<span class="prices"><p class="old-price">€6.89</p><p class="new-price">€5.00</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2, "steel-bowl");'><input readonly="true" id="steel-bowl" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1,"steel-bowl")'></span>
						<input class="index-cart-button" type="submit" value="Add To Cart">
					</form>
				</div>
			</div>
			<div class="card">
				<img src="images/CatLitterTray.png" class="card-img-top" alt="...">
				<div class="card-body">
					<form action="cart.php" method="POST">
						<input type="hidden" name="product-name" value="Furba Hooded Litter Tray">
						<input type="hidden" name="price" value="40.00">
						<h5 class="card-title">Furba Hooded Litter Tray</h5>
						<span class="prices"><p class="old-price">€44.00</p><p class="new-price">€40.00</p></span>
						<span><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2,"litter-tray")'><input readonly="true" id="litter-tray" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1, "litter-tray")'></span>
						<input class="index-cart-button" type="submit" value="Add To Cart">
					</form>
				</div>
			</div>
		</div>	
	</section>
	
	<section id="shop-the-look">
		<div class="treats-toys">
			<div class="paw-icon">
				<img id="shop-look-icon" src="images/shopLook.jpg">
			</div>
			<span class="treats-toys-header">
				<h5 class="treats-toys-h5">Shop The Look</h5>
			</span>
		</div>
		
		<div class="look-products">
			<div class="index-gallery"><img class="index-product-gallery" src="images/DogCamera.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/DogCamera.webp", "Furbo 360 Camera", "145.00");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/DogRaincoat.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/DogRaincoat.webp", "Speedo Dog Raincoat", "55.00");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/TravelCarrier.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/TravelCarrier.webp", "Travel Carrier", "125.00");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/FoldableStairs.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/FoldableStairs.webp", "Foldable Stairs", "41.00");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/RectangularBolster.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/RectangularBolster.webp", "Frisco Rectangular Bed", "27.50");'></div>
		</div>
		
		<div class="look-products second-row">
			<div class="index-gallery"><img class="index-product-gallery" src="images/PineappleBed.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/PineappleBed.webp", "Pineapple Bed", "36.90");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/SnakeToy.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/SnakeToy.webp", "Snake Cat Toy", "14.95");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/ScratcherBall.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/ScratcherBall.webp", "AGYM Cat Scratcher", "39.90");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/CatPerch.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/CatPerch.webp", "Vista Cat Perch", "199.00");'></div>
			<div class="index-gallery"><img class="index-product-gallery" src="images/CatTree.webp" data-bs-toggle="modal" data-bs-target="#productsModal" onClick='modalInfo("images/CatTree.webp", "Tristin Cat Tree", "45.50");'></div>
		</div>
		<div class="clear"></div>
	</section>
</main>

<!-- Modal -->
<div class="modal fade" id="productsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	  <div class="modal-main">
		<button id="btn-close-modal" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		<div class="modal-inside">
			<div><img id="main-image"></div>
		</div>
		<div class="modal-description">
		<form id="modal-form" action="cart.php" method="POST">
			<div id="modal-title">
				<input class="modal-input h5" name="product-name" id="modalh5">
			</div>
			<div id="modal-card">
				<span class="modal-details"><p id="modal-price-tag">Price:</p><input class="modal-input price" id="modalPrice" type="text" name="price"></span>
				<span id="modal-quantity"><img class="button-Minus" src="images/pawMinus.png" onClick='changeQuantity(2,"modal-input")'><input readonly="true" id="modal-input" type="number" value="1" min="1" max="20" step="1" name="quantity"/><img class="button-Plus" src="images/pawPlus.png" onClick='changeQuantity(1, "modal-input")'></span>
			</div>
			<input id="modal-btn" type="submit" value="Add To Cart">
		</form>
		</div>
	  </div>
    </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>
<?php include 'includes/footer.php'; ?>