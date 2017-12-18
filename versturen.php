<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Versturen</title>
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
<h1>Verstuur emails enzo</h1>
<form method="post" action="process_versturen.php">
    <label> Bericht invoeren: </label> <br>
    <textarea cols="30" rows="20" name="message"></textarea><br>
    <label>Onderwerp:</label> <br>
    <input type="text" name="subject"/><br>
    <label>Wachtwoord</label> <br>
    <input type="password" name="password"/><br>
    <br><br><br>
    <input type="submit" value="verstuur"/>
</form>
</body>
</html>
