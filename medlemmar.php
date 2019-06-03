<?php
  session_start();
  include_once "settings.php";
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Medlemsregister</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 1px;
        padding: 8px;
      }
     </style>
   </head>
   <body>

     <h1>Här kan du sortera medlemmar!</h1>
     <p>Tryck här för att komma <a href="framsida.php">Tillbaka</a></p>
     <br><br>
<form action="filtrering.php" method="post">
    Välj:
      <select name="Val">
        <option value="Förnamn">Förnamn</option>
        <option value="Efternamn">Efternamn</option>
        <option value="Telefonnummer">Telefonnummer</optiom>
        </select>
      <br>
    Exakt matchning:
    <input type="radio" name="matchning" value="exakt"><br>
    Delvis matchning:
    <input type="radio" name="matchning" value="partiell"><br>
    Filtrera:
    <input type="text" name="filter"><br>
     <input type="submit" value="OK"><br>
   </form>
<br><br>


<table>
  <col width="70">
  <col width="94">
  <col width="100">
  <tr>
    <td>Förnamn </td>
    <td>Efternamn</td>
    <td>Telefonnummer</td>
  </tr>
</table>

<table>
  <col width="75">
  <col width="80">
  <col width="120">
    <tr>
      <td>
        <?php
            try {
                 $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

                 $stmt = $db->query("SELECT * FROM `Personer`");

                 while ($row = $stmt->fetch()) {
                     echo $row['Förnamn']."<br>";
               }
             } catch (PDOException $e) {
               echo 'Connection failed: ' . $e->getMessage();
              }
         ?>
      </td>
      <td>
        <?php

            try {
                 $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

                 $stmt = $db->query("SELECT * FROM `Personer`");

                 while ($row = $stmt->fetch()) {
                     echo $row['Efternamn']."<br>";
               }
             } catch (PDOException $e) {
               echo 'Connection failed: ' . $e->getMessage();
              }
         ?>
      </td>
      <td>      <?php
            try {
                 $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);

                 $stmt = $db->query("SELECT * FROM `Personer`");

                 while ($row = $stmt->fetch()) {
                     echo $row['Telefonnummer']."<br>";
               }
             } catch (PDOException $e) {
               echo 'Connection failed: ' . $e->getMessage();
              }
               ?>
      </td>
    </tr>

  <?php
  $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
  $stmt = $db->query("SELECT Förnamn,Efternamn,Tfn FROM Personer");
  while($row = $stmt->fetch())
  {

    echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Tfn']."</td></tr>";
  }
 ?>
</table>

<?php echo "<br><br>"?>


   </body>
   </html>
