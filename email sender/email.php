<!DOCTYPE html>
<html>
<head>
<title>My mail</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php
if (isset($_POST["send"]))
{
    $to = $_POST["recipient"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: soumyadeepghosh22@gmail.com"."\r\n"."MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=utf-8";
}

    if (mail($to, $subject, $message, $headers))
        echo "<h4>Email has sent successfully...</h4>";
    else
        echo "<h4>Sorry! Email not sent...</h4>";
?>
</body>
</html>