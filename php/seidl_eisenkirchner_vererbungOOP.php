<?php

/**
 * Class Person
 */
class Person{
    protected $vorname;
    protected $nachname;
    protected $geburtsjahr;

    /**
     * Person constructor.
     * @param $vorname Vorname der Person
     * @param $nachname Nachname der Person
     * @param $geburtsjahr Geburtsjahr der Person
     */
    public function __construct($vorname, $nachname, $geburtsjahr){
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->geburtsjahr = $geburtsjahr;
    }

    /**
     * @return string die Person als String dargestellt
     */
    public function toString(){
        return "$this->vorname $this->nachname, $this->geburtsjahr";
    }

    /**
     * @return Vorname der Vorname der Person
     */
    public function getVorname(){
        return $this->vorname;
    }

    /**
     * @param $vorname der neue Vorname der Person
     */
    public function setVorname($vorname){
        $this->vorname = $vorname;
    }

    /**
     * @return Nachname der Nachname der Person
     */
    public function getNachname(){
        return $this->nachname;
    }

    /**
     * @param $nachname der neue Nachname der Person
     */
    public function setNachname($nachname){
        $this->nachname = $nachname;
    }

    /**
     * @return Geburtsjahr das Geburtsjahr der Person
     */
    public function getGeburtsjahr(){
        return $this->geburtsjahr;
    }

    /**
     * @param $geburtsjahr das neue Geburtsjahr der Person
     */
    public function setGeburtsjahr($geburtsjahr){
        $this->geburtsjahr = $geburtsjahr;
    }
}

/**
 * Class Schueler
 * extends Person
 */
class Schueler extends Person{
    protected $medtNote;

    /**
     * Schueler constructor.
     * @param $vorname der Vorname des Schülers
     * @param $nachname der Nachname des Schülers
     * @param $geburtsjahr das Geburtsjahr des Schülers
     * @param $medtNote die MEDT Note des Schülers (die einzig wichtige Note)
     */
    public function __construct($vorname, $nachname, $geburtsjahr, $medtNote){
        parent::__construct($vorname, $nachname, $geburtsjahr);
        $this->$medtNote = $medtNote;
    }

    /**
     * @return string der Schüler als String dargestellt
     */
    public function toString(){
        return parent::toString().", MEDT Note: $this->medtNote";
    }

    /**
     * @return MedtNote die MEDT Note des Schülers (die einzig wichtige Note)
     */
    public function getMedtNote(){
        return $this->medtNote;
    }

    /**
     * @param $medtNote die neue MEDT Note des Schülers (die einzig wichtige Note)
     */
    public function setMedtNote($medtNote){
        $this->medtNote = $medtNote;
    }
}

$sch = new Schueler("Vor", "Nach", 2000, 2);
echo $sch->toString();
$sch->setVorname("Name");
echo $sch->getVorname();