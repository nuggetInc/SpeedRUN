<?php 
require("../classes/schoen.php");

$schoen = new Schoen();
$schoen->set_titel($_POST['titel']);
$schoen->set_prijs($_POST['prijs']);
$schoen->set_maat($_POST['maat']);
$schoen->set_kleur($_POST['kleur']);
$schoen->set_beschrijving($_POST['beschrijving']);
$schoen->set_foto($_POST['foto']);

$schoen->add();
header("Location: ../invoeg.php");


?>