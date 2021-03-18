<?php
//require("database/Database.php");
require("artikelen/Artikel.php");
require("artikelen/KledingStuk.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    $artikelen = Array();
    for ($i = 0; $i < 25; $i++) {
        array_push($artikelen, (new Artikel(1))->setName("mooie naam")->setPrice(45)->setDescription("mooie schoen bruv"));
    }

    foreach ($artikelen as $artikel) {
        $artikel->render();
    }
    ?>
</body>

</html>
