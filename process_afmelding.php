<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Process afmelding</title>
</head>
<body>
<h1>Process afmelding</h1>

<?php
$mailadres = $_POST['mailadres'];
$dbc = mysqli_connect('localhost','22563','12345','22563_alles') or die('error connecting');
$query = "SELECT * FROM 22563_emailnieuwsbrief WHERE mailadres='$mailadres'";
$result = mysqli_query($dbc,$query);
$row = mysqli_fetch_array($result);

if($row['mailadres']){
    $query = "DELETE FROM 22563_emailnieuwsbrief WHERE mailadres='$mailadres'";
    $result = mysqli_query($dbc,$query);
    echo 'Dat email adres is verwijderd uit onze database';
} else {
    echo 'Sorry, dit email kunnen wij niet terug vinden';
}

?>


</body>
</html>
