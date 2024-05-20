<!-- final keyword can be used to prevent class inheritance -->
<?php
// Parent class
class Animal {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
    public function makeSound() {
        return "Animal sound";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

// Child class inheriting from Animal
class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}


$dog = new Dog("puppy");
$cat = new Cat("kitty");

echo $dog->getName() . " says " . $dog->makeSound() . "\n"; // Output: puppy says Bark
echo $cat->getName() . " says " . $cat->makeSound() . "\n"; // Output: kitty says Meow
?>
