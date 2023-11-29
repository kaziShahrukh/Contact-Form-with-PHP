<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader = "Form:" .$name. "<" .$email.">\r\n";

$recipient = "shahrukh6269@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Thank you contacting us we get back to you as soon as possible</h1>

        <p class="back">Go back to the <a href="index.html">Homepage</a>.</p>



    </div>

</body>

</html>



';

?>

