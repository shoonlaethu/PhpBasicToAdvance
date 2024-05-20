<!-- 
trait TraitName {
  // some code...
}

class MyClass {
  use TraitName;
} -->
<!-- Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected). -->


<?php
// Define a trait
trait Greet {
    public function sayHello() {
        return "Hello!";
    }

    public function sayGoodbye() {
        return "Goodbye!";
    }
}

// Define another trait with conflicting method names
trait GreetJapan{
    public function sayHello() {
        return "ohayou!";
    }
}

// Define a class that uses the traits
class MyClasses {
    use Greet, GreetJapan {
        GreetJapan::sayHello insteadof Greet;
        Greet::sayHello as sayHelloEnglish;
        GreetJapan::sayHello as sayHelloJapan;
    }

    public function getGreetings() {
        return $this->sayHelloEnglish() . " " . $this->sayHelloJapan() . " " . $this->sayGoodbye();
    }
}
$obj = new MyClasses();
echo $obj->getGreetings(); // Output: Hello! ohiyou! Goodbye!
?>
