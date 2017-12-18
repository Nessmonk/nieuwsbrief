<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Afmelden</title>
</head>
<body>
  <div class="top">
    <ul>
      <li><a href="index.php" title="Naar home">Home </a></li>
      <li><a href="inschrijven.php" title="Naar inschrijfpagina">Inschrijven </a></li>
      <li><a href="afmelden.php" title="Naar afmeldpagina">Afmelden </a></li>
      <li><a href="versturen.php" title="Naar nieuwsbrief">Nieuwsbrief Opstellen </a></li>
    </ul>
  </div>
<h1>Afmelden</h1>
<form method="post" action="process_afmelding.php">
    <table>
        <tr>
            <td>Meld mij af van de advertenties</td>
            <td>
                <input type="checkbox" name="afmelden_advertenties" value="nbafmelden" />
            </td>
        </tr>
        <tr>
            <td>Meld mij af van de nieuwsbrief:</td>
            <td>
                <input type="checkbox" name="afmelden_nieuwsbrief"/>
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="email" name="mailadres"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Save"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
