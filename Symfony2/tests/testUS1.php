<?php
namespace phpUnit\Test;
use PHPUnit\src\Framework\TestCase;

class SampleTest extends \PHPUnit_Framework_TestCase{

    public function testTrueIsTrue(){
        $foo = true;
        $this->assertTrue($foo);
    }

}

?>