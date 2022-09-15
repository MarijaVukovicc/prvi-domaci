<?php

class Broker
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcja = new mysqli('localhost', 'root' , '', 'ordinacija');
       // $this->konekcja->set_charset('utf-8');
    }

    public function vratiSve($imeTabele)
    {
        $podaci = [];
        $resultSet = $this->konekcja->query('SELECT * FROM ' . $imeTabele);

        while($red = $resultSet->fetch_object()){
            $podaci[] = $red;
        }

        return $podaci;
    }

    public function vratiSveSortirano($imeTabele,$nazivKolone, $sort)
    {
        $podaci = [];
        $resultSet = $this->konekcja->query('SELECT * FROM ' . $imeTabele . ' ORDER BY ' . $nazivKolone . ' ' . $sort);

        while($red = $resultSet->fetch_object()){
            $podaci[] = $red;
        }

        return $podaci;
    }

    public function vratiUslugeZaPacijenta($pacijent)
    {
        $podaci = [];
        $resultSet = $this->konekcja->query('SELECT * FROM korisnikusluga ku join pacijent p on ku.pacijentID = p.id join usluga u on ku.uslugaID = u.id WHERE p.id = ' . $pacijent .'  ORDER BY ku.datumUsluge desc');

        while($red = $resultSet->fetch_object()){
            $podaci[] = $red;
        }

        return $podaci;
    }

    public function unesiUsluguZaPacijenta($usluga, $pacijent)
    {
        $sql = "INSERT INTO korisnikusluga (uslugaID,pacijentID) VALUES($usluga,$pacijent)";
        return $this->konekcja->query($sql);
    }

    public function promeniCenuUsluge($usluga, $cena)
    {
        $sql = "UPDATE usluga SET cena = $cena WHERE id = $usluga ";
        return $this->konekcja->query($sql);
    }

    public function obrisiUsluguZaPacijenta($id)
    {
        $sql = "DELETE FROM korisnikusluga WHERE idKorisnikUsluge = $id";
        return $this->konekcja->query($sql);
    }
}