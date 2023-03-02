<?php
	require './config.php';

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
