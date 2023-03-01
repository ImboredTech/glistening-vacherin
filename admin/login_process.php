<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $host = "sql8.freemysqlhosting.net";
    $username = "sql8602118";
    $password = "DLNWchzc8t";
    $database = "sql8602118";

    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;

        header('Location: index.php');
        exit;
    } else {
        echo "Invalid username or password.";
    }
}

?>