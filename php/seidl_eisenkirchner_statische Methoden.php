<?php
//Static -> statische Methoden und EIgenschaften -> gelten global und sind nicht an einzelnes objekt gekoppelt
//Klassenname :: methodenname -> Aufruf


//KLasse die ein A mit angegebenen hs schreitb
class Ah {


    public static function ha_s($zahl){
        $a = "A";
        for($i = 0; $i < $zahl; $i ++){
            $a = $a.'h';
        }
        $a = $a.'!';
        return $a;
    }


}
echo "<br>";
//Sollte nun das A ausgeben
echo Ah :: ha_s(3);