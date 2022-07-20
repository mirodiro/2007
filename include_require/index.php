<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
$_SESSSION["nom"]= "Ni";
$_SESSSION["prenom"]= "az";
$_SESSION["age"] =12;

setcookie ("nom","Ni" , time() +60*60);

?>




<body>
    <?php
     require"menu.php";
     include"paragraphe.php"; 

     var_dump ($_SERVER["HTTP_HOST"]);
     
     ?>
</body>
</html>