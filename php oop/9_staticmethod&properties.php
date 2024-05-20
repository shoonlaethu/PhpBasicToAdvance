<!-- Static methods can be called directly - without creating an instance of the class first. -->
<!-- ClassName::staticMethod(); -->
<?php
class MyClass {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}
class MathUtils {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }
}

// Creating instances of MyClass
$obj1 = new MyClass();
$obj2 = new MyClass();

echo MyClass::$count . "\n"; // Output: 2
echo MyClass::getCount() . "\n"; // Output: 2

echo MathUtils::add(5, 3) . "\n"; // Output: 8
echo MathUtils::subtract(10, 4) . "\n"; // Output: 6
?>
