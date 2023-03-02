<?php
session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
	header("Location: login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<style>
		body {
			background-color: #f7f7f7;
			font-family: Arial, sans-serif;
		}
		h1 {
			color: #333;
			text-align: center;
			margin-top: 50px;
		}
		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		.button {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-bottom: 20px;
		}
		.button:hover {
			background-color: #45a049;
		}
		.logout {
			background-color: #f44336;
		}
		.logout:hover {
			background-color: #da190b;
		}
	</style>
</head>
<body>
	<h1>Welcome to the landing page!</h1>
	<div class="container">
		<a href="announcements.php" class="button">Announcements</a>
		<a href="logout.php" class="button logout">Log out</a>
	</div>
</body>
</html>
