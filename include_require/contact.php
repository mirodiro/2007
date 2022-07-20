<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
?>
   
<body>
<?php
     require "menu.php";
     include "paragraphe.php";

     if isset($_GET["prenom"])&& isset($_GET["prenom"]) && isset($_GET["age"])

     echo "<h1>Bonjour, je m'appelle " . $_GET["prenom"] . " " . $_GET["nom"] . "." . " J'ai " . $_GET["age"] . " ans." . "</h1>";
     if(isset($_POST["prenom"])){
     echo"<h1>Bonjour,je m apelle". $_GET["prenom"] . " " . $_GET["nom"] . "." . " J'ai " . $_GET["age"] . " ans." . "</h1>";
     }
     session_start();
     echo ["nom"] = "az"
     ?>
</body>
</html>