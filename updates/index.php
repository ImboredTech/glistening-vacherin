<!DOCTYPE HTML>
<html>
    <head>
        <title> Dev Updates </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <header>
        <h1>Dev Updates</h1>
    </header>
    <main>
        <?php
        require '../admin/config.php';
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<article>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["content"] . "</p>";
                echo "</article>";
            }
        } else {
            echo "No dev updates yet.";
        }

        $conn->close();
        ?>
    </main>
    <footer>
        <p>&copy; 2023 Johnny Franklin</p>
    </footer>
</body>
</html>