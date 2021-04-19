<?php
class Person{
    protected $vorname;
    protected $nachname;
    protected $geburtsjahr;

    public function __construct($vorname, $nachname, $geburtsjahr){
        $this->vorname = $vorname;
        $this->nachname = $nachname;
        $this->geburtsjahr = $geburtsjahr;
    }

    public function toString(){
        return "$this->vorname $this->nachname, $this->geburtsjahr";
    }

    public function getVorname(){
        return $this->vorname;
    }

    public function setVorname($vorname){
        $this->vorname = $vorname;
    }

    public function getNachname(){
        return $this->nachname;
    }

    public function setNachname($nachname){
        $this->nachname = $nachname;
    }

    public function getGeburtsjahr($geburtsjahr){
        return $this->geburtsjahr;
    }

    public function setGeburtsjahr($geburtsjahr){
        $this->geburtsjahr = $geburtsjahr;
    }
}

class Schueler extends Person{
    protected $medtNote;

    public function __construct($vorname, $nachname, $geburtsjahr, $medtNote){
        parent::__construct($vorname, $nachname, $geburtsjahr);
        $this->$medtNote = $medtNote;
    }

    public function toString(){
        return parent::toString().", MEDT Note: $this->medtNote";
    }

    public function getMedtNote(){
        return $this->medtNote;
    }

    public function setMedtNote($medtNote){
        $this->medtNote = $medtNote;
    }
}

$sch = new Schueler("Vor", "Nach", 2000, 2);
echo $sch->toString();
$sch->setVorname("Name");
echo $sch->getVorname();