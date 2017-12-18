<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beheren</title>
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1> Beheren </h1>
    <?php
    $dbc = mysqli_connect('localhost','root','root','22563_barst') or die ("Error.");
    $query = "SELECT * FROM 22563_emailnieuwsbrief";
    $result = mysqli_query($dbc,$query) or die('Error querying');
     ?>
    <table>
      <tr>
        <td>Mailadres</td>
        <td>knopjes </td>
      </tr>
  <?php
    while($row = mysqli_fetch_array($result)){
        echo '<tr><td>'. $row['mailadres'] . '</td>';
        echo '<td><form method="post" action="process_edit">';
        echo '<input type="hidden" name="id" value"' . $row['id'] . '" />';
        echo '<input type="submit" name="submit" value="edit" />';
        echo '</form> </td> </tr>';
      }
   ?>
  </body>
</html>
