<?php
namespace NumberSpeller;

/**
 * Class NumberSpellerInvalidArgumentException
 * @package NumberSpeller
 */
class NumberSpellerInvalidArgumentException extends \Exception
{
    /**
     * NumberSpellerInvalidArgumentException constructor.
     */
    public function __construct()
    {
        parent::__construct('Invalid argument, only int allowed.');
    }
}