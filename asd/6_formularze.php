<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form   method="get">
      <input type="text" name="name" placeholder="imię" autofocus><br><br>
      <input type="text" name="surname" placeholder="nazwisko"><br><br>
      <input type="number" name="age" placeholder="wiek"><br><br>
      <input type="submit" name="button" value="zatwierdz"><br><br>
    </form>
    <?php
if(!empty($_GET['name']) && empty($_GET['surname']) && !empty($_GET['age'])) {

  $imie = $_GET['name'];
  $nazwisko = $_GET['surname'];
  $age = $_GET['age'];


  echo "imie:$imie<br> nazwisko:$nazwisko<br> wiek:$_age<br>";}
     ?>
  </body>
</html>
