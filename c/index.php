<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro University</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navbar {
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 14px 20px;
        }
        .navbar img {
            height: 50px;
            margin-right: auto;
        }
        .navbar a {
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }
        .navbar a:hover {
            background-color: black;
            color: white;
        }
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100vh;
            background: url("https://metrouni.edu.bd/uploads/2018/02/Slider-2-1.jpg") no-repeat center center/cover;
        }
        .hero-text {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            border-radius: 5px;
        }
        .hero-text button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .hero-text button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="https://metrouni.edu.bd/frontend/logo/logo.png" alt="Metro University Logo">
        <a href="/index.php">Home</a>
        <a href="/#">Contact Us</a>
    </div>
    <div class="hero">
        <div class="hero-text">
            <h1>Do you want to fill up a form for Supplimentary and Retake?</h1>
            <button onclick="window.location.href='reg.php'">Yes</button>

</script>
           
        </div>
    </div>
</body>
</html>


