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

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day): void
    {
        $this->day = $day;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month): void
    {
        $this->month = $month;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }




}