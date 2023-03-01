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
	<title>Announcement Form</title>3
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Caveat&family=Poppins:wght@300&display=swap');
		body {
			background-color: #f7f7f7;
			font-family: poppins, sans-serif;
		}
		h1 {
			color: #333;
			text-align: center;
			margin-top: 50px;
		}
		form {
			background-color: #fff;
			margin: 0 auto;
			width: 50%;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #999;
		}
		label {
			display: block;
			margin-bottom: 10px;
			color: #333;
		}
		input[type=text]{
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 4px;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		input[type=submit]{
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<h1>Announcement Form</h1>
	<form action="process.php" method="post">
		<label for="announcement">Enter your announcement:</label>
		<input type="text" id="announcement" name="announcement" required>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
