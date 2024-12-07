<?php
namespace App;

class MagicClass {

    public function __construct() {
        echo "__construct called\n";
    }
    public function __destruct() {
        echo "__destruct called\n";
    }
    public function __call($name, $arguments) {
        echo "__call: Method {$name} does not exist, arguments: " . implode(", ", $arguments) . "\n";
    }
    public static function __callStatic($name, $arguments) {
        echo "__callStatic: Static method {$name} does not exist, arguments: " . implode(", ", $arguments) . "\n";
    }
    public function __get($name) {
        echo "__get: Attempt to access non-existent property {$name}\n";
    }
    public function __set($name, $value) {
        echo "__set: Setting value {$value} to property {$name}\n";
    }
    public function __isset($name) {
        echo "__isset: Checking if property {$name} exists\n";
    }
    public function __unset($name) {
        echo "__unset: Unsetting property {$name}\n";
    }
    public function __sleep() {
        echo "__sleep called\n";
        return []; 
    }
    public function __wakeup() {
        echo "__wakeup called\n";
    }
    public function __toString() {
        return "__toString called\n";
    }
    public function __invoke() {
        echo "__invoke called\n";
    }
    public static function __set_state($array) {
        echo "__set_state called\n";
        return new self(); 
    }
    public function __clone() {
        echo "__clone called\n";
    }
    public function __debugInfo() {
        echo "__debugInfo called\n";
    }
}

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveByX($dx)
    {
        $this->x += $dx;
    }

    public function moveByY($dy)
    {
        $this->y += $dy;
    }

    public function moveByVector(Vector $vector)
    {
        $this->x += $vector->x;
        $this->y += $vector->y;
    }

    public function __toString()
    {
        return "Point(x: $this->x, y: $this->y)";
    }
}

class Vector
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function length()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    public function isZero()
    {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicularTo(Vector $other)
    {
        return $this->x * $other->x + $this->y * $other->y == 0;
    }

    public function __toString()
    {
        return "Vector(x: $this->x, y: $this->y)";
    }
}
?>
?>
