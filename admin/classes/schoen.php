<?php 
class Schoen 
{
    public $titel; 
    public $prijs;
    public $maat;
    public $kleur;
    public $beschrijving;
    public $foto;
    public $pdo;
    

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
        $sth = $this->pdo->prepare("INSERT INTO shoenenpaar (naam, prijs, maat, kleur_id, beschrijving, foto) VALUES (:titel, :prijs, :maat, :kleur, :beschrijving, :foto)");
        $sth->execute($parameters);
    }

}


?>