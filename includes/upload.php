<?php
    $target_file = '../images/gallary/image_'.time();
    $imageFileType = strtolower(pathinfo($_FILES['pro_image']['name'], PATHINFO_EXTENSION));
    $target_file .= '.'.$imageFileType;
    move_uploaded_file($_FILES['pro_image']['tmp_name'], $target_file);




    
    // Allow certain file formats
    if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
    && $imageFileType != 'gif' ) {
        echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
        $uploadOk = 0;
    }else{

    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo 'Sorry, your file was not uploaded.';
    // if everything is ok, try to upload file
    } else {
    ********** if (move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_file)) {
            echo 'The file '.$target_file. ' has been uploaded.';
        } else {
            echo 'Sorry, there was an error uploading your file.';
        }
    }
?>
