<?php
require_once('../includes/connect.php');

$target_file = '../images/gallary/image_'.time();
$imageFileType = strtolower(pathinfo($_FILES['pro_image']['name'], PATHINFO_EXTENSION));
$target_file .= '.'.$imageFileType;


if (!move_uploaded_file($_FILES['pro_image']['tmp_name'], $target_file)) {
    die('Failed to upload');
}


$query = "UPDATE projects SET pro_cateagory = ?, pro_name=?, pro_image = ? WHERE id = ?";

$stmt = $connection->prepare($query);

$stmt->bindParam(1, $_POST['pro_cateagory'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['pro_name'], PDO::PARAM_STR);
$stmt->bindParam(3, $target_file, PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['pk'], PDO::PARAM_INT);


$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>
