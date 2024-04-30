<?php
   
    $name = 'Hau'; //string
    $age = 18;//integer
     echo $age;
    $has_mercedes = false;
    echo $has_mercedes;
    var_dump($has_mercedes);
    $product_price = 22.45; //Float
    var_dump($product_price);
    echo "<br>";
 
   echo $name.' is '.$age.' years old'."<br>";
   // noi chuoi
   //echo "${name} is ${age} years old...";
   //echo '1' + '2'; //ket qua la 3 , khac voi JS
   $sum = '2' + '3';
   //var_dump($sum);
   //echo 5 * 3;
   //echo 10 / 2;
   //echo 5 / 0;
    echo 10 % 3;
    //constants
    define('SERVER_NAME', 'localhost');
    define('DATABASE_NAME', 'test_db');
    echo "server: ".SERVER_NAME.', db : '.DATABASE_NAME;
?>