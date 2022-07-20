<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>
   <?php
//      $var1 = "var1";
//      function myFunc($var){
//         echo $var;
//         echo "<br>";
//         $varDeFunc = "varDeFunc"; 
//         echo $varDeFunc;
//      }
//    myfunc($var1);
  define("URL_SITE","http://www.site.fr");
$var1 = "var1";
     function myFunc(){
        static $i =0;
         $i++;
         echo $i;
         echo "<br>";
         echo URL_SITE

    }
    //  myFunc(); 
    //  myFunc(); 
    //  myFunc();
    echo URL_SITE
   ?> 
</body>
</html>