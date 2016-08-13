<?php
namespace NumberSpellerTest;

use NumberSpeller\NumberSpellerFactory;
use NumberSpeller\NumberSpellerInvalidArgumentException;
use NumberSpeller\NumberSpellerLocaleNotFoundException;

/**
 * Class NumberSpellerTest
 * @package NumberSpellerTest
 */
class NumberSpellerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldThrowLocaleNotFoundException()
    {
        $this->setExpectedException(NumberSpellerLocaleNotFoundException::class);
        NumberSpellerFactory::create('NON_EXISTS');
    }

    /**
     * @test
     */
    public function shouldSpellNumbers()
    {
        $formatter = NumberSpellerFactory::create('pl_PL');

        $test = [
            0 => 'zero',
            1 => 'jeden',
            2 => 'dwa',
            5 => 'pięć',
            10 => 'dziesięć',
            13 => 'trzynaście',
            20 => 'dwadzieścia',
            22 => 'dwadzieścia dwa',
            100 => 'sto',
            101 => 'sto jeden',
            200 => 'dwieście',
            120 => 'sto dwadzieścia',
            179 => 'sto siedemdziesiąt dziewięć',
            212 => 'dwieście dwanaście',
            279 => 'dwieście siedemdziesiąt dziewięć',
            1000 => 'jeden tysiąc',
            1001 => 'jeden tysiąc jeden',
            1200 => 'jeden tysiąc dwieście',
            4000 => 'cztery tysiące',
            100200000 => 'sto milionów dwieście tysięcy'
        ];

        foreach ($test as $value => $text) {
            self::assertEquals($text, $formatter->verbally($value));
        }
    }

    /**
     * @test
     */
    public function shouldSpellCurrencyWithFloatsAsString()
    {
        $this->setExpectedException(NumberSpellerInvalidArgumentException::class);
        NumberSpellerFactory::create('pl_PL')->verbally(1.25);
    }
}