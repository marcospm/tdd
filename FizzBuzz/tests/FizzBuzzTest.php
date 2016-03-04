<?php

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../FizzBuzz.php';

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
      protected $oFizzBuzz;

    protected function setUp()
    {
        $this->oFizzBuzz = new FizzBuzz();
    }

    public function testTypeClass()
    {
        $this->assertInstanceOf('FizzBuzz', $this->oFizzBuzz, 'None expected object type');
    }

    public function testExecute1()
    {
        $this->assertEquals(1, $this->oFizzBuzz->get(1));
    }

    public function testExecute2()
    {
        $this->assertEquals(2, $this->oFizzBuzz->get(2));
    }

    public function testExecute3()
    {
        $this->assertEquals('Fizz', $this->oFizzBuzz->get(3));
    }

    public function testExecute5()
    {
        $this->assertEquals('Buzz', $this->oFizzBuzz->get(5));
    }

    public function testExecetuteUpTo5()
    {
        $this->assertEquals('1,2,Fizz,4,Buzz', $this->oFizzBuzz->upTo(5));
    }
}
