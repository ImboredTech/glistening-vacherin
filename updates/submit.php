<!DOCTYPE html>
<html>
<head>
	<title>Submit Dev Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<header>
		<h1>Submit Dev Update</h1>
	</header>
	<main>
		<h2>Submit Dev Update</h2>
		<form action="submit-post.php" method="post">
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" required>
			<label for="content">Content:</label>
			<textarea name="content" id="content" required></textarea>
			<input type="submit" value="Submit">
		</form>
	</main>
	<footer>
		<p>&copy; 2023 Johnny Franklin</p>
	</footer>
</body>
</html>