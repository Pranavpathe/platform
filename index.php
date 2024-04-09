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
            color: #333; /* Darkened text color for better readability */
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
            max-width: 100%;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin-top: 0;
        }

        .image-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 60vh;
            align-items: center;
        }

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.5s ease;
            margin: 10px;
        }

        .image:hover {
            transform: scale(1.1);
        }

        .arrow {
            position: absolute;
            top: 50%;
            font-size: 24px;
            color: white;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px;
            border: none;
            outline: none;
            transition: background 0.3s ease;
        }

        .arrow:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* Dropdown Styles */
        .dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: rgba(135, 206, 235, 0.8);
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #87CEEB;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Adjusted styles for the volunteer button */
        nav button#volunteer-btn {
            background: none;
            border: none;
            cursor: pointer;
            transition: color 0.3s ease, transform 0.3s ease;
            position: relative;
        }

        nav button#volunteer-btn:hover {
            color: #E0FFFF;
            transform: scale(1.1);
        }

        nav button#volunteer-btn a {
            text-decoration: none;
            color: white;
            display: block;
            padding: 18px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
            position: relative;
        }

        .square {
            width: 250px;
            height: 250px;
            background-color: rgba(135, 206, 235, 0.8);
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            color: black;
            transition: background-color 0.3s ease, transform 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-end; /* Align content to the bottom */
        }

        .square:hover {
            background-color: #87CEEB;
            transform: scale(1.05);
        }

        .symbol {
            font-size: 48px;
            margin-bottom: 20px; /* Spacing between symbol and text */
        }

        h2, p {
            margin: 0;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header><b>FOOD FOR ALL</b></header>
    <nav>
        <button onclick="showImage(0)"><a href="#">Home</a></button>
        <button onclick="showImage(1)"><a href="about.php">About</a></button>

        <!-- Volunteer Menu with Dropdown -->
        <div class="dropdown">
            <button id="volunteer-btn"><a href="#">Sign in/up</a></button>
            <div class="dropdown-content">
                <a href="./initiative_2.php">Sign Up For Volunteer</a>
                <a href="./initiative_4.php">Sign Up For Hotel</a>
                <a href="./initiative_1.php">Login</a>
                <a href="./initiative_3.php">Food Donation</a>
                <a href="./initiative_5.php">Available Food</a>
            </div>
        </div>

        <button onclick="showImage(3)"><a href="contact.php">Contact</a></button>
        <button onclick="showImage(4)"><a href="faq.php">FAQ</a></button>
    </nav>
    <div class="container">
        <div class="image-slider">
            <img src="./img1.jpg" alt="" class="image">
            <img src="./img2.png" alt="" class="image">
        </div>
        <button class="arrow prev" onclick="prevSlide()">❮</button>
        <button class="arrow next" onclick="nextSlide()">❯</button>
    </div>
    <div class="container">
        <div class="square">
            <h2>Get in touch:</h2>
            <p>Donors with surplus food/resources can reach us at +91 9087790877</p>
            <div class="symbol">🏠</div>
        </div>
        <div class="square">
            <h2>Quality check:</h2>
            <p>Excess Food will be checked based on our Food Safety and Standard Guidelines</p>
            <div class="symbol">🏣</div>
        </div>
        <div class="square">
            <h2>Locate:</h2>
            <p>We spot the nearest “Hunger Spot” which is the most underserved areas</p>
            <div class="symbol">☎</div>
        </div>
        <div class="square">
            <h2>Deliver:</h2>
            <p>Excess food is distributed to needy people with love.</p>
            <div class="symbol">✉</div>
        </div>
    </div>

    <script>
        // JavaScript for manual control of image slider
        const imageSlider = document.querySelector('.image-slider');
        const images = document.querySelectorAll('.image');
        let counter = 0;

        function showImage(index) {
            counter = index;
            updateSlider();
        }

        function nextSlide() {
            counter++;
            if (counter >= images.length) {
                counter = 0;
            }
            updateSlider();
        }

        function prevSlide() {
            counter--;
            if (counter < 0) {
                counter = images.length - 1;
            }
            updateSlider();
        }

        function updateSlider() {
            const translateValue = -counter * (100 / images.length);
            imageSlider.style.transform = `translateX(${translateValue}%)`;
        }
    </script>

</body>
</html>
