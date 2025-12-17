<?php
// Starter PHP-scriptet

// Tjekker om formularen er sendt med POST-metoden
// Det sikrer, at siden kun kører koden, når formularen er indsendt
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Henter data fra formularen og beskytter mod HTML-injektion
    // htmlspecialchars() forhindrer, at brugeren kan indsætte HTML eller scripts
    $name = htmlspecialchars($_POST['name']);
    $persons = htmlspecialchars($_POST['persons']);
    $datetime = htmlspecialchars($_POST['datetime']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    // Modtagerens e-mailadresse
    // Her skal caféens e-mail stå
    $to = "dinmail@domæne.dk";

    // Emnet på e-mailen
    $subject = "Ny reservation";

    // Selve indholdet af e-mailen
    // Indeholder alle oplysninger fra formularen
    $message = "
Ny reservation:

Navn: $name
Antal personer: $persons
Dato og tid: $datetime
Telefon: $phone
E-mail: $email
";

    // Header der angiver afsenderens e-mail
    // Gør at mailen ser ud til at komme fra brugerens e-mail
    $headers = "From: $email";

    // Sender e-mailen
    // mail(modtager, emne, besked, headers)
    mail($to, $subject, $message, $headers);

    // Omdirigerer brugeren til en tak-side
    // Dette sker efter mailen er sendt
    header("Location: tak.html");

    // Stopper scriptet helt, så der ikke køres mere kode
    exit;
}
