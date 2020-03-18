<?php
require_once '../vendor/autoload.php';
use util\Date;

$date1=Date::make($_GET["day"],$_GET["month"],$_GET["year"]);

echo $date1->printMonth();
