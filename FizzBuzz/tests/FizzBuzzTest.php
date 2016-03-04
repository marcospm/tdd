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

}
