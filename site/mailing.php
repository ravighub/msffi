<?php
$email = $_POST['email'];
$file = fopen("mailing.txt", "a");
fwrite($file, "\n" . $email);
fclose($file);

header("Location: mailing_thankyou.php");
?>