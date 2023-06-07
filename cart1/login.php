<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Connect to the db
	$host = "localhost";
	$dbname = "cartshop";
	$username_db = "root";
	$password_db = "";

	try {
		$db = new PDO(
			"mysql:host=$host;dbname=$dbname",
			$username_db,
			$password_db
		);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Check if the user exists in the db
		$stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
		$stmt->bindParam(":username", $username);
		$stmt->execute();
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($user) {
			// Verify the pwd
			if (password_verify($password, $user["password"])) {
				session_start();
				$_SESSION["user"] = $user;

				echo '<script type="text/javascript">
	window.onload = function () {
		alert("Welcome to Luxurious Gleaming Beauty");
		window.location.href = "shop.php";
	};
</script>
';
			} else {
				echo "<h2>login Failed</h2>";
				echo "invalid email or password.";
			}
		} else {
			echo "<h2>login Failed</h2>";
			echo "User doesn't exist";
		}
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
}
?>
