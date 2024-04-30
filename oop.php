<?php
class User
{
    public $name;
    public $email;
    public $age;
    public $password;
    public $title;
    //constructor: ham khoi tao 

    public function __construct($name, $email, $age, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }
    function set_name($name)
    {
        $this->name = $name;
    }
    //getter
    function get_name()
    {
        return $this->name;
    }
}
//init an object
$user1 = new User('john', 'john@gmail.com', 23, '11223');
$user2 = new User('tony', 'tony@gmail.com', 19, 'abc12');
// $user1->password = '123456';
//$user1->set_name('Hau123');
//$user2->set_name('ngu');

// echo $user1->get_name()."<br>";
// echo $user2->get_name();

// echo $user2->email;    
// echo $user2->name;
//Ke thua
class Employee extends User
{
    public function __construct($name, $email, $age, $password, $title)
    {
        parent::__construct($name, $email, $age, $password);
        $this->title = $title;
    }
    public function get_title()
    {
        return $this->title;
    }
}
$employee1 = new Employee(
    'Taylor sw',
    'uuu@gmail.com',
    30,
    '123456',
    'singer'
);
echo $employee1->get_title();
print_r($employee1);
