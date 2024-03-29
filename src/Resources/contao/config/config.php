<?php

/*
 * This file is part of Contao Jalali Date Bundle.
 * 
 * (c) Hamid Abbaszadeh 2021 <info@respinar.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/respinar/contao-jalalidate-bundle
 */

use Respinar\ContaoJalalidateBundle\EventListener\ParseDateListener;

$GLOBALS['TL_HOOKS']['parseDate'][] = [ParseDateListener::class, '__invoke'];