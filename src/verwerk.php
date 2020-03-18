<?php
require_once '../vendor/autoload.php';
use util\Date;

try {
    $date1=Date::make($_GET["day"],$_GET["month"],$_GET["year"]);

    echo $date1->print();
    echo "of";
    echo $date1->printMonth();

    echo "Als je 10 dagen, 2 maanden en 5 jaar toevoegt, dan krijg je de volgende datum:";

    $date1->changeDay(10);
    $date1->changeMonth(2);
    $date1->changeYear(5);

    echo $date1->print();
    echo "of";
    echo $date1->printMonth();

} catch (\Exception $dateException){
    echo $dateException->getMessage();
}


