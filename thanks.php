<?php

$nameErr = $firstnameErr = $emailErr = $phoneErr = $subjectErr =  $messageErr = "";
$name = $firstname = $email = $phone = $message = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])) {
        $nameErr = "Name is required <br>";
    } else {
        $name = test_input($_POST["user_name"]);
    }
    if (empty($_POST["user_firstname"])) {
        $firstnameErr = "Firstname is required <br>";
    } else {
        $firstname = test_input($_POST["user_firstname"]);
    }
    if (empty($_POST["user_email"])) {
        $emailErr = "Email is required <br>";
    } else if (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter a valid email address";
    } else {
        $email = test_input($_POST["user_email"]);
    }
    if (empty($_POST["user_phone"])) {
        $phoneErr = "Phone number is required <br>";
    } else {
        $phone = test_input($_POST["user_phone"]);
    }
    if (empty($_POST["user_message"])) {
        $messageErr = "Message is required <br>";
    } else {
        $message = test_input($_POST["user_message"]);
    }
    if (empty($_POST["subject"])) {
        $subjectErr = "Subject is required <br>";
    } else {
        $subject = test_input($_POST["subject"]);
    }
}


$errorMessage = $nameErr . $emailErr . $phoneErr . $messageErr;

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!empty($errorMessage)) {
    echo $errorMessage;
} else {
    echo "Merci $firstname $name de nous avoir contacté à propos de $subject. <br>

    Un de nos conseiller vous contactera soit à l’adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande : <br>

    $message";
}
