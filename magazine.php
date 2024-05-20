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
    
        
    </head>
    <body>

    <?php
	$title = "Php Header Footer";                   
	include "header.php";                 
	?>
    

    <main id="content" class="wrapper layout-page">
            <section class="page-title z-index-2 position-relative">
        
       
        <div class="text-center py-13">
            <div class="container">
                <h2 class="mb-0">Our Magazine</h2></div>
        </div>
    </section>
<div class="container mb-lg-18 mb-16 pb-3">
        <div class="row">
            <div class="col-lg-8 order-lg-1">
            <div class="row gy-50px">
    <div class="col-12">
        <?php
        include "db_conn.php";
        // Specify the number of items per page
        $items_per_page = 3;
        // Specify the current page
        $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
        // Calculate the first row for each group
        $offset = ($page - 1) * $items_per_page;

        

        // Get the total number of rows
        $sql_count = "SELECT COUNT(*) AS total_rows FROM `magazine`";
        $result_count = mysqli_query($conn, $sql_count);
        $row_count = mysqli_fetch_assoc($result_count);
        $total_rows = $row_count['total_rows'];

        // Calculate the number of pages
        $total_pages = ceil($total_rows / $items_per_page);

        // SQL query with LIMIT and OFFSET
        $sql2 = "SELECT * FROM `magazine` LIMIT $offset, $items_per_page";
        $result2 = mysqli_query($conn, $sql2);

        while ($fetch = mysqli_fetch_assoc($result2)) {
            // Article content
            ?>
            <h2 style="margin: 40px auto; text-align: center;"><?php echo $fetch['title'] ?></h2>

            <img src="upload/<?php echo $fetch['image'] ?>" style="display: block; margin: 20px auto;" width="450px" height="450px" alt="">
           
            <p style="text-align: center;">To know more about <?php echo $fetch['title'] ?>, follow the link below:</p>
           
            <a style="margin: 20px auto; display: block; width: fit-content; text-align: center; color: #000; background-color: #fff; border: 1px solid #000; padding: 10px 20px; text-decoration: none;"
               href="details.php?id=<?php echo $fetch['id']; ?>"
               onmouseover="this.style.backgroundColor='#000'; this.style.color='#fff';"
               onmouseout="this.style.backgroundColor='#fff'; this.style.color='#000';"> Read more
            </a>

            <!-- Display the quotation -->
            <?php
            // Assuming 'quotation' is the field in your database storing the quotation
            $quotation = $fetch['quote'];
            if (!empty($quotation)) {
                ?>
                <figure class="card-img-top position-relative mb-10">
                    <blockquote class="bg-section-2 text-center px-5 px-md-10 px-xl-16 py-14 m-0">
                        <i class="fa fa-quote-right-alt text-primary fs-2"></i>
                        <p class="fs-4 fw-semibold text-body-emphasis mt-5 mb-10 pb-3" class="mb-0"><?php echo $quotation; ?></p>
                    </blockquote>
                </figure>
            <?php
            }
            ?>
            <!-- End of displaying quotation -->
        <?php
        }
        ?>
    </div>
</div>
<!-----------------------------pagination-------------------------->

<nav class="d-flex mt-13 pt-3 justify-content-center" aria-label="pagination" data-animate="fadeInUp">
    <ul class="pagination m-0">
        <li class="page-item <?php echo $page <= 1 ? 'disabled' : '' ?>">
            <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                <i class="fa-solid fa-arrow-left"></i> 
            </a>
        </li>
       
        <?php for ($i = 1; $i <= $total_pages && $i <= 15; $i++) : ?>
            <li class="page-item <?php echo $page == $i ? 'active' : ''; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endfor; ?>
        
        <li class="page-item <?php echo $page >= $total_pages ? 'disabled' : '' ?>">
            <a class="page-link rounded-circle d-flex align-items-center justify-content-center" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                <i class="fa-solid fa-arrow-right"></i> 
            </a>
        </li>
    </ul>
</nav>

<!-----------------------------/pagination-------------------------->
            </div>
            <div class="col-lg-4 order-0">
                <div class="position-sticky top-0">
                    
    
    <aside class="primary-sidebar mt-12 pt-2 mt-lg-0 pt-lg-0 pe-xl-9 me-xl-2">
        <div class="widget widget-search">
    <h4 class="widget-title fs-10 mb-6">She Cares</h4><form action="#">
           
        </form>
    </div>
    <div class="widget widget-post">
    <h4 class="widget-title fs-5 mb-6">Recent posts</h4>
    <ul class="list-unstyled mb-0 row gy-7 gx-0">
        <?php
        // Assuming you have a database connection established
       
        if ($conn) {
            // Fetching the latest three articles from the database
            $query = "SELECT * FROM magazine ORDER BY id DESC LIMIT 3";
            $result = mysqli_query($conn, $query);

            // Loop through the fetched articles
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <li class="col-12">
                    <div class="card border-0 flex-row">
                        <a href="details.php?id=<?php echo $row['id']; ?>" class="d-flex w-100">
                            <figure class="flex-shrink-0 me-3">
                            <img src="upload/<?php echo $row['image'] ?>" class="img-fluid lazy-image" alt="<?php echo $row['title']; ?>" width="100" >
                            </figure>
                            <div>
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            </div>
                        </a>
                    </div>
                </li>
                <?php
            }
        } else {
            echo "Failed to connect to the database.";
        }
        ?>
    </ul>
