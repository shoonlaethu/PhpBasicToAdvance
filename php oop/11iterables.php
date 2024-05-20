
<!-- The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function arguments and function return values. -->
<?php
class MyIterator implements Iterator {
    private $position = 0;
    private $data = [4, 5, 6];

    // The current() method returns the current element, 
    // the key() method returns the current key, 
    // the next() method moves the internal pointer to the next element, 
    // the rewind() method resets the internal pointer to the beginning
    // the valid() method checks if the current position is valid.   
    public function current(): mixed {
        return $this->data[$this->position];
    }

    public function key(): int {
        return $this->position;
    }

    public function next(): void {
        ++$this->position;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return isset($this->data[$this->position]);
    }
}


$iterator = new MyIterator();
foreach ($iterator as $key => string($value)) {
    echo "Key: $key, Value: $value\n";
}
?>
