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
<style>
    
 .radio-label input[type="radio"] {
float: right;
align-items: center;
margin-top: 4px;
margin-left: 3px;

}  
       
       
  
 </style>   

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
<button style="position: absolute; top: 50; right: 50px; background-color: #4CAF50; border: none; color: white; padding: 5px 15px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 8px;" onclick="window.location.href = 'skinTest.php';"> <i class="fa-regular fa-globe" style="font-size:30px"></i> <br>English </button>
<form class="testForm"method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#result">
<h2 class="testH2">اختبار تحديد نوع البشرة </h2>
<div>
     <p>كيف تصف شكل المسامات على وجهك ؟</p>
     <img src="assets/images/skinTest/img1.jpg" alt="Image 1" class="testImg"><br>
    <label class="radio-label">صغيرة جدا و غير ملحوظة<input type="radio" name="q1" value="dry"<?php if ($selectedAnswers["q1"] === "dry") echo "checked"; ?>></label><br>
    <label class="radio-label">صغيرة إلى متوسطة الحجم<input type="radio" name="q1" value="normal"<?php if ($selectedAnswers["q1"] === "normal") echo "checked"; ?>></label><br>
    <label class="radio-label">كبيرة قليلاً في منطقة (الذقن والجبين والأنف) مقارنة ببقية الوجه<input type="radio" name="q1" value="combination"<?php if ($selectedAnswers["q1"] === "combination") echo "checked"; ?>></label><br>
    <label class="radio-label">واسعة و واضحة تمامًا<input type="radio" name="q1" value="oily"<?php if ($selectedAnswers["q1"] === "oily") echo "checked"; ?>></label><br><br>

</div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q1"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال</span>";
}
?>
 <div>
    <p>كيف تشعر بشرتك بعد غسل وجهك؟</p>
    <img src="assets/images/skinTest/img2.jpg" alt="Image 2" class="testImg"><br>
    <label class="radio-label">متوازنة، لا جافة ولا دهنية بشكل ملحوظ<input type="radio" name="q2" value="combination"<?php if ($selectedAnswers["q2"] === "combination") echo "checked"; ?>></label><br>
    <label class="radio-label">تبدو جافة<input type="radio" name="q2" value="dry"<?php if ($selectedAnswers["q2"] === "dry") echo "checked"; ?>></label><br>
    <label class="radio-label">تبدو لامعة و رطبة<input type="radio" name="q2" value="oily"<?php if ($selectedAnswers["q2"] === "oily") echo "checked"; ?>></label><br><br>
</div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q2"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال<br><br></span>";
}
?>
 <div>
    <p>هل تعاني من تهيج واحمرار بعد استخدام منتجات العناية بالبشرة؟</p>
    <img src="assets/images/skinTest/img3.jpg" alt="Image 3" class="testImg"><br>
    <label class="radio-label"><input type="radio" name="q3" value="Sensitive"<?php if ($selectedAnswers["q3"] === "Sensitive") echo "checked"; ?>> نعم</label><br>
    <label class="radio-label"><input type="radio" name="q3" value="s"<?php if ($selectedAnswers["q3"] === "s") echo "checked"; ?>> لا</label><br><br>

</div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q3"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال <br><br></span>";
}
?>
 <div>
    <p>كيف تبدو بشرتك بشكل عام؟ </p>
    <img src="assets/images/skinTest/img4.jpg" alt="Image 4" class="testImg"><br>
    <label class="radio-label"><input type="radio" name="q4" value="dry"<?php if ($selectedAnswers["q4"] === "dry") echo "checked"; ?>> باهتة و جافة</label><br>
    <label class="radio-label"><input type="radio" name="q4" value="combination"<?php if ($selectedAnswers["q4"] === "combination") echo "checked"; ?>> منطقة (الجبين والأنف والذقن) دهنية، بينما الخدين ومنطقة حول العينين جافة</label><br>
    <label class="radio-label"><input type="radio" name="q4" value="oily"<?php if ($selectedAnswers["q4"] === "oily") echo "checked"; ?>> لامعة و رطبة</label><br><br>

</div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q4"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال<br><br></span>";
}
?>
 <div>
    <p>هل تشعر أن بشرتك متوازنة ونابضة بالحياة وتخلو من العيوب؟</p>
    <img src="assets/images/skinTest/img5.jpg" alt="Image 5" class="testImg"><br>
    <label class="radio-label"><input type="radio" name="q5" value="normal"<?php if ($selectedAnswers["q5"] === "normal") echo "checked"; ?>> نعم</label><br>
    <label class="radio-label"><input type="radio" name="q5" value="n"<?php if ($selectedAnswers["q5"] === "n") echo "checked"; ?>> لا</label><br><br>

 </div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q5"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال <br><br></span>";
}
?>
 <div>
   <p>هل تلاحظ حساسية أو احمرار على الفور عند تعرض بشرتك لأشعة الشمس؟</p>
    <img src="assets/images/skinTest/img6.jpg" alt="Image 6" class="testImg"><br>
    <label class="radio-label"><input type="radio" name="q6" value="Sensitive"<?php if ($selectedAnswers["q6"] === "Sensitive") echo "checked"; ?>> نعم</label><br>
    <label class="radio-label"><input type="radio" name="q6" value="s"<?php if ($selectedAnswers["q6"] === "s") echo "checked"; ?>> لا</label><br><br>

