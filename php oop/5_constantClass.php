<?php
class MyClass {
    const PI = 3.14;
    public function getPI() {
        return self::PI;
    }
}
echo MyClass::PI; // Output: 3.14
$obj = new MyClass();
echo $obj->getPI(); // Output: 3.14

?>
