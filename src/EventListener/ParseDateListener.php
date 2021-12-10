<?php
// src/EventListener/ParseDateListener.php
namespace Respinar\ContaoJalalidateBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

use IntlDateFormatter;

use Respinar\ContaoJalalidateBundle\Helper\jDateTime;

/**
 * @Hook("parseDate")
 */
class ParseDateListener
{
    public function __invoke(string $formattedDate, string $format, ?int $timestamp): string
    {
        // Modify or create your own formatted date …

        if ($GLOBALS['TL_LANGUAGE'] == 'fa') {
			if ($intTstamp === null)
			{
				$strDate = jDateTime::date($format);
			}
			else
			{
				$strDate = jDateTime::date($format, $timestamp);
			}
		} else {
			$strDate = $formattedDate;
		}

		return $strDate;
        

        /*
        if ($GLOBALS['TL_LANGUAGE'] == 'fa' || $GLOBALS['TL_LANGUAGE'] == 'fa_IR') {

            $formatter = new IntlDateFormatter(
                "fa_IR@calendar=persian", 
                IntlDateFormatter::FULL, 
                IntlDateFormatter::FULL, 
                'Asia/Tehran', 
                IntlDateFormatter::TRADITIONAL, 
                $format);

            return $formatter->format($timestamp);

        } else {

            return $formattedDate;

        }*/

        
    }
}