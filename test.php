<?php
 class StackTest extends PHPUnit_Framework_TestCase
 {
     public function testPushAddPop()
     {
         $stack = array();
         $this->assertEquals(0, count($stack));

         array_push($stack, 'foo');
         $this->assertEquals('foo', $stack[count($stack)-1]);
         $this->assertEquals(1, count($stack));

         $this->assertEquals('foo', array_pop($stack));
         $this->assertEquals(0, count($stack));
     }

     public function testOOOO()
     {
//         $this->assertEquals(true, false);
         $this->assertNotEquals(true, false);
     }

     public function testAdd()
     {
         $expected = 6;
         $a= 2;
         $b=4;
         $this->assertEquals($expected, $a + $b);
     }

 }