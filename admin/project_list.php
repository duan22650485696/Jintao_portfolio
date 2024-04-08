<!DOCTYPE html>
<html lang="en">

<?php

require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT id, pro_cateagory, pro_name, pro_image FROM projects ORDER BY pro_name ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/grid.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <title>CMS Main Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>

<body class="grid-con">

<div id = "pro_list" class="col-span-full">
  <h3>Project List</h3>
    <?php
 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      
      echo  '<p class="pro">'. 
      $row['pro_name'].
      $row['pro_cateagory'].
      '&nbsp&nbsp <a href="edit_project_form.php?id='.$row['id'].'">edit</a>'.

      '&nbsp&nbsp<a href="delete_project.php?id='.$row['id'].'">delete</a></p>';
    }

    $stmt = null;

    ?>
</div>
<br><br><br>

<div id ="add_pro" class="col-span-full">
  <h3>Add a New Project</h3>
  <form action="add_project.php" method="post" enctype="multipart/form-data">

      <label for="pro_cateagory"> Project Category: </label>
      <input name="pro_cateagory" type="text" required><br><br>

      <label for="pro_name"> Project Title: </label>
      <input name="pro_name" type="text" required><br><br>

      <label for="pro_image"> Project image: </label>
      <input name="pro_image" type="file" required><br><br>
    

      <input id="button" name="submit" type="submit" value="Add">
  </form>
</div>

<br><br><br>

<div class="col-span-full log-out-btn">
  <a href="logout.php">log out</a>
</div>
</body>
</html>
