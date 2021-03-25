<?php 
class Accesoire 
{
    protected $titel; 
    protected $prijs;
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
        $parameters = array(':titel'=>$this->titel, ':prijs'=>$this->prijs,':kleur'=>$this->kleur,
        ':beschrijving'=>$this->beschrijving, ':foto'=>$this->foto);
        $sth = $this->pdo->prepare("INSERT INTO accesoire (naam, prijs, beschikbaar, kleur_id, beschrijving, foto) VALUES (:titel, :prijs, 1, :kleur, :beschrijving, :foto)");
        $sth->execute($parameters);
    }

}


?>