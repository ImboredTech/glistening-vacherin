<?php
session_start();
require './config.php';
if(isset($_POST['username']) && isset($_POST['password'])){
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