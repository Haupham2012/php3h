<?php
    
    $some_numers = [1,3,4,6];
    $fruits = array('pineapple', 'melon', 'apple');
    // print_r($fruits);
    // echo $fruits[2];
    $colors = [
        3 => 'red',//key - value
        5 => 'green',
        7 => 'blue'
    ];
    //echo $colors[5];
    //key as a string
    $hex_colors = [
        'red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF',  
    ];
    // echo $hex_colors['green'];
    $person = [
        'full_name' => 'pham Van Hau',
        'age' => 22,
        'email' => 'ngu@gmail.com' 
    ];
    //print_r($person);
    //echo $person['email'];
    $persons = [
        [
            'full_name' => 'pham Van Hau',
            'age' => 43,
            'email' => 'nguu@gmail.com'
        ],
        [
            'full_name' => 'ngungu ngu',
            'age' => 23,
            'email' => 'ngu1@gmail.com' 
        ],
        [
            'full_name' => 'nguyen van C',
            'age' => 24,
            'email' => 'cccccc@gmail.com' 
        ]
    ];
    //print_r($persons);
    //echo $persons[2]['email'];
    var_dump(json_encode($persons));
?>