<?php 
require("../classes/Accesoire.php");

$accesoire = new Accesoire();
$accesoire->set_titel($_POST['titel']);
$accesoire->set_prijs($_POST['prijs']);
$accesoire->set_kleur($_POST['kleur']);
$accesoire->set_beschrijving($_POST['beschrijving']);
$accesoire->set_foto($_POST['foto']);

$accesoire->add();
header("Location: ../invoeg.php");


?>