<?php
    require '../admin/config.php';

    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    
    if($conn->query($sql) === TRUE){
        echo "New Dev Update posted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>