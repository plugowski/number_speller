<?php
namespace NumberSpeller;

/**
 * Class NumberSpeller
 * @package NumberSpeller
 */
abstract class NumberSpeller
{
    /**
     * @var string
     */
    protected $locale;

    /**
     * @param int $number
     * @throws NumberSpellerInvalidArgumentException
     * @return string
     */
    abstract public function verbally($number);

    /**
     * @param int $number
     * @param array $words
     * @return string
     */
    abstract public function variety($number, array $words);

    /**
     * @param int $number
     * @return array
     */
    protected function splitNumber($number)
    {
        return array_reverse(array_map(function($element){ return (int)strrev($element); }, str_split(strrev($number), 3)));
    }

    /**
     * @param mixed $number
     * @throws NumberSpellerInvalidArgumentException
     */
    protected function validateNumber($number)
    {
        if (!is_int($number)) {
            throw new NumberSpellerInvalidArgumentException();
        }
    }
}