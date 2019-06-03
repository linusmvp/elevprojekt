<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Framsida</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 3px;
        padding: 4px;
      }
     </style>
   </head>
   <body>

<h1>Var hälsad <?php echo $_SESSION['Förnamn'] ?><?php echo "  "?><?php echo  $_SESSION['Efternamn']."!" ?></h1>
<p>Till <a href="medlemmar.php">Existerande medlemmar</a></p>



   </body>
   </html>
