<?php
namespace util;

class Date
{
    private $day;
    private $month;
    private $year;

    public function __construct($day, $month, $year)
    {
        $arguments = func_num_args();
        if($arguments == 0){
            $this->day = 1;
            $this->month = 1;
            $this->year = 2008;
        }

        if($arguments == 2){
            $this->day = $day;
            $this->month = $month;
            $this->year = 2008;
        }
        else{
            $this->day = $day;
            $this->month = $month;
            $this->year = $year;
        }
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
    public function __printMonth()
    {
        // TODO: Implement __printMonth() method.
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