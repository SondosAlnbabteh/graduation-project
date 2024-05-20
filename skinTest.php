
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
	
        <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Home Page 01 - Glowing - Bootstrap 5 HTML Templates</title>
<link rel="icon" href="./assets/images/others/favicon.ico">


<link rel="stylesheet" href="./assets/vendors/lightgallery/css/lightgallery-bundle.min.css">
<link rel="stylesheet" href="./assets/vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="./assets/vendors/animate/animate.min.css">
<link rel="stylesheet" href="./assets/vendors/slick/slick.css">
<link rel="stylesheet" href="./assets/vendors/mapbox-gl/mapbox-gl.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/theme.css">
<link rel="stylesheet" href="assets/css/SkinTypeTest.css">


</head>
<body>
<?php
 session_start();
	$title = "Php Header Footer";                   
	include "header.php";                 
	?>
      <main id="content" class="wrapper layout-page">
<?php
 
// Set default values
$combination = 0;
$dry = 0;
$oily = 0;
$sensitive = 0;
$normal=0;
$resultDisplayed = false;
$allQuestionsAnswered = false;
$selectedAnswers = [
    "q1" => "",
    "q2" => "",
    "q3" => "",
    "q4" => "",
    "q5" => "",
    "q6" => "",
    "q7" => "",
    "q8" => "",
    "q9" => ""
];


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Question 1
    if (isset($_POST["q1"])) {
    $selectedAnswerQ1 = $_POST["q1"];
    switch ($selectedAnswerQ1) {
    case "combination":
    $combination += 23;
    break;
    case "dry":
    $dry += 20;
    break;
    case "oily":
    $oily += 25;
    break;
    default:
    $normal += 25;
    }
    }
     
    // Question 2
    if (isset($_POST["q2"])) {
    $selectedAnswerQ2 = $_POST["q2"];
    switch ($selectedAnswerQ2) {
    case "combination":
    $combination += 20;
    break;
    case "dry":
    $dry += 17;
    break;
    default:
    $oily +=15;
    }
    }
     
    // Question 3
    if (isset($_POST["q3"])) {
    $selectedAnswerQ3 = $_POST["q3"];
    switch ($selectedAnswerQ3) {
    case "Sensitive":
    $sensitive += 25;
    break;
    default:
    }
    }
     
    // Question 4
    if (isset($_POST["q4"])) {
    $selectedAnswerQ4 = $_POST["q4"];
    switch ($selectedAnswerQ4) {
    case "combination":
    $combination +=15;
    break;
    case "dry":
    $dry += 25;
    break;
    case "oily":
    $oily += 15;
    break;
    default:
    }
    }
    // Question 5
    if (isset($_POST["q5"])) {
    $selectedAnswerQ5 = $_POST["q5"];
    switch ($selectedAnswerQ5) {
    case "normal":
    $normal += 50;
    break;
    default:
    }
    } 
    // Question 6
    if (isset($_POST["q6"])) {
    $selectedAnswerQ6 = $_POST["q6"];
    switch ($selectedAnswerQ6) {
    case "Sensitive":
    $sensitive += 25;
    break;
    default:
    }
    }

    // Question 7
    if (isset($_POST["q7"])) {
    $selectedAnswerQ7 = $_POST["q7"];
    switch ($selectedAnswerQ7) {
    case "combination":
    $combination += 22;
    break;
    case "dry":
    $dry += 15;
    break;
    case "oily":
    $oily += 25;
    break;
    case "normal":
    $normal+= 25;
    break;
    default:
    }
    }
    // Question 8
    if (isset($_POST["q8"])) {
    $selectedAnswerQ8 = $_POST["q8"];
    switch ($selectedAnswerQ8) {
    case "combination":
    $combination +=5;
    break;
    case "dry":
    $dry += 13;
    break;
    case "oily":
    $oily += 5;
    break;
    default:
    
    }
   }
    // Question 9
    if (isset($_POST["q9"])) {
    $selectedAnswerQ9 = $_POST["q9"];
    switch ($selectedAnswerQ9) {
    case "combination":
    $combination += 10;
    break;
    case "dry":
    $dry += 10;
    break;
    case "oily":
    $oily += 15;
    break;
    default:
   
    }
    }
if (isset($_POST["q1"]) && isset($_POST["q2"]) && isset($_POST["q3"]) && isset($_POST["q4"]) && isset($_POST["q5"]) && isset($_POST["q6"]) && isset($_POST["q7"])) {
$allQuestionsAnswered = true;
}
 
    // Display result if all questions answered
    if ($allQuestionsAnswered) {
    $resultDisplayed = true; 
    $maxSkinType = max($combination, $dry, $oily,$normal);
}

}

