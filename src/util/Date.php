<?php

namespace util;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $MONTHS = array("jan", "feb", "mrt", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec");

    private function __construct($day, $month, $year)
    {
        $day = 1;
        $month = 1;
        $year = 2008;
        if ($day > 31) {
            throw new DateException("Er zijn maar 31 dagen!");
        } else {
            $this->day = $day;

        }

        if ($month > 12) {
            throw new DateException("Er zijn maar 12 maanden!");
        } else {
            $this->month = $month;
        }

        $this->year = $year;
    }

    public function print()
    {
        return "$this->day/$this->month/$this->year";
    }

    public function printMonth()
    {
        return $this->day . "/" . self::$MONTHS[$this->month - 1] . "/" . $this->year;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function changeDay($day): void
    {
        $new_day = $this->day + $this->day;
        if ($new_day > 31) {
            $new_day -= 31;
        }
        $this->day = $new_day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function changeMonth($month): void
    {
        $new_month = $this->month + $month;
        if ($new_month > 12) {
            $new_month -= 12;
        }
        $this->month = $new_month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function changeYear($year): void
    {
        $this->year += $year;
    }

    public static function make($day, $month, $year)
    {
        return new Date($day, $month, $year);
    }

}