<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Caveat&family=Poppins:wght@300&display=swap');
            body {
                background-color: #f1f1f1;
                font-family: poppins, sans-serif;
            }
            h2 {
                color: #333;
                text-align: center;
            }
            form {
                border: 2px solid #ccc;
                background-color: #fff;
                margin: 0 auto;
                width: 350px;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #999;
            }
            input[type=text], input[type=password]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 100%
            }
            button:hover{
                background-color: #45A049;
            }
        </style>
    <head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="login_process.php">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username here">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password here">
        <button type="submit">Login</button>
    </form>
</body>
</html>