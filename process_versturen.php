<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Process versturen</title>
</head>
<body>
<h1>Process versturen</h1>
<?php

$message = $_POST['message'];
$subject = $_POST['subject'];
$password = $_POST['password'];

if ($password == '12345') {

    $from = 'gekkeman@noreply.nl';
    $dbc = mysqli_connect('localhost', '22563', '12345', '22563_alles') or die ("error connecting");
    $query = "SELECT * FROM 22563_emailnieuwsbrief";
    $result = mysqli_query($dbc, $query) or die('Error querying');

    while ($row = mysqli_fetch_array($result)) {

        $sendmail = $row['nieuwsbrief'];
        if ($sendmail == 1) {
            $to = $row['mailadres'];
            mail($to, $subject, $message, 'From:' . $from);
            echo 'Mail verstuurd naar ' . $to;
        } else {
            echo 'dit systeem werkt niet';
        }
    }

} else {
    echo 'Fuck off. Is niet jou website vriend!';
}

?>
</body>
</html>
