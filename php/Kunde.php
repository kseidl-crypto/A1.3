

<?php
//Objektorientiertes Programmieren in PHP
//bessere Gliederung, Übersicht und Funktionalität




//Klasse definiert
class Kunde
{
    //definition von attributen
    private $vname;
    private $nname;
    private $kid;
    private $email;

    /**
     * Kunde constructor.
     * @param $vname
     * @param $nname
     * @param $kid
     * @param $email
     */
    public function __construct($vname, $nname, $kid, $email)
    {

        //Eigenschaft oder Methode innerhalb von klasse abrufen -> mit $this
        $this->vname = $vname;
        $this->nname = $nname;
        $this->kid = $kid;
        $this->email = $email;
    }

    /**
     * @return den vornamen
     */
    public function getVname()
    {
        return $this->vname;
    }

    /**
     * @param $vname übernimmt vornamen
     */
    public function setVname($vname)
    {
        $this->vname = $vname;
    }

    /**
     * @return den nachnamen
     */
    public function getNname()
    {
        return $this->nname;
    }

    /**
     * @param  $nname übernimmt nachnamen
     */
    public function setNname($nname)
    {
        $this->nname = $nname;
    }

    /**
     * @return die ID
     */
    public function getKid()
    {
        return $this->kid;
    }

    /**
     * @param $kid setzt ID
     */
    public function setKid($kid)
    {
        $this->kid = $kid;
    }

    /**
     * @return die Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email setzt email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}

//Referenzieren in PHP

//-new- => neue Objekte erzeugt werden
$sam = new Kunde('Sam', 'Müller', 1, 'sam@müller.at');

//durch Pfeile -> auf Eigenschaften der Objekte zugreifen
echo "ID: $sam->getKid \nVorname:$sam->getVname \nNachname: $sam->getNname \nEmail:$sam->getEmail";



//Sichtbarkeit
//public: Vollzugriff für alle
//protected: nur innerhalb der Klasse und in vererbten Klassen zugreifen
//private: nur innerhalb der Klasse n
?>