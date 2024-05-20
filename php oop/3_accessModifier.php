<?php
class MyClass {
    public $publicVar = 'Public Variable';
    protected $protectedVar = 'Protected Variable';
    private $privateVar = 'Private Variable';
    
    public function publicMethod() {
        return 'Public Method';
    }
    
    protected function protectedMethod() {
        return 'Protected Method';
    }
    
    private function privateMethod() {
        return 'Private Method';
    }
    
    public function accessAll() {
        $output = "Public property: " . $this->publicVar . "\n";
        $output .= "Protected property: " . $this->protectedVar . "\n";
        $output .= "Private property: " . $this->privateVar . "\n";
        
        $output .= "Public method: " . $this->publicMethod() . "\n";
        $output .= "Protected method: " . $this->protectedMethod() . "\n";
        $output .= "Private method: " . $this->privateMethod() . "\n";
        
        return $output;
    }
    
}
class SubClass extends MyClass {
    public function accessProtected() {
        return $this->protectedVar; // Accessible from subclass
    }
}


$obj = new MyClass();
// Accessing public members
echo $obj->publicVar . "\n";        // Output: Public Variable
echo $obj->publicMethod() . "\n";   // Output: Public Method

// Attempting to access protected and private members directly will result in an error
// echo $obj->protectedVar;   // Error: Cannot access protected property
// echo $obj->privateVar;     // Error: Cannot access private property
// echo $obj->protectedMethod(); // Error: Cannot access protected method
// echo $obj->privateMethod();   // Error: Cannot access private method

// Accessing protected and private members indirectly via a public method
echo $obj->accessAll();//oki

$subobj = new SubClass();
echo $subobj->accessProtected(); // Output: Protected Variable

