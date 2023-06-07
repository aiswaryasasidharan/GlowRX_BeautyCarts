<html>

<head>
	<style>
		body {
			background-color:#D4EFDF;
			font-family: Arial, sans-serif;
		}
		
		h1 {
			color: #265A52;
			font-size: 2.5em;
			text-align: center;
			margin-top: 50px;
		}
		
		p {
			color: #333;
			font-size: 1.2em;
			text-align: center;
			margin-top: 20px;
		}
		
		
	</style>
</head>
<body>

<?php
//  session start
	session_start();

// Retrieve the customer name from the session variable
	if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
		$customerName = $user['name'];
	} else {
		$customerName = "Valued Customer";
	}

// Display the  msg
	echo "<h1>Thank You, $customerName!</h1>";
	echo
"<p>Your order has been delivered successfully.</p>";
	?>
	</body>
</html>
