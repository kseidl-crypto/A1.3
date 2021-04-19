<?php
//Referenzierung kann im mehtodenKonstruktorenOOP verwendet werden

//Referenzieren in PHP

//-new- => neue Objekte erzeugt werden
$sam = new Kunde('Sam', 'Müller', 1, 'sam@müller.at');

//durch Pfeile -> auf Eigenschaften der Objekte zugreifen
echo "ID: ".$sam->getKid();


//this -> Eigenschaften oder Methoden innerhalb der Klasse aufrufen -> bezieht sich auf eigenes Objekt