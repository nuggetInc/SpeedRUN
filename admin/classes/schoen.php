<?php 
class Schoen 
{
    protected $titel; 
    protected $prijs;
    protected $maat;
    protected $kleur;
    protected $beschrijving;
    protected $foto;
    protected $pdo;
    

    function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=speedrun", "root", "");
    }

    function set_titel($i)
    {
        $this->titel = $i;
    }
    function set_prijs($i)
    {
        $this->prijs = $i;
    }
    function set_maat($i)
    {
        $this->maat = $i;
    }
    function set_kleur($i)
    {
        $this->kleur = $i;
    }
    function set_beschrijving($i)
    {
        $this->beschrijving = $i;
    }
    function set_foto($i)
    {
        $this->foto = $i;
    }
    function add()
    {
        $parameters = array(':titel'=>$this->titel, ':prijs'=>$this->prijs, ':maat'=>$this->maat, ':kleur'=>$this->kleur,
        ':beschrijving'=>$this->beschrijving, ':foto'=>$this->foto);
        $sth = $this->pdo->prepare("INSERT INTO schoenenpaar (naam, prijs, maat, beschikbaar, kleur_id, beschrijving, foto) VALUES (:titel, :prijs, :maat, 1, :kleur, :beschrijving, :foto)");
        $sth->execute($parameters);
    }

}


?>