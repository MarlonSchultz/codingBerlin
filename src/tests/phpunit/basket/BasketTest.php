<?php
/**
 * Created by PhpStorm.
 * User: marlonschultz
 * Date: 29.01.18
 * Time: 18:48
 */

namespace tests\PhpUnit\basket;

use mschultz\basket\Basket;
use PHPUnit\Framework\TestCase;


class BasketTest extends TestCase
{
    private $testClass;

    public function setUp()
    {
        $this->testClass = new Basket();
    }

    /**
     *@test
     */
    public function it_should_be_instatiated()
    {
        $this->assertTrue(is_a($this->testClass, Basket::class));
    }
}
