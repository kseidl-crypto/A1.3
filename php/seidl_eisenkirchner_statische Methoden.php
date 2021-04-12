<?php
//Static -> statische Methoden und EIgenschaften -> gelten global und sind nicht an einzelnes objekt gekoppelt
//Klassenname :: methodenname -> Aufruf


//KLasse die ein A mit angegebenen hs schreitb
class Ah {
    public $a = 'A';

    public static function ha_s($zahl){
        for($i = 0; $i < $zahl; $i ++){
            $a += 'h';
        }
        $a += '!';
        return $a;
}


}
//Sollte nun das A ausgeben
echo Ah :: ha_s(3);