</div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q6"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال <br><br></span>";
}
?>
 <div>
    <p>كيف تصف حالة بشرتك وظهور البثور؟ </p>
    <img src="assets/images/skinTest/img7.jpg" alt="Image 7" class="testImg"><br>
    <label class="radio-label"> نادراً ما تظهر البثور على الوجه.<input type="radio" name="q7" value="normal" <?php if ($selectedAnswers["q7"] === "normal") echo "checked"; ?>></label><br>
    <label class="radio-label">تظهر البثور في منطقة (الجبهة، الأنف، والذقن)<input type="radio" name="q7" value="combination" <?php if ($selectedAnswers["q7"] === "combination") echo "checked"; ?>></label><br>
    <label class="radio-label">تظهر البثور بانتظام وبشكل مستمر<input type="radio" name="q7" value="oily" <?php if ($selectedAnswers["q7"] === "oily") echo "checked"; ?>></label><br>
    <label class="radio-label">تظهر البثور من حين لآخر<input type="radio" name="q7" value="dry" <?php if ($selectedAnswers["q7"] === "dry") echo "checked"; ?>></label><br><br>

 </div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q7"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال <br><br></span>";
}
?>
 <div>
    <p>هل تلاحظ وجود التجاعيد والخطوط الدقيقة على بشرتك؟</p>
    <img src="assets/images/skinTest/img8.jpg" alt="Image 8" class="testImg"><br>
    <label class="radio-label"><input type="radio" name="q8" value="combination"<?php if ($selectedAnswers["q8"] === "combination") echo "checked"; ?>> تظهر إلى حد ما نتيجة التغييرات الطبيعية</label><br>
    <label class="radio-label"><input type="radio" name="q8" value="oily"<?php if ($selectedAnswers["q8"] === "oily") echo "checked"; ?>> لا تؤثر بشكل ملحوظ على بشرتك مع تقدم العمر</label><br>
    <label class="radio-label"><input type="radio" name="q8" value="dry"<?php if ($selectedAnswers["q8"] === "dry") echo "checked"; ?>> نعم، تزيد بشكل ملحوظ مع التقدم في العمر</label><br><br>

 </div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q8"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال <br><br></span>";
}
?>
  <div>
  <p>كيف تبدو ظاهرية الرؤوس السوداء على بشرتك؟</p>
    <img src="assets/images/skinTest/img9.jpg" alt="Image 9" class="testImg"><br>
    <label class="radio-label"><input type="radio" name="q9" value="dry"<?php if ($selectedAnswers["q9"] === "dry") echo "checked"; ?>> غير واضحة أو شبه غير مرئية</label><br>
    <label class="radio-label"><input type="radio" name="q9" value="combination"<?php if ($selectedAnswers["q9"] === "combination") echo "checked"; ?>> تظهر إلى حد متوسط</label><br>
    <label class="radio-label"><input type="radio" name="q9" value="oily"<?php if ($selectedAnswers["q9"] === "oily") echo "checked"; ?>> أكثر بروزًا وملحوظة</label><br><br>

  </div>
<?php
    // Add alert message if question not answered
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST["q9"])) {
    echo "<br><span style='color:red;'>يرجى الإجابة على هذا السؤال <br><br></span>";
}
?>

 
<br>
<input type= "submit" value="إرسال">
</form>
<?php
// طباعة النتيجة
if ($resultDisplayed) {
    echo '<div id="notificationBox" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #f9f9f9; padding: 20px; border-radius: 40px; box-shadow: 0 20px 80px rgba(0, 0, 0, 0.2);">';
    echo '<p style="font-size: 16px; text-align: center; color: black;">نوع بشرتك هو: <span style="font-weight: bold; color: rgb(6, 104, 27); font-size: 30px;">';

    // اختبار النتيجة وطباعتها بناءً على نتائج الاختبار
    if ($sensitive >= 50) {
        if ($maxSkinType == $combination) {
            echo "مختلطة وحساسة";
        } elseif ($maxSkinType == $dry) {
            echo "جافة وحساسة";
        } elseif ($maxSkinType == $oily) {
            echo "دهنية وحساسة";
        } elseif ($maxSkinType == $normal) {
            echo "طبيعية وحساسة";
        }
    } else {
        if ($maxSkinType == $combination) {
            echo "مختلطة";
        } elseif ($maxSkinType == $dry) {
            echo "جافة";
        } elseif ($maxSkinType == $oily) {
            echo "دهنية";
        } elseif ($maxSkinType == $normal) {
            echo "طبيعية";
        }
    }

    echo '</span></p>';
    echo '<p style="font-size: 20px; text-align: center; margin-top: 10px;">ملاحظة: قد لا تمثل نتيجة هذا الاختبار نوع بشرتك بدقة. للحصول على معلومات دقيقة، يُوصى استشارة خبير في العناية بالبشرة</p>';
    echo '<div style="text-align: center; margin-top: 20px;"><button style="background-color: #4caf50; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" onclick="window.location.href=\'testmain.php\'">إلغاء</button></div>';
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
