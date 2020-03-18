<?php
class DateException extends Exception
{

    protected $details;

    public function __construct($details) {
        $this->details = $details;
        parent::__construct();
    }

    public function __toString() {
        return 'The date has not been entered correctly ' . $this->details;
    }
}