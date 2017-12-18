<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inschrijven</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
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
<form method="post" action="process_inschrijving.php">
    <div>
        <form action="/action_page.php">
          <table>
              <tr>
                  <td>Voornaam:</td>
                  <td>
                      <input type="text" name="voornaam"/>
                  </td>
              </tr>
              <tr>
                  <td>Tussenvoegsel:</td>
                  <td>
                      <input type="text" name="tussenvoegsel"/>
                  </td>
              </tr>
              <tr>
                  <td>Achternaam:</td>
                  <td>
                      <input type="text" name="achternaam"/>
                  </td>
              </tr>
              <tr>
                  <td>Email:</td>
                  <td>
                      <input type="email" name="mailadres"/>
                  </td>
              </tr>
              <tr>
                  <td>Stuur mij een email voor advertenties en aanbiedingen</td>
                  <td>
                      <input type="radio" name="aanmelding" value="adaanmelden"/>
                  </td>
              </tr>
              <tr>
                  <td>Stuur mij een nieuwsbrief, 1 niet meer plz :)</td>
                  <td>
                      <input type="radio" name="aanmelding" value="nieuwsaanmelden" required/>
                  </td>
              </tr>
              <tr>
                  <td>Stuur mij een nieuwsbrief, en gekke aanbiedingen</td>
                  <td>
                      <input type="radio" name="aanmelding" value="allesaanmelden" required/>
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
    </div>

</form>
</body>
</html>
