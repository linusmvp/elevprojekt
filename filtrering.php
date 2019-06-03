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
        border-width: 2px;
        padding: 9px;
      }
     </style>
   </head>
   <body>


<table>
  <tr><td>Förnamn</td><td>Efternamn</td><td>Telefon</td></tr>

  <?php
$val1 = $_POST['Val'];
$val2 = $_POST['matchning'];
$val3 = $_POST['filter'];
  if($val1 == "Förnamn")
  {
    if($val2 == "exakt")
    {
      $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
      $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer WHERE Förnamn LIKE '$val3' ORDER BY Förnamn");
      while($row = $stmt->fetch())
      {
        echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
      }
    }
    else if($val2 == "partiell")
    {
      $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
      $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer WHERE Förnamn LIKE '%$val3%' ORDER BY Förnamn");
      while($row = $stmt->fetch())
      {
        echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
      }
    }
    else{
    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer ORDER BY Förnamn");
    while($row = $stmt->fetch())
    {
      echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
    }
  }
  }
  else if($val1 == "Efternamn")
  {
      if($val2 == "exakt")
      {
        $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer WHERE Efternamn LIKE '$val3' ORDER BY Efternamn");
        while($row = $stmt->fetch())
        {
          echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
        }
      }
      else if($val2 == "partiell")
      {
        $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer WHERE Efternamn LIKE '%$val3%' ORDER BY Efternamn");
        while($row = $stmt->fetch())
        {
          echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
        }
      }
    else{
    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer ORDER BY Efternamn");
    while($row = $stmt->fetch())
    {
      echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
    }
  }
  }
  else if($val1 == "Telefonnummer")
  {
      if($val2 == "exakt")
      {
        $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer WHERE Telefonnummer LIKE '$val3' ORDER BY Telefonnummer");
        while($row = $stmt->fetch())
        {
          echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
        }
      }
      else if($val2 == "partiell")
      {
        $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
        $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer WHERE Telefonnummer LIKE '%$val3%' ORDER BY Telefonnummer");
        while($row = $stmt->fetch())
        {
          echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
        }
      }
    else{
    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT Förnamn,Efternamn,Telefonnummer FROM Personer ORDER BY Telefonnummer");
    while($row = $stmt->fetch())
    {
      echo "<tr><td>".$row['Förnamn']."</td><td>".$row['Efternamn']."</td><td>".$row['Telefonnummer']."</td></tr>";
    }
  }
  }
 ?>

</table>
