<?php
namespace NumberSpeller;

use NumberSpeller\NumberSpellerLocale\PolishSpeller;

/**
 * Class NumberSpellerFactory
 * @package NumberSpeller
 */
class NumberSpellerFactory
{
    /**
     * @param string $locale
     * @return NumberSpeller
     * @throws NumberSpellerLocaleNotFoundException
     */
    public static function create($locale)
    {
        switch ($locale) {
            case 'pl_PL' :
            case 'pl' :
                $formatter = new PolishSpeller();
                break;
            default :
                throw new NumberSpellerLocaleNotFoundException($locale);
                break;
        }
        return $formatter;
    }
}