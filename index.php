<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_cours</title>
</head>
<body>
      <?php

      $nom = "ui";
      $Prenom="ui";
      echo $nom;
      echo $Prenom;
      echo "<br>";
      $nomComplet =  $Prenom ." " . $nom;
      echo $nomComplet;
      echo "<br>";
      var_dump($nomComplet);
      $age = 12;
      $phrase = "Bonjour ,je m'apelle" . $nomComplet .". j'ai". $age ."ans";
      echo "<br>";
      echo strlen($nomComplet);
      echo "<br>";
      echo str_word_count($phrase);
      echo "<br>";
      echo strpos($phrase, "j");
      echo "<br>";
      echo strrev($phrase);
      echo "<br>";
      echo str_replace("12","41", $phrase);
      echo "<br>";

      $bool = true;
      var_dump($bool);
      echo"<br>";
      $condition= 1<2;
      echo $condition;
    //   tableau//
    $jourDeLaSemaine = ["lundi","mardi","mercrdi","jeudi","vendredi","samedi"];
    array_push($jourDeLaSemaine,"dimanche");
    var_dump($jourDeLaSemaine);

    for ($i=0; $i < count($jourDeLaSemaine) ; $i++) { 
        echo"<br>";
        echo $jourDeLaSemaine[$i];
    }
      ?>

</body>
</html>