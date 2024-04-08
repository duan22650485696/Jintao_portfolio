<!DOCTYPE html>
<?php
require_once('includes/connect.php');
$query = 'SELECT title,pro_des,pro_detail_image1,pro_detail_image2,pro_detail_image3,pro_detail_image4,pro_detail_image5 
FROM project_detail, projects 
WHERE project_detail.projects_id = projects.id 
AND project_detail.projects_id = :projectsId';
$projectsId = $_GET['id'];
$stmt = $connection->prepare($query);
$stmt->bindParam(':projectsId', $projectsId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt = null;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>London International Student</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fontawesome.com/icons/bars?f=classic&s=solid">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
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

    <main>
        <div class="grid-con">
            <!--Web-->
                <section class="col-span-full m-col-span-full">
                    <h3><?php echo $row['title']; ?> </h3>

                    <h2><?php echo $row['pro_des']; ?></h2>
                    <div id="kavorka-images">
                        <img src="images/<?php echo $row['pro_detail_image1']; ?>" alt="poster1">
                        <img src="images/<?php echo $row['pro_detail_image2']; ?>" alt="poster2">
                        <img src="images/<?php echo $row['pro_detail_image3']; ?>" alt="poster3">
                        <img src="images/<?php echo $row['pro_detail_image4']; ?>" alt="poster4">
                        <img src="images/<?php echo $row['pro_detail_image5']; ?>" alt="poster5">
                </section>
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

<script src="js/main.js"></script>
</body>



</html>