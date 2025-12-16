<?php

// Tjekker om formularen er sendt med POST-metoden
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Henter og sikrer brugerens input mod HTML-injektion
    $name = htmlspecialchars($_POST['name']);
    $persons = htmlspecialchars($_POST['persons']);
    $datetime = htmlspecialchars($_POST['datetime']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);

    // Modtagerens e-mailadresse
    $to = "dinmail@domæne.dk";

    // Emne på mailen
    $subject = "Ny reservation";

    // Selve mail-indholdet (brugerens oplysninger)
    $message = "
Ny reservation:

Navn: $name
Antal personer: $persons
Dato og tid: $datetime
Telefon: $phone
E-mail: $email
";

    // Header der angiver afsenderens e-mail
    $headers = "From: $email";

    // Sender mailen
    mail($to, $subject, $message, $headers);

    // Omdirigerer brugeren til en tak-side efter afsendelse
    header("Location: tak.html");
    exit; // Stopper scriptet helt
}
