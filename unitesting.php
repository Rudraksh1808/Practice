<?php

require_once ("unit_testing.php");
class HelloWorld extends \PHPUnit\Framework\TestCase{
    public function test_construct(){
    $hw = new HelloWorld();

    $this -> assertType('Hello World', $hw);
}

public function testSayHello(){
$hw = new HelloWorld() ;

$string = $hw->sayHello();

$this-> assertEquals('Hello World!', $string);
}
}
?>
