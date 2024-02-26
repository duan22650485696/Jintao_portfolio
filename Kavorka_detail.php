<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <title>Kavorka Detail</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div id="header-logo">
                <a href="#"><img src="images/home/pro-logo-3.svg" alt="header-logo"></a>
            </div>
            <ul class="nav-menu">
                <li><a href="index.html">HOME</a></li>
                <li><a href="project_list.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main class="grid-con">
        <?php
        require_once('includes/connect.php');

        $stmt = $connection->prepare('SELECT title, description, image_url FROM project_detail');
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<section class="col-span-full">';
            echo '<h1>' . $row['title'] . '</h1>';
            echo '<img src="images/project_detail/' . $row['image_url'] . '" alt="' . $row['title'] . '">';
            echo '<p>' . $row['description'] . '</p>';
            echo '</section>';
        }

        $stmt = null;
        ?>
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
</body>
</html>
