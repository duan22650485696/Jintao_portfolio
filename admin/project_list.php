<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
</head>
<body>

<header>
    <!-- Your header content -->
</header>

<main>
    <div class="grid-con gallary contentSmooth">
        <h1 class="col-span-full m-col-start-2 m-col-end-11">MY WORK</h1>
        
        <?php
        require_once('connect.php');
        
        $stmt = $connection->prepare('SELECT p.title, p.description, p.image_url FROM projects p');
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
    <!-- Your footer content -->
</footer>

<script src="js/main.js"></script>
</body>
</html>
