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
    echo "<br>";
    $obj = new stdClass();
    var_dump($obj);


    class Personne{
        public $prenom;
        public $nom;
        public function __construct($prenom, $nom){
            $this->prenom = $prenom;
            $this->nom = $nom;
        }

        public function parler(){
            echo  $this->prenom . "bla bla bla";
            echo "<br>";
            $this->_test();
        }

        private function _test(){
            echo "Ceci est mon test privé.";
            echo "<br>";
        }
    }
       
    class Stagiaire extends Personne {
        public function __construct($prenom, $nom, $estTimide){
            parent::__construct($prenom, $nom);
            $this->estTimide = $estTimide;
        }
    }
    public function sePresenter(){
    if (!$this->estTimide) {
        echo $this->prenom . " ". $this->nom ." "."se presenter.";
    }else{
        echo $this->prenom . " ". $this->nom ." "."ne se presente pas.";
    }
echo"<br>";
    }
    $toto = new Personne("Jean","Mart");
    var_dump($toto);
    $jessica = new Stagiaire("Jessica","JOSPEHINE",true);
    $richard = new Stagiaire("richard","MALAC",false);


    var_dump($jessica);
    echo "<br>";
    var_dump($richard);

    $jessica->parler();
    $jessica->sePresenter();
    $richard->sePresenter();

    
    // $jessica->test();
      ?>

</body>
</html>