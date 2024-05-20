
<?php
    ob_start(); // Enable output buffering
    session_start(); // Start the session

    // Other content of the page
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skin Type Test - SheCare - Bootstrap 5 HTML Templates</title>
    <link rel="icon" href="./assets/images/others/favicon.ico">

    <link rel="stylesheet" href="./assets/vendors/lightgallery/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="./assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="./assets/vendors/mapbox-gl/mapbox-gl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/theme.css">
    <style>
        h1 {margin-top: 80px;text-align: center;}
        .p {font-size:30px; margin-left: 500px;width:350px}
        .test {
            width: 180px;
            height: 50px;
            margin: 30px auto;
            display: block;
            font-size: 18px;
            background-color: #228b22;
            border: 2px solid #228b22;
            color: white;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
           .test:hover {
            background-color: #3cb371;
            border-color: #3cb371;
        }
        .result-highlight {
         margin: 10px;
         font-weight: bold;
         color: #4caf50;;
         }
         .result-section {
         width: 100%;
         max-width: 600px;
         margin: 10px auto;
         margin-top: 70px;
         padding: 20px;
         box-sizing: border-box;
         background-color: #f8f8f8;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         }
        .result-text {
         font-size: 25px;
         margin-bottom: 15px;
         color: black;
         }
         .note-text{
            font-size: 18px;
         }

    </style>
</head>
<body>
    <?php
        $title = "Php Header Footer";                   
        include "header.php";                 
    ?>
    <main id="content" class="wrapper layout-page">


        <h1>Know your skin type</h1>
        <p class="p">Some people don't know their skin type, click to know...</p>
        <input class="test" type="button" value="Confirm test" onclick="window.location.href='skinTest.php'" >
    </main>

    <?php
        $title = "Php Header Footer";                   
        include "footer.php";                 
    ?>
    
    <?php
        $title = "Php scripts";                   
        include "scripts.php";                 
    ?> 
</body>
</html>
