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

        $result = $stringCalculator->add("");

        $this->assertEquals(0, $result);
    }

    /**
     * @test
     */
    public function givenNumber1Returns1()
    {
        $stringCalculator = new StringCalculator();

        $result = $stringCalculator->add("1");

        $this->assertEquals(1, $result);
    }

    /**
     * @test
     */
    public function givenNumber1And2Returns3()
    {
        $stringCalculator = new StringCalculator();

        $result = $stringCalculator->add("1,2");

        $this->assertEquals(3, $result);
    }


}