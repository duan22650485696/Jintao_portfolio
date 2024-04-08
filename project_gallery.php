<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');
$stmt = $connection->prepare('SELECT * FROM projects ORDER BY pro_name ASC');
$stmt->execute();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Gallary</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <div id="header-logo">
                <a href="index.html"><img src="images/home/pro-logo-3.svg" alt="header-logo"></a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.html">HOME</a></li>
                <li><a href="project_list.html">GALLERY</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
            <a href="#" id="ham-menu"><img src="images/home/ham-menu.png" alt="hamburger-menu"></a>
        </nav>
    </header>
<?php echo $row['pro_cateagory']; ?>

    <main>
        <div class="grid-con gallary contentSmooth ">

            <h1 class="col-span-full m-col-start-1 m-col-end-10">MY WORK</h1>

            <!--Logo Design-->
            <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<section class="col-span-full m-col-start-3 m-col-end-11">
                <h2>'.$row['pro_cateagory'].'</h2>
                <div class="gallary-box">
                    <a href="project_detail.php?id='.$row['id'].'">
                        <img src="images/'.$row['pro_image'].'" alt="'.$row['pro_name'].'">
                    </a>
                    <div class="content">
                        <h1>'.$row['pro_name'].'</h1>
                    </div>
                </div>

            </section>';
            }
            $stmt = null;

            ?> 
        </div>
    </main>

    <footer>
        <div class="grid-con" id="main-footer">
            <div id="footer-logo" class="col-start-2 col-end-4 m-col-start-6 m-col-end-8">
                <a href=""><img src="images/home/pro-logo-3.svg" alt="footer-logo"></a>
            </div>

            <!--social media-->
            <section class="col-start-1 col-end-2 m-col-start-5 m-col-end-6 social-media-icon">
                <a href="#"><img src="images/home/icons8-whatsapp-144.png" alt="whatsapp"></a>
            </section>
            <section class="col-start-2 col-end-3 m-col-start-6 m-col-end-7 social-media-icon">
                <a href="#"><img src="images/home/icons8-facebook-144(1).png" alt="facebook"></a>
            </section>
            <section class="col-start-3 col-end-4 m-col-start-7 m-col-end-8 social-media-icon">
                <a href="https://www.linkedin.com/in/jintao-duan-7b4078246/"><img
                        src="images/home/icons8-linkedin-144.png" alt="linkden"></a>
            </section>
            <section class="col-start-4 col-end-5 m-col-start-8 m-col-end-9 social-media-icon">
                <a href="https://instagram.com/j_ax_d?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><img
                        src="images/home/icons8-instagram-144(2).png" alt="instagram"></a>
            </section>
        </div>
        <p>© 2024 Jintao Duan. All rights reserved.</p>
    </footer>

    <!-- <script src="js/main.js"></script>
    <script src="js/trigger.js"></script> -->
</body>

</html>
