<?php
include "connection.php"; // Include your database connection file

// Fetch available food data from the database
$query = "SELECT * FROM food";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Food</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./image_back.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        nav {
            background-color: rgba(135, 206, 235, 0.8);
            padding: 15px;
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
            max-width: 1000px; /* Increased container width */
            margin: 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .food-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .food-card {
            flex: 1 1 300px; /* Each card has a minimum width of 300px */
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .food-card h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: #007bff;
        }

        .food-card p {
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <nav>
        <button onclick="navigateTo('index.php')"><a href="./index.php">HOME</a></button>
        <button onclick="navigateTo('initiative_5.php')"><a href="./initiative_5.php">FOOD</a></button>
    </nav>

    <div class="container">
        <h2>Available Food</h2>

        <div class="food-container">
            <?php
            // Check if there are any available food items
            if (mysqli_num_rows($result) > 0) {
                // Loop through each available food item and display it
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="food-card">
                        <h3>' . $row['food_name'] . '</h3>
                        <p><strong>Quantity:</strong> ' . $row['quantity'] . ' kg</p>
                        <p><strong>Contact:</strong> ' . $row['contact'] . '</p>
                        <p><strong>Expiry Date:</strong> ' . $row['expiry'] . '</p>
                    </div>';
                }
            } else {
                // If there are no available food items
                echo '<p>No available food items.</p>';
            }
            ?>
        </div>
    </div>

    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>

<?php
// Close database connection
mysqli_close($db);
?>
