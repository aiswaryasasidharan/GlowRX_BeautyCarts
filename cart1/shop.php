<?php
session_start();
// Start session
// Check the add to cart 
if (isset($_POST["add_to_cart"])) {
    
    // Get the product id 
    $product_id = $_POST["product_id"];
    
    // Get the product quantity 
    $product_quantity = $_POST["product_quantity"];
  
// Initialize the cart session/ does not exist
    if (!isset($_SESSION["cart"]))  {
        $_SESSION["cart"] = [];
        header("location:cart.php");
    }
  
 // Add the product and quantity to the cart
    $_SESSION["cart"][$product_id] = $product_quantity;
    header("location:cart.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Luxurious Gleaming Beauty</title>
		<link rel="stylesheet"href="shop.css">
	</head>
	<body>
		<header>
			<img src="imgs/x.jpg" class="img">
			<h4>GlowRx</h4>
			<h1>Luxurious Gleaming Beauty</h1>
		</header>
		<nav >
			
				<a href="shop.php"style="padding-left:18%" class="s">Home</a>
				<a href="shop.php"style="padding-left: 25%"class="s">Shop</a>
				<a href="cart.php"style="padding-left: 32%"class="s">Cart</a>
				<ul>
				<li><a href="logout.php" style="padding-left:290% " >Logout</a></li><ul>

			
		</nav>
		<main>
			<section>
				<h2>PRODUCTS</h2><br>
				<ul>
					<li>
						<h3>Eyeliner</h3>
						<img src="imgs/img2.jpg"width="190px"alt="Product 2">
						<p>Lakme Eyeconic Liquid(Black)</p>
						<p>	<span>$120</span> </p>

						<form method="post" action="shop.php">
							<input type="hidden"name="product_id"value="2">
							<label for="product2_quantity">	Quantity:</label>
							<input type="number"id="product2_quantity"name="product_quantity"
								value=""min="0"	max="10"><br><br>
							<button type="submit"name="add_to_cart">Add to Cart
						</button>
						</form>
					</li>
					
					<li>
						<h3> Lipstick</h3>
						<img src="imgs/lip.jpg"  alt="Product 1">
						<p>Maybelline lnk liquid(Red,5ml)</p>
						<p><span>$175</span></p>
						<form method="post" action="shop.php">
							<input type="hidden"name="product_id"value="1">
							<label for="product1_quantity">Quantity:</label>
							<input type="number"id="product1_quantity"name="product_quantity"
							value=""min="0"	max="10"><br><br>
							<button type="submit"name="add_to_cart">Add to Cart</button>
						</form>
					</li>

					<li>
						<h3>Nail Polish</h3>
						<img src="imgs/nail.jpg" width="190px" 	alt="Product 4">
						<p>Miniso ColorBox Nail Polish(35metal purple) </p>
						<p>	<span>$75</span> </p>

						<form method="post" action="shop.php">
							<input type="hidden"name="product_id"value="4">
							<label for="product4_quantity">	Quantity:</label>
							<input type="number"
								id="product4_quantity"name="product_quantity"
								value=""min="0"	max="10"><br><br>
							<button type="submit"
									name="add_to_cart">	Add to Cart
							</button>
						</form>
					</li>

					<li>
						<h3>Compact</h3>
						<img src="imgs/img3.jpg"	alt="Product 3">
						<p>Lakme Rose Face Powder(pink,40g)</p>
						<p>	<span>$150</span></p>

						<form method="post" action="shop.php">
							<input type="hidden"name="product_id"value="3">
							<label for="product3_quantity">	Quantity:</label>
							<input type="number"
								id="product3_quantity"name="product_quantity"
								value=""min="0"	max="10"><br><br>
							<button type="submit"
									name="add_to_cart">	Add to Cart
							</button>
						</form>
					</li>

					<li>
						<h3>Face Serum</h3>
						<img src="imgs/oil.jpg"	alt="Product 6">
						<p>Lakme Youth Infinity Serum (30ml) </p>
						<p>	<span>$799</span> </p>

						<form method="post" action="shop.php">
							<input type="hidden"name="product_id"value="6">
							<label for="product6_quantity">	Quantity:</label>
							<input type="number"
								id="product6_quantity"name="product_quantity"
								value=""min="0"	max="10"><br><br>
							<button type="submit"
									name="add_to_cart">	Add to Cart
							</button>
						</form>
					</li>

					<li>
						<h3>Face Cream</h3>
						<img src="imgs/face.jpg"	alt="Product 5">
						<p>Beardo ultraglow face cream </p>
						<p>	<span>$425</span> </p>

						<form method="post" action="shop.php">
							<input type="hidden"name="product_id"value="5">
							<label for="product5_quantity">	Quantity:</label>
							<input type="number"
								id="product5_quantity"name="product_quantity"
								value=""min="0"	max="10"><br><br>
							<button type="submit"
									name="add_to_cart">	Add to Cart
							</button>
						</form>
					</li>
				</ul>
			</section>
		</main>
		<footer>
			<p> Luxurious&copy; 2023 Gleaming Beauty products&cosmetics </p>
		</footer>
		<script src="shop.php"></script>
	</body>
</html>
