<?php
include "connection.php"; // Include your database connection file

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Check login info in the "user" table
    $stmt = mysqli_prepare($db, "SELECT * FROM `user` WHERE email=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $count = mysqli_num_rows($result);
    
    // If not found in the "user" table, check in the "hotel" table
    if($count == 0) {
        $stmt = mysqli_prepare($db, "SELECT * FROM `hotel` WHERE email=? AND password=?");
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_num_rows($result);
        
        if($count == 0) {
            echo '<script>alert("The email and password do not match.");</script>';
        } else {
            echo '<script>alert("Login successful."); window.location="index.php";</script>';
        }
    } else {
        echo '<script>alert("Login successful."); window.location="index.php";</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-image: url(./image_back.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        nav {
            background-color: rgba(135, 206, 235, 0.8);
            padding: 7px;
            border-bottom: 2px solid #87CEEB;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            justify-content: center;
        }

        nav button {
            background: none;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            margin: 0 15px;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav button:hover {
            color: #E0FFFF;
            transform: scale(1.1);
        }

        nav button a {
            text-decoration: none;
            color: white;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        fieldset {
            border: 2px solid #007bff;
            border-radius: 8px;
            padding: 20px;
        }

        legend {
            font-size: 1.2em;
            color: #007bff;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button, input[type="reset"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: #fff;
        }

        button:hover {
            background-color: #0056b3;
        }

        input[type="reset"] {
            background-color: #ccc;
            color: #333;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <button onclick="navigateTo('index.php')"><a href="./index.php">HOME</a></button>
        <button onclick="navigateTo('initiative_1.php')"><a href="./initiative_1.php">LOGIN</a></button>
    </nav>

    <form action="#" method="post">
        <fieldset>
            <legend>LOGIN IN FORM:</legend>
            <label for="email"><b>ENTER EMAIL:</b></label><br>
            <input type="email" placeholder="Enter The email:" name="email" id="email"><br>
            <label for="password"><b>ENTER PASSWORD</b></label><br>
            <input type="password" placeholder="Enter password" name="password" id="password"><br>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
