<?php

use PHPUnit\Framework\TestCase;

class InputParserTest extends TestCase
{
    public function setUp(): void{
        $this->testInput = '6 4 5 2 1000
        2 0 rue-de-londres 1
        0 1 rue-d-amsterdam 1
        3 1 rue-d-athenes 1
        2 3 rue-de-rome 2
        1 2 rue-de-moscou 3
        4 rue-de-londres rue-d-amsterdam rue-de-moscou rue-de-rome
        3 rue-d-athenes rue-de-moscou rue-de-londres';
    }

    private function getInputParser():InputParser{
        return new InputParser($this->testInput);
    }

    public function testGetTestDuration(){
        $testDuration = $this->getInputParser()->getTestDuration();
        $this->assertEquals(6, $testDuration);
    }

    public function testGetNumberOfIntersection(){
        $intersections = $this->getInputParser()->getIntersectionCount();
        $this->assertEquals(4, $intersections);
    }

    public function testGetNumberOfStreets(){
        $streets = $this->getInputParser()->getStreetCount();
        $this->assertEquals(5, $streets);
    }

    public function testGetNumberOfCars(){
        $cars = $this->getInputParser()->getCarCount();
        $this->assertEquals(2, $cars);
    }

    public function testGetPointForCar(){
        $points = $this->getInputParser()->getPoints();
        $this->assertEquals(1000, $points);
    }
}