
class Person {
    // Properties
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "Constructor called for $this->name\n";
    }

    // Method
    public function introduce() {
        return "Hi, I'm " . $this->name . " and I'm " . $this->age . " years old.";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor called for $this->name\n";
    }
}
$person1 = new Person("shoon", 21);
echo $person1->introduce() . "\n";  // Output: Hi, I'm shoon and I'm 21 years old.

// The destructor will be called automatically at the end of the script
// Destructor called for shoon

