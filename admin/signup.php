<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f9f9f9;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}

		form {
			background-color: #fff;
			padding: 20px;
			margin-bottom: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.2);
			font-size: 1.2em;
			line-height: 1.5em;
			color: #333;
			text-align: center;
			word-wrap: break-word;
			overflow-wrap: break-word;
			hyphens: auto;
		}

		h1 {
			font-size: 2.5em;
			text-align: center;
			margin-top: 50px;
		}

		input[type="text"], input[type="password"] {
			padding: 10px;
			font-size: 1.2em;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			width: 100%;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 1.2em;
			cursor: pointer;
			margin-bottom: 20px;
			width: 100%;
			box-sizing: border-box;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Signup</h1>
		<form action="signup_process.php" method="post">
			<label for="username">Username:</label><br>
			<input type="text" id="username" name="username" required><br>
			<label for="password">Password:</label><br>
			<input type="password" id="password" name="password" required><br>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>
