<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD FOR ALL</title>
    <style>
        body {
            background-image: url(./image_back.jpeg);
            background-size: cover;
            background-position: center;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        header {
            text-align: center;
            padding: 30px;
            background-color: #007bff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            font-size: 2.5em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        nav {
            text-align: center;
            background-color: #007bff;
            padding: 20px;
            border-bottom: 2px solid #0056b3;
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
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .square {
            width: 400px; /* Increased container width */
            height: 250px; /* Increased container height */
            background-color: #f8f9fa;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #333;
            transition: background-color 0.3s ease, transform 0.3s ease;
            position: relative;
            border: 2px solid #007bff;
            overflow: hidden; /* Prevent logo overflow */
        }

        .square:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }

        .symbol {
            font-size: 48px; /* Increased symbol size */
            position: absolute;
            bottom: 10px; /* Adjusted symbol position to bottom */
            left: 50%;
            transform: translateX(-50%);
            z-index: 1; /* Ensure symbols appear above content */
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
        }

        form {
            width: 300px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
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
    <header>FOOD FOR ALL</header>
    <nav>
        <button onclick="showImage(0)"><a href="./index.php">Home</a></button>
        <button onclick="showImage(3)"><a href="#">Login</a></button>
    </nav>
    <center><form action="#" method="post">
        <fieldset>
            <legend>LOGIN IN FORM:</legend>
            <label for="email"><b>ENTER EMAIL:</b></label><br>
            <input type="email" placeholder="Enter The email:" name="email" id="email"><br>
            <label for="password"><b>ENTER PASSWORD</b></label><br>
            <input type="password" placeholder="Enter password" name="password" id="password"><br>
            <button type="submit" name="submit">Submit</button>
        </fieldset>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        // Check login info in the "user" table
        $stmt = mysqli_prepare($db, "SELECT * FROM `user` WHERE email=? AND password=?");
        mysqli_stmt_bind_param($stmt, "ss", $_POST['email'], $_POST['password']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_num_rows($result);
        
        // If not found in the "user" table, check in the "hotel" table
        if($count == 0)
        {
            $stmt = mysqli_prepare($db, "SELECT * FROM `hotel` WHERE email=? AND password=?");
            mysqli_stmt_bind_param($stmt, "ss", $_POST['email'], $_POST['password']);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $count = mysqli_num_rows($result);
            
            if($count == 0)
            {
                echo '<script>alert("The email and password do not match.");</script>';
            }
            else
            {
                echo '<script>alert("Login successful."); window.location="index.php";</script>';
            }
        }
        else
        {
            echo '<script>alert("Login successful."); window.location="index.php";</script>';
        }
    }
    ?>
</body>
</html>
