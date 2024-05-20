<?php
  class Person {
    // Properties
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method
    public function introduce() {
        return "Hi, I'm " . $this->name . " and I'm " . $this->age . " years old.";
    }
  }
$person1 = new Person("shoon", 21);
echo $person1->introduce();  // Output: Hi, I'm shoon and I'm 21 years old.

