<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function givenEmptyStringReturns0()
    {
        $stringCalculator = new StringCalculator();

        $this->assertEquals(0, $stringCalculator->add(""));
    }

    /**
     * @test
     */
    public function givenNumber1Returns1()
    {
        $stringCalculator = new StringCalculator();

        $this->assertEquals(1, $stringCalculator->add("1"));
    }

    /**
     * @test
     */
    public function givenNumbers1And2Returns3()
    {
        $stringCalculator = new StringCalculator();

        $this->assertEquals(3, $stringCalculator->add("1,2"));
    }

    /**
     * @test
     */
    public function givenMultipleNumbersReturnsItsAddition()
    {
        $stringCalculator = new StringCalculator();

        $this->assertEquals(10, $stringCalculator->add("1,2,2,3,2"));
    }


}