<?php

    // for($i = 0; $i <= 10; $i++) {
    //     //echo $i == 0 ? "$i" : ": $i";
    //     echo "i = $i<br>";
    // }
     $i = 19;
    while($i < 20) {
        echo "i = $i<br>";
        $i = $i + 1;
    }
    //do while = "do first", then check
    
    do {
        echo "ii = $i<br>";
        $i = $i + 1;
    }while($i < 30);
    //foreach
    $fruits = ['apple', 'pineapple', 'orange', 'lemon'];
    /*
    for($i = 0; $i < count($fruits); $i++) {
        echo "$fruits[$i] <br>";
    }
    */
    foreach ($fruits as $index => $fruit) {
        echo " $fruit  <br>";
    }
    $person = [
        'full_name' => 'Pham Van Hau',
        'email' => 'nguuud@gmail.com',
        'age' => 43
    ];
    foreach($person as $key => $value) {
        echo "$key : $value <br>";
    }
?>  