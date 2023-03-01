<?php
	// Connect to the database
	$dbhost = 'sql8.freemysqlhosting.net';
	$dbuser = 'sql8602118';
	$dbpass = 'DLNWchzc8t';
	$dbname = 'sql8602118';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check for errors in the connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Get the announcement text from the form
	$announcement = $_POST['announcement'];

	// Insert the announcement into the database
	$sql = "INSERT INTO announcements (announcement_text) VALUES ('$announcement')";
	if (mysqli_query($conn, $sql)) {
		echo "Announcement submitted successfully";
		echo "Redirecting to main admin page in 5 seconds";
		sleep(5);
		header("Location: index.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	// Close the database connection
	mysqli_close($conn);
?>
