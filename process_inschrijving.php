<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Inschrijving gelukt</h1>
<p>Uw email adress is opgeslagen</p>

<?php
$dbc = mysqli_connect('localhost', '22563', '12345', '22563_alles') or die('Error connecting');

$voornaam = mysqli_real_escape_string($dbc, trim($POST['voornaam']));
$tussenvoegsel = mysqli_real_escape_string($dbc, trim($POST['tussenvoegsel']));
$achternaam = mysqli_real_escape_string($dbc, trim($POST['achternaam']));
$mailadres = $_POST['mailadres'];


if ($_POST['aanmelding'] == 'adaanmelden') {
    $advertenties = 1;
} else if ($_POST['aanmelding'] == 'nieuwsaanmelden') {
    $advertenties = 0;
} else if ($_POST['aanmelding'] == 'allesaanmelden') {
    $advertenties = 1;
}

if ($_POST['aanmelding'] == 'adaanmelden') {
    $nieuwsbrief = 0;
} else if ($_POST['aanmelding'] == 'nieuwsaanmelden') {
    $nieuwsbrief = 1;
} else if ($_POST['aanmelding'] == 'allesaanmelden') {
    $nieuwsbrief = 1;
}


$query = "INSERT INTO 22563_emailnieuwsbrief(voornaam, tussenvoegsel, achternaam, mailadres, nieuwsbrief, advertenties) VALUES('$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres', '$nieuwsbrief', '$advertenties')" or die('error big shit');
$result = mysqli_query($dbc, $query);
?>
</body>
</html>
