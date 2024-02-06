<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="css/gallary.css">
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>

<header>
        <nav class="navbar">
            <div id="header-logo">
                <a href="#"><img src="images/home/pro-logo-3.svg" alt="header-logo"></a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.html">HOME</a></li>
                <li><a href="gallary.html">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

<main>
    <div class="grid-con gallary contentSmooth">
        <h1 class="col-span-full m-col-start-2 m-col-end-11">MY WORK</h1>
        
        <?php
        require_once('connect.php');
        
        $stmt = $connection->prepare('SELECT p.title, p.description, CONCAT("images/project_list/", p.image_url) AS image_url FROM projects p');
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<section class="col-span-full m-col-start-3 m-col-end-11">';
            echo '<h2>' . $row['title'] . '</h2>';
            echo '<div class="gallary-box">';
            echo '<img src="' . $row['image_url'] . '" alt="' . $row['title'] . '">';
            echo '<div class="content">';
            echo '<p>' . $row['description'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
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
            <a href="https://www.linkedin.com/feed/update/urn:li:activity:7130401143062466561/"><img
                    src="images/home/icons8-linkedin-144.png" alt="linkden"></a>
        </section>
        <section class="col-start-4 col-end-5 m-col-start-8 m-col-end-9 social-media-icon">
            <a href="https://instagram.com/j_ax_d?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr"><img
                    src="images/home/icons8-instagram-144(2).png" alt="instagram"></a>
        </section>
    </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
