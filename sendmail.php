<?php
require_once('../includes/connect.php');

// gather the form content
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message']; // Update to match the form input name

$errors = [];

// validate and clean these values
$name = trim($name);
$email = trim($email);
$subject = trim($subject);
$msg = trim($msg);

if (empty($name)) {
    $errors['name'] = 'Name cannot be empty';
}

if (empty($subject)) {
    $errors['subject'] = 'Subject cannot be empty';
}

if (empty($msg)) {
    $errors['message'] = 'Message field cannot be empty';
}

if (empty($email)) {
    $errors['email'] = 'You must provide an email';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if (empty($errors)) {
    // insert these values as a new row in the contacts table
    $query = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name','$email','$subject','$msg')";

    if (mysqli_query($connect, $query)) {
        // format and send these values in an email
        $to = 'j_168326@fanshaweonline.ca';
        $subject = 'Message from your Portfolio site!';
        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: " . $name . "\n";
        $message .= "Email: " . $email . "\n\n";
        // build out the rest of the message body...

        mail($to, $subject, $message);

        header('Location: thank_you.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($connect);
    }
} else {
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}

// close the database connection
mysqli_close($connect);
?>