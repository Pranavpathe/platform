<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Sign Up</title>
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

        .container {
            margin-top: 80px; /* Adjusted margin to create space between navigation and form */
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
    <button onclick="navigateTo('initiative_2.php')"><a href="./initiative_2.php">SIGN UP</a></button>
</nav>

<div class="container">
    <form id="signUpForm" action="#" method="post">
        <fieldset>
            <legend>SIGN IN FORM</legend>
            <label for="user_id"><b>User ID:</b></label>
            <input type="text" id="user_id" name="user_id" required>

            <label for="name"><b>Username:</b></label>
            <input type="text" id="name" name="name" required>

            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email" required>

            <label for="password"><b>Password:</b></label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword"><b>Confirm Password:</b></label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <input type="submit" name="submit" value="Sign Up">
        </fieldset>
    </form>
</div>

<?php
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($db, "INSERT INTO `user` (user_id, name, email, password) VALUES ('$user_id', '$name', '$email', '$password')");
}
?>

<script>
    function navigateTo(page) {
        window.location.href = page;
    }
</script>
</body>
</html>
