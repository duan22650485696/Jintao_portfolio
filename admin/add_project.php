<?php
require_once('../includes/connect.php');

//move_uploaded_file etc FIRST, as we need the new name
//save the name in $filename variable


$target_file = '../images/gallary/image_'.time();
$imageFileType = strtolower(pathinfo($_FILES['pro_image']['name'], PATHINFO_EXTENSION));
$target_file .= '.'.$imageFileType;


if (!move_uploaded_file($_FILES['pro_image']['tmp_name'], $target_file)) {
    die('Failed to upload');
}

$query = "INSERT INTO projects (pro_cateagory, pro_name, pro_image) VALUES (?,?,?)";

$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['pro_cateagory'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['pro_name'], PDO::PARAM_STR);
$stmt->bindParam(3, $target_file, PDO::PARAM_STR);

$stmt->execute();
$last_id = $connection->lastInsertId();
$stmt = null;
header('Location: project_list.php');
?>