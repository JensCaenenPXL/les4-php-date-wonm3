<?php

namespace util;
use Exception;

class DateException extends Exception
{

    protected $details;

    public function __construct($details) {
        $this->details = $details;
        parent::__construct($details);
    }

    public function __toString() {
        return 'The date has not been entered correctly ' . $this->details;
    }
}