
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<style>
	body {
		background-color: #BED8C0 ;
	}
	header, nav, main, footer {
		text-align: center;
		font-size: 20px;
		font-family: serif;

	}
	nav{
		padding-left: 80%;
		text-align: left;
	}
	li{
		position: absolute;
		left: 100px;

		}
ul{
	list-style-type: none;
	

}
	table {
		border-collapse:collapse;
		width: 100%;
	}
	th, td {
		text-align: left;
		padding: 12px;
	}
	th {
		background-color:  #78A07B  ;
	}
	tr:nth-child(even) {
		background-color:  #D5F5E3 ;
	}
	.button{
		font-size: 20px;
		color: #475848;
			}
	footer {
		background-color:  #475848; 
		margin-top: 300px;
		color: white;
		max-width: 569%;
		height: 50px;
		padding-top: 7px;
	}
	
</style>

<body>
	<header>
		<h1><?php session_start();$user = $_SESSION['user'];
            echo $user['name'];?> welcome ! Luxurious Gleaming Beauty</h1>
	</header><br>
	<nav>
		<ul>
			<li>
				<a href="shop.php"style="text-decoration: none; color: darkblue; padding-left: 0px;">Home</a>
			</li>
			<li>
				<a href="shop.php"style="padding-left:300px;text-decoration: none; color:darkblue;padding-left: 90px;">Products</a>
			</li>
			<li>
				<a href="Luxurious Gleaming Beauty:Nikki.2023@outcartS.com"style="padding-left:190px;text-decoration: none; color:darkblue; ">ContactUs</a>
			</li>
			<li>
				<a href="cart.php"style="padding-left:310px;text-decoration: none; color: darkblue;">Cart</a>
			</li>
		</ul>
	</nav><br><br>

	<main>
		<section>
			<table>
				<tr>
					<th>Product Name </th>
					<th>Quantity </th>
					<th>Price </th>
					<th>Total </th>
				</tr>
    <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cartshop";
  
                // Create connection
                $conn = 
                    new mysqli($servername, $username, $password, $dbname);
  
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
  
                $total = 0;
  
                //  items in cart and display in table


                foreach ($_SESSION['cart'] as $product_id => $quantity) {
                    $sql = "SELECT * FROM products WHERE id = $product_id";
                    $result = $conn->query($sql);
  
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $name = $row['name'];
                        $price = $row['price'];
                        $item_total = $quantity * $price;
                        $total += $item_total;
  
                        echo "<tr>";
                        echo "<td>$name</td>";
                        echo "<td>$quantity</td>";
                        echo "<td>$price $</td>";
                        echo "<td>$item_total $</td>";
                        echo "</tr>";
                    }
                }
                // Display total
                echo "<tr>";
                echo "<td colspan='3'>Total:</td>";
                echo "<td>$total $</td>";
                echo "</tr>";
    ?>            
				
		    </table><br><br>
			<form action="checkout.php" method="post">
				<input type="submit"value="Checkout"class="button" />
			</form>
		</section>
	</main>

	<footer>
		<p> Luxurious&copy; 2023 Gleaming Beauty products&cosmetics </p>
	</footer>
</body>

</html>
