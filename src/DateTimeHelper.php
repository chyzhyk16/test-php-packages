<?php

declare(strict_types=1);

namespace Chyzhyk16\TestPhpPackages;

use DateTime;
use DateTimeInterface;

class DateTimeHelper
{
    /**
     * @param DateTimeInterface $dateTime
     *
     * @return bool
     */
    public static function isToday(DateTimeInterface $dateTime): bool
    {
        $currentYearDay = (new DateTime())->format('z');
        $dateYearDay = $dateTime->format('z');

        return $dateYearDay == $currentYearDay;
    }
}