<?php

namespace util;

class Date
{
    private $day;
    private $month;
    private $year;
    private static $MONTHS = array("jan", "feb", "mrt", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec");

    private function __construct($day = 1, $month = 1, $year = 2008)
    {
        try{
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
        } catch(DateException $DateException) {
            throw new DateException();
        }


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

    public static function make($day,$month, $year){
      return new Date($day,$month,$year);
    }

}