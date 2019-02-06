<?php

class Auto
{
    public $model;
    public $prijs;
    public $kleur;
    public $datum_verkoop;
    public $datum_inkoop;
    public $datum_apk;
}

class Klant
{
    public $auto_id;
    public $naam;
    public $adres;
    public $woonplaats;
    public $postcode;
    public $telefoon;
    public $email;
}

$auto = new Auto();
$auto->model = "A";
$auto->prijs = 15000;
$auto->kleur = "Blauw";
$auto->datum_verkoop = 10-10-2010;
$auto->datum_inkoop = 9-9-2009;
$auto->datum_apk = 11-11-2011;


$klant = new Klant();
$klant->auto_id = 1;
$klant->naam = "Gerard Joling";
$klant->adres = "Pietjepukstraat 1";
$klant->woonplaats = "Rotterdam";
$klant->postcode = "2020AB";
$klant->telefoon = "1234567890";
$klant->email = "asdfghjkl@qwertyuiop.com";

print_r($auto);
echo "<br>";
print_r($klant);

