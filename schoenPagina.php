<?php
require("database/Database.php");
require("artikelen/Artikel.php");
require("artikelen/KledingStuk.php");
if(isset($_GET["naam"])) {
    $schoen = Database::getSchoenenWaarNaam($_GET["naam"]);
    if ($schoen == null) {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/artikelPagina.css">
    <title>Document</title>
</head>

<body>
    <div class="page-wrapper">
        <img src=<?="'".$schoen->getPreviewUrl()."'"?> alt="preview">
        <div class="info-wrapper">
            <h1><?=$schoen->getName()?></h1>
            <h2>€<?=$schoen->getPrice()?><span class="aviable"><?php echo $schoen->getAviable()? " - Beschikbaar" : " - Niet Beschikbaar";?></span></h2>
            <br>
            <h3>Selecteer Maat</h3>
            <p><?=implode(" ",$schoen->getPossibleSizes())?></p>
            <br>
            <h3>Beschrijving</h3>
            <p><?=$schoen->getDescription()?></p>
        </div>  
    </div>
</body>

</html>
