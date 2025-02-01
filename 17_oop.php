<?php


class User {
  // Properties are just variables that belong to a class.
  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes
  
    public $name;
    public $email;
    public $password;

      // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
  function __construct($name , $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

    // Methods are functions that belong to a class
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

// instantiate a user object
$user1 = new User("John Doe", "pieash@gmail", "1234");
$user2 = new User("Jane Doe", "jane@gmail", "1234");

$user1->name = "John Doe";
$user1->set_name(("Pieash AHmed"));


// var_dump($user1);
echo $user1->get_name();
echo "<br />";
echo $user2->email;

// inheritance
class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title){
        parent:: __construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}


$employee1 = new Employee("Pieash Ahmed", "pieash@gmail", "1234", "Developer");


echo $employee1->get_title();


?>