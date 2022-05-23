<?php
require('vendor/autoload.php');
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase {
    public function testExample() {
        $expected = 'hoge';
        $this->assertEquals($expected, 'hoge');
    }
}