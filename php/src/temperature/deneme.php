<?php
include "db.php";
include "function.php";


  $db = new PDO("mysql:host=localhost;dbname=dd", "root", "");
  $db->exec("SET NAMES utf8");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


for ($x = 1; $x <= 81; $x++) {
  echo '<br>';
  $sayi = rand(-20,30);
  echo '<br>';
  $sorgu = $db->query("UPDATE btscity SET temperature = $sayi WHERE id = $x");

  if ($sorgu->rowCount() > 0) {
      echo $sorgu->rowCount() . " kayıt güncellendi.";
  } else {
      echo "Herhangi bir kayıt güncellenemedi.";
  }

}
$db = null;


