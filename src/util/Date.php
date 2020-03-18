<?php
namespace util;

class Date
{
    private $day;
    private $month;
    private $year;

    public function __construct($day, $month, $year)
    {
        $arguments = func_get_args();
        if($arguments == null){
            $this->day = 1;
            $this->month = 1;
            $this->year = 2008;
        }

        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }


}