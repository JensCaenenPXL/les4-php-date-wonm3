<?php
require_once '../vendor/autoload.php';
use util\Date;

try {
    $date1=Date::make($_GET["day"],$_GET["month"],$_GET["year"]);

    print $date1->print();
    print " of ";
    print $date1->printMonth();

    print "Als je 10 dagen, 2 maanden en 5 jaar toevoegt, dan krijg je de volgende datum:";

    $date1->changeDay(10);
    $date1->changeMonth(2);
    $date1->changeYear(5);

    print $date1->print();
    print " of ";
    print $date1->printMonth();

} catch (\util\DateException $dateException){
    print $dateException->getMessage();
}


