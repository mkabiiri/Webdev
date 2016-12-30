<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Trouver une ville en France</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<h1 align="center">Trouver une ville en France <h1>
<div class="container">
 <form action="find_process.php" method="POST">
   <input type="text" placeholder="Indiquer un code postal" name="cp" maxlength="5">
    <input type="text" placeholder="<?=$_SESSION["message"] ?>" name="vill_name" maxlength="100" disabled>
   <input type="submit" value="Valider">
 </form>
 </div>
</body>
</html>