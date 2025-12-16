<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars($_POST['name']);
    $persons = htmlspecialchars($_POST['persons']);
    $datetime = htmlspecialchars($_POST['datetime']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    $to = "dinmail@domæne.dk";
    $subject = "Ny reservation";

    $message = "
Ny reservation:

Navn: $name
Antal personer: $persons
Dato og tid: $datetime
Telefon: $phone
E-mail: $email
";

    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    header("Location: tak.html");
    exit;
}



