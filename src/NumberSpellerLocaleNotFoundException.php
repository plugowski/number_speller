<?php
namespace NumberSpeller;

/**
 * Class NumberSpellerLocaleNotFoundException
 * @package NumberSpeller
 */
class NumberSpellerLocaleNotFoundException extends \Exception
{
    /**
     * NumberSpellerLocaleNotFoundException constructor.
     * @param string $locale
     */
    public function __construct($locale)
    {
        parent::__construct(sprintf("NumberSpellerLocale for locale %s not found!", $locale));
    }
}