foreach ($selectedAnswers as $question => $value) {
    if (isset($_POST[$question])) {
        $selectedAnswers[$question] = $_POST[$question];
    }
}
?>
<button style="position: absolute; top: 50; right: 50px; background-color: #4CAF50; border: none; color: white; padding: 5px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 8px;" onclick="window.location.href = 'skinTestInArabic.php';"> <i class="fa-regular fa-globe" style="font-size:30px"></i> <br>Arabic </button>
<form class="testForm"method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#result">
<h2 class="testH2">Skin Type Test</h2>
<div>
    <p>1. How would you describe the appearance of your facial pores?</p>
    <img src="assets/images/skinTest/img1.jpg" alt="Image 1"class="testImg"><br>
    <input type="radio" name="q1" value="dry" <?php if ($selectedAnswers["q1"] === "dry") echo "checked"; ?>> Very small and not noticeable.<br>
    <input type="radio" name="q1" value="normal" <?php if ($selectedAnswers["q1"] === "normal") echo "checked"; ?>> Small to medium-sized.<br>
    <input type="radio" name="q1" value="combination" <?php if ($selectedAnswers["q1"] === "combination") echo "checked"; ?>> Slightly larger in the T-Zone area (chin, forehead, and nose) compared to the rest of the face.<br>
    <input type="radio" name="q1" value="oily" <?php if ($selectedAnswers["q1"] === "oily") echo "checked"; ?>> Wide and clearly visible.<br><br>
</div>

<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q1"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>2. How does your skin feel after washing your face?</p>
    <img src="assets/images/skinTest/img2.jpg" alt="Image 2"class="testImg"><br>
    <input type="radio" name="q2" value="combination" <?php if ($selectedAnswers["q2"] === "combination") echo "checked"; ?>> Balanced, neither dry nor oily significantly.<br>
    <input type="radio" name="q2" value="dry" <?php if ($selectedAnswers["q2"] === "dry") echo "checked"; ?>> Feels dry.<br>
    <input type="radio" name="q2" value="oily" <?php if ($selectedAnswers["q2"] === "oily") echo "checked"; ?>> Appears shiny and moisturized.<br><br>
</div>

<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q2"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>3. Do you experience irritation and redness after using skincare products?</p>
    <img src="assets/images/skinTest/img3.jpg" alt="Image 3"class="testImg"><br>
    <input type="radio" name="q3" value="Sensitive" <?php if ($selectedAnswers["q3"] === "Sensitive") echo "checked"; ?>> Yes<br>
    <input type="radio" name="q3" value="s" <?php if ($selectedAnswers["q3"] === "s") echo "checked"; ?>> No<br><br>
</div>

<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q3"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>4. How does your skin generally look?</p>
    <img src="assets/images/skinTest/img4.jpg" alt="Image 4"class="testImg"><br>
    <input type="radio" name="q4" value="dry" <?php if ($selectedAnswers["q4"] === "dry") echo "checked"; ?>> Dull and dry.<br>
    <input type="radio" name="q4" value="combination" <?php if ($selectedAnswers["q4"] === "combination") echo "checked"; ?>> T-Zone (forehead, nose, and chin) is oily, while cheeks and the area around the eyes are dry.<br>
    <input type="radio" name="q4" value="oily" <?php if ($selectedAnswers["q4"] === "oily") echo "checked"; ?>> Radiant and moisturized.<br><br>
</div>

<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q4"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>5. Do you feel that your skin is balanced, vibrant, with few or no imperfections?</p>
    <img src="assets/images/skinTest/img5.jpg" alt="Image 5"class="testImg"><br>
    <input type="radio" name="q5" value="normal" <?php if ($selectedAnswers["q5"] === "normal") echo "checked"; ?>> Yes<br>
    <input type="radio" name="q5" value="n" <?php if ($selectedAnswers["q5"] === "n") echo "checked"; ?>> No<br><br>
</div>

<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q5"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>6. Do you notice sensitivity or redness immediately when your skin is exposed to sunlight?</p>
    <img src="assets/images/skinTest/img6.jpg" alt="Image 6"class="testImg"><br>
    <input type="radio" name="q6" value="Sensitive" <?php if ($selectedAnswers["q6"] === "Sensitive") echo "checked"; ?>> Yes<br>
    <input type="radio" name="q6" value="s" <?php if ($selectedAnswers["q6"] === "s") echo "checked"; ?>> No<br><br>
