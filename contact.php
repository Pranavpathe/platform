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
            color: white;
            overflow: auto;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: rgba(135, 206, 235, 0.8);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            font-size: 2.5em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        nav {
            text-align: center;
            background-color: rgba(135, 206, 235, 0.8);
            padding: 20px;
            border-bottom: 2px solid #87CEEB;
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
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .square {
    width: 400px;
    height: 300px;
    background-color: white;
    margin: 20px;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    text-align: center;
    color: black;
    transition: background-color 0.3s ease, transform 0.3s ease;
    position: relative;
    border: 2px solid #87CEEB; /* Changed to solid border */
}


        .square:hover {
            background-color: #87CEEB;
            transform: scale(1.05);
        }

        .symbol {
            font-size: 48px;
            position: absolute;
            bottom: 20px; /* Adjusted position to bottom */
            left: 50%;
            transform: translateX(-50%);
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        p {
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>
<body>
    <header><b>FOOD FOR ALL</b></header>
    <nav>
        <button onclick="showImage(0)"><a href="./index.php">Home</a></button>
        <button onclick="showImage(3)"><a href="./contact.php">Contact</a></button>
    </nav>
    <div class="container">
        <div class="square">
            <h2>Location:</h2>
            <p>Regd. Address: SF No. 30/3B, D.No.5/1, Saravana Thottam Road, Kannampalayam Sulur Taluk, Coimbatore - 641402.</p>
            <div class="symbol">&#127968;</div>
        </div>
        <div class="square">
            <h2>Address:</h2>
            <p>Office: Corporate Office - No 4, Kothari Layout, 1st street, Ramanathapuram, Coimbatore, Tamilnadu, 641045.</p>
            <div class="symbol">&#127971;</div>
        </div>
        <div class="square">
            <h2>Phone:</h2>
            <p>9309436147</p>
            <div class="symbol">&#9742;</div>
        </div>
        <div class="square">
            <h2>Email:</h2>
            <p>pranavpathe1404@gmail.com</p>
            <div class="symbol">&#9993;</div>
        </div>
    </div>

    <script>
        // Placeholder function for showImage
        function showImage(index) {
            console.log("Show image: " + index);
        }
    </script>
</body>
</html>
