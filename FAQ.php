<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        .faq-header {
            background-color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            z-index: 999;
        }

        .faq-header h1 {
            color: #333;
            margin: 0;
            font-size: 28px;
        }

        .back-icon {
            position: fixed;
            left: 20px;
            top: 12px;
            cursor: pointer;
            z-index: 999;
            color: #008000;
            font-size: 24px;

        }

        .faq-container {
            padding: 80px 20px 20px; /* أضفت 80 بكسل للحاوية لتجنب تغطية العنوان */
            margin-top: 60px; /* للتعويض عن ارتفاع العنوان */
        }

        .faq-item {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .faq-question {
            font-size: 24px;
            color: #008000;
            margin-bottom: 10px;
            position: relative;
        }

        .faq-answer {
            display: none;
            font-size: 18px;
            color: #333;
        }

        .faq-toggle {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #008000;
        }

        .faq-toggle i {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="faq-header">
        <h1>Frequently Asked Questions</h1>
        <span class="back-icon" style="border: 1px solid ; padding: 10px 20px; border-radius: 5px; margin: 10px; "><i class="fas fa-arrow-left"></i> Back</span>

    </div>



    <div class="faq-container">
        <div class="faq-item">
            <h3 class="faq-question">Q: What is a site She Care? <span class="faq-toggle"><i class="fas fa-plus"></i></span></h3>
            <p class="faq-answer">A: She Care is a platform dedicated to providing the best skincare products tailored to your skin type and budget, with a focus on both skin health and cultural preferences.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Q: How can I find products suitable for my skin type? <span class="faq-toggle"><i class="fas fa-plus"></i></span></h3>
            <p class="faq-answer">A: If you know your skin type, you can use the specialized search feature to display products suitable for your skin type. If you're unsure, you can take a skin type test on our website to determine it and then choose the appropriate products.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Q: Are the products available on the website compatible with all skin types? <span class="faq-toggle"><i class="fas fa-plus"></i></span></h3>
            <p class="faq-answer">A: Yes, She Care offers products suitable for all skin types, including oily, combination, sensitive, and normal skin.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Q: What are the most main features available on the She Care website? <span class="faq-toggle"><i class="fas fa-plus"></i></span></h3>
            <p class="faq-answer">A: Our She Care website displays if the products are boycotted and presents alternatives to them. It also contains a magazine that displays various articles related to care. It also contains a test that determines skin type and other features available on our website. We always strive to add more features to satisfy the user.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Q: How can I showcase my products on She Care? <span class="faq-toggle"><i class="fas fa-plus"></i></span></h3>
            <p class="faq-answer">A: You can showcase your products on She Care by contacting us via email at shecare@gmail.com or by reaching out to us at 0758134795.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Q: Does the platform offer product sales? <span class="faq-toggle"><i class="fas fa-plus"></i></span></h3>
            <p class="faq-answer">A: Currently, product sales are not available, but efforts are underway to provide this service in the future.</p>
        </div>
        <div class="faq-item">
            <h3 class="faq-question">Q: Do you provide personal skincare consultations? <span class="faq-toggle"><i class="fas fa-plus"></i></span></h3>
            <p class="faq-answer">A: We aim to provide this service, enabling users to communicate with skincare experts through She Care's website to receive personalized advice and solutions.</p>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".faq-toggle").click(function(){
                $(this).find("i").toggleClass("fa-plus fa-minus");
                $(this).closest(".faq-item").find(".faq-answer").slideToggle("slow");
            });

            $(".back-icon").click(function(){
                window.history.back();
            });
        });
    </script>
</body>
</html>
