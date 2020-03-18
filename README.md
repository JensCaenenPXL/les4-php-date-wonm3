# Les 4 PHP OOP & Exceptions

Maak de PHP klasse Date zoals beschreven in de opgaven:
- OOP oefening (2)
- Exceptions oefening (1)

## OOP oefening (2)
(a) Maak de klasse Date in het bestand src/Util/Date.php

Date heeft eigenschappen day, month, year.

Voorzie een constructor om een datum op volgende manieren te maken: 
* zonder argumenten: datum = 1/1/2008
* met enkel een argument voor dag en maand: datum = dag/maand/2008 
* met 3 argumenten

Denk er aan dat je maar één functie __construct kan voorzien in de klasse Date. Je kan hier werken met default arguments.

De datum moet in het formaat 1/1/2008 afgedrukt kunnen worden via de methode print(). Voorzie een extra methode printMonth() die de datum als volgt afdrukt: 1/jan/2008.

Maak hiervoor gebruik van een private static array $MONTHS.

Voorzie setters en getters voor dag, maand en jaar.

Maak in invoer.html een formulier om dag, maand en jaar in te geven. In verwerk.php wordt een Date-object aangemaakt en via de methode printMonth afgedrukt.
(b) Vertrek van bovenstaande code. Zorg ervoor dat de constructor private is en voorzie een static functie make om Date-objecten aan te maken.

     $date1=Date::make();
     $date2=Date::make(1,2);
     $date3=Date::make(1,2,2001);

Maak Date immutable. Verwijder de setters en voorzie de functies changeDay, changeMonth, changeYear

    $date4=$date->changeDay(2);


## Exceptions oefening (1)
Pas de klasse Date (zie OOP) aan. Zorg ervoor dat voor misse data een DateException opgeworpen wordt.