</div>

<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q6"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>7. How would you describe the condition of your skin and the occurrence of pimples?</p>
    <img src="assets/images/skinTest/img7.jpg" alt="Image 7"class="testImg"><br>
    <input type="radio" name="q7" value="normal" <?php if ($selectedAnswers["q7"] === "normal") echo "checked"; ?>> Rarely have pimples on the face.<br>
    <input type="radio" name="q7" value="combination" <?php if ($selectedAnswers["q7"] === "combination") echo "checked"; ?>> Pimples appear in the T-Zone area (forehead, nose, and chin).<br>
    <input type="radio" name="q7" value="oily" <?php if ($selectedAnswers["q7"] === "oily") echo "checked"; ?>> Pimples appear regularly and persistently.<br>
    <input type="radio" name="q7" value="dry" <?php if ($selectedAnswers["q7"] === "dry") echo "checked"; ?>> Pimples appear from time to time.<br><br>
</div>
<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q7"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>8. Do you observe the presence of wrinkles and fine lines on your skin?</p>
    <img src="assets/images/skinTest/img8.jpg" alt="Image 8"class="testImg"><br>
    <input type="radio" name="q8" value="combination" <?php if ($selectedAnswers["q8"] === "combination") echo "checked"; ?>> They manifest to a minor extent as a result of natural changes. <br>
    <input type="radio" name="q8" value="oily" <?php if ($selectedAnswers["q8"] === "oily") echo "checked"; ?>> They do not pose a noticeable impact on the skin as it ages.<br>
    <input type="radio" name="q8" value="dry" <?php if ($selectedAnswers["q8"] === "dry") echo "checked"; ?>> Yes, they significantly increase with age. <br><br>
</div>

<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q8"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>
<div>
    <p>9. How does the visibility of blackheads appear on your skin?</p>
    <img src="assets/images/skinTest/img9.jpg" alt="Image 9"class="testImg"><br>
    <input type="radio" name="q9" value="dry" <?php if ($selectedAnswers["q9"] === "dry") echo "checked"; ?>> Not clear or almost invisible. <br>
    <input type="radio" name="q9" value="combination" <?php if ($selectedAnswers["q9"] === "combination") echo "checked"; ?>> Appears to a moderate extent. <br>
    <input type="radio" name="q9" value="oily" <?php if ($selectedAnswers["q9"] === "oily") echo "checked"; ?>> More prominent and noticeable.<br><br>
</div>
<!-- PHP for alert message if question not answered -->
<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q9"])): ?>
    <br><span style='color:red;'>Please answer this question.</span><br><br>
<?php endif; ?>

 
<br>
<input type="submit" value="Submit">
</form>
<?php
// Print the result
if ($resultDisplayed) {
    echo '<div id="notificationBox" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #f9f9f9; padding: 20px; border-radius: 40px; box-shadow: 0 20px 80px rgba(0, 0, 0, 0.2);">';
    echo '<p style="font-size: 16px; text-align: center;font-size: 30px; color:black">Your skin type is: <span style="font-weight: bold; color:rgb(6, 104, 27);font-size: 30px;">';

    if ($sensitive >= 50) {
        if ($maxSkinType == $combination) {
            echo "Combination and Sensitive";
        } elseif ($maxSkinType == $dry) {
            echo "Dry and Sensitive";
        } elseif ($maxSkinType == $oily) {
            echo "Oily and Sensitive";
        } elseif ($maxSkinType == $normal) {
            echo "Normal and Sensitive";
        }
    } else {
        if ($maxSkinType == $combination) {
            echo "Combination";
        } elseif ($maxSkinType == $dry) {
            echo "Dry";
        } elseif ($maxSkinType == $oily) {
            echo "Oily";
        } elseif ($maxSkinType == $normal) {
            echo "Normal";
        }
    }

    echo '</span></p>';
    echo '<p style="font-size: 20px; text-align: center; margin-top: 10px;">Note: This test result may not accurately represent your actual skin type. For precise information, it is recommended to consult with a skincare professional.</p>';
    echo '<div style="text-align: center; margin-top: 20px;"><button style="background-color: #4caf50;color: #fff;padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" onclick="window.location.href=\'testmain.php\'">Cancel</button></div>';
    echo '</div>';
}
?>



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
<script>
        function showNotification() {
            var notificationBox = document.getElementById('notificationBox');
            var contentForm = document.getElementById('content');
            if (notificationBox && contentForm) {
                notificationBox.style.display = 'block';
                contentForm.style.display = 'none';
            }
        }
    </script>
