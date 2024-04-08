<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM projects WHERE projects.id = :projectId';
$stmt = $connection->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">

</head>
<body>

<div id="edit-con">
    <form action="edit_project.php" method="POST" enctype="multipart/form-data">
        <input name="pk" type="hidden" value="<?php echo $row['id']; ?>">

        <label for="pro_cateagory">Project Category: </label>
        <input name="pro_cateagory" type="text" value="<?php echo $row['pro_cateagory']; ?>" required><br><br>

        <label for="pro_name">Project Name: </label>
        <input name="pro_name" type="text" value="<?php echo $row['pro_name']; ?>" required><br><br>

        <label for="pro_image"> Project image: </label>
        <input name="pro_image" type="file" required><br><br>

        <input id="button" name="submit" type="submit" value="Edit">
    </form>
</div>



<?php
$stmt = null;
?>
</body>
</html>
