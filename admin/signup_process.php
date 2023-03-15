<?php
	// Connect to the database
	require './config.php';

	// Get the user's input from the form
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//
    // Insert the user's information into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
    // Redirect the user to the home page
    header("Location: login.php");
    exit();
    } else {
        // Display an error message if the insertion failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    // Close the database connection
    mysqli_close($conn);
?>