</div>

<div class="widget widget-banner">
        <video class="card-video" alt="Be your kind of beauty"  src="assets\images\blog\video1.mp4" width="350"  height="420" controls >
          
        </video>
</div>

<div class="widget widget-expert-tips">
    <h4 class="widget-title fs-5 mb-6">Expert Tips</h4>
    <ul class="w-100 mt-n4 list-unstyled mb-0">
        <li class="mb-4">
            <a href="https://youtube.com/shorts/PrXD7KXSKK4?feature=shared" title="Problems of Neglecting Care for Oily Skin" class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline" target="_blank">Problems of Neglecting Care for Oily Skin</a>
        </li>
        <li class="mb-4">
            <a href="https://youtube.com/shorts/CALTNIhFNHI?feature=shared" title="The Radiance of Skin After the Age of Thirty" class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline" target="_blank">The Radiance of Skin After the Age of Thirty</a>
        </li>
        <li class="mb-4">
            <a href="https://youtube.com/shorts/M3TqaOORzvI?feature=shared" title="Tips for Acne-Free Skin" class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline" target="_blank">Tips for Acne-Free Skin</a>
        </li>
        <li class="mb-4">
            <a href="https://youtube.com/shorts/mCxfEeP55M8?feature=shared" title="Skin care mistakes that ruin your face" class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline" target="_blank">Skin care mistakes that ruin your face</a>
        </li>
        <li class="mb-4">
            <a href="https://youtube.com/shorts/RbqosVOC2_o?feature=shared" title="Simplify Your Skincare Routine" class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline" target="_blank">Simplify Your Skincare Routine</a>
        </li>
        <li class="mb-4">
            <a href="https://youtube.com/shorts/NiYrFqDFzTE?feature=shared" title="Beware when using Pimple Patches" class="text-reset d-block text-decoration-none text-body-emphasis-hover text-hover-underline" target="_blank">Beware when using Pimple Patches</a>
        </li>
    </ul>
</div>
<br><br>
<div class="row g-10px">
    <div class="col-4">
        <a class="d-block" href="https://www.instagram.com/balqees.alemaryeen?igsh=MWs1NnlqejAxdWFucw==" target="_blank">
            <img class="lazy-image img-fluid w-100" width="106" height="106" src="assets/images/blog/instagram.jpg" alt="instagram-01">
        </a>
    </div>
    <div class="col-4">
        <a class="d-block" href="https://www.instagram.com/haneen_skincare1?igsh=MTQyZXk5bmhxb2Frdg==" target="_blank">
            <img class="lazy-image img-fluid w-100" width="106" height="106" src="assets/images/blog/instagram.jpg" alt="instagram-02">
        </a>
    </div>
    <div class="col-4">
        <a class="d-block" href="https://www.instagram.com/20.skincare?igsh=OHlrMWRvYWdpdTl4" target="_blank">
            <img class="lazy-image img-fluid w-100" width="106" height="106" src="assets/images/blog/instagram.jpg" alt="instagram-03">
        </a>
    </div>
    <div class="col-4">
        <a class="d-block" href="https://www.instagram.com/dr_rahimaa?igsh=MXBmOGVpZTg5anhwcQ==" target="_blank">
            <img class="lazy-image img-fluid w-100" width="106" height="106" src="assets/images/blog/instagram.jpg" alt="instagram-04">
        </a>
    </div>
    <div class="col-4">
        <a class="d-block" href="https://www.instagram.com/raghadelayyan22?igsh=MTE5azF2dHEyaGZjeA==" target="_blank">
            <img class="lazy-image img-fluid w-100" width="106" height="106" src="assets/images/blog/instagram.jpg" alt="instagram-05">
        </a>
    </div>
    <div class="col-4">
        <a class="d-block" href="https://www.instagram.com/dr_ahmedzaki3?igsh=MW00YWRkYmptYTByZw==" target="_blank">
            <img class="lazy-image img-fluid w-100" width="106" height="106" src="assets/images/blog/instagram.jpg" alt="instagram-06">
        </a>
    </div>
</div>

    </aside>
                </div>
            </div>
        </div>
    </div>
    
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