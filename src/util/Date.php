<?php

namespace util;

class Date
{
    private int $day;
    private int $month;
    private int $year;
    private static array $MONTHS = array("jan", "feb", "mrt", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec");

    public function __construct($day, $month, $year)
    {
        $arguments = func_num_args();
        if ($arguments == 0) {
            $this->day = 1;
            $this->month = 1;
            $this->year = 2008;
        }
        if ($arguments == 2) {
            $this->day = $day;
            $this->month = $month;
            $this->year = 2008;
        } else {
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        }
    }

    public function print()
    {
        return "$this->day/$this->month/$this->year";
    }

    public function printMonth()
    {
        $month = null;
        foreach (self::$MONTHS as $months) {
            if ($months == $this->month) {
                $month = $months;
            }
            else{
                throw new \DateException();
            }
        }
        return "$this->day/$month/$this->year";
    }

    public function getDay()
    {
        return $this->day;
    }

    public function changeDay($day): void
    {
        $this->day = $day;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function changeMonth($month): void
    {
        $this->month = $month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function changeYear($year): void
    {
        $this->year = $year;
    }

}