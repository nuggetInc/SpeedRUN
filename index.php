<?php
require("database/Database.php");
require("artikelen/Artikel.php");
require("artikelen/KledingStuk.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/artikelGrid.css">
    <link rel="stylesheet" href="./css/item.css">
    <title>Document</title>
</head>

<body>
    <div class="item-wrapper">
        <?php
        $schoenen = Database::getSchoenen(0, 20);

        foreach ($schoenen as $schoen) {
            echo $schoen->getRender();
        }
        ?>
    </div>
</body>

</html>
