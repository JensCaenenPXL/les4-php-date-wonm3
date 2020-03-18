<?php
require_once '../vendor/autoload.php';
use util\Date;

$date1=Date::make();
$date2=Date::make(1,2);
$date3=Date::make(1,2,2001);