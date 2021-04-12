<?php
//Sichtbarkeit
//public: Vollzugriff für alle
//protected: nur innerhalb der Klasse und in vererbten Klassen zugreifen
//private: nur innerhalb der Klasse


class Kunde{
    //jeder kann darauf zugreifen
    public $id;

    //nur innerhalb der Klasse zugreifen
    private $adresse;

    //nur innerhalb Klasse und Vererbungen
    protected $name;

    //Um Zugriff auch von Außerhalb zu ermöglichen-> Methoden
    public function getEmail(){
        return $this -> email;
    }
}

$k1 = new Kunde();
$k1 -> id = 1;

//Fehler
//$k1 -> name = "Heinz";
?>