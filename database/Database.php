<?php
//$pdo = new PDO("mysql:host=localhost;dbname=[database name]", "root", "");
class Database
{
    private static $pdo;

    /**
     * Holds the pdo object.
     * @param \PDO $pdo The PDO object this connection will work on.
     */
    public static function setPDO(PDO $pdo): void
    {
        Database::$pdo = $pdo;
    }

    public static function getPDO(): PDO {
        return Database::$pdo;
    }

    public static function getSchoenen(int $offset, int $limit): array {
        $sth = Database::$pdo->prepare(
            "SELECT id, naam, prijs, beschrijving, foto,
            GROUP_CONCAT(maat), GROUP_CONCAT(beschikbaar)
            FROM schoenenpaar GROUP BY schoenenpaar.naam LIMIT {$offset}, {$limit}");
        $sth->execute();

        $schoenen = array();

        while($row = $sth->fetch()) {
            $schoen = new KledingStuk($row["id"]);
            $schoen->setName($row["naam"]);
            $schoen->setPrice($row["prijs"]);
            $schoen->setDescription($row["beschrijving"]);
            $schoen->setPreviewUrl($row["foto"]);
            $schoen->setPossibleSizes(array_map('intval', explode(",", $row["GROUP_CONCAT(maat)"])));
            $schoen->setAviableSizes(array_map('intval', explode(",", $row["GROUP_CONCAT(beschikbaar)"])));

            array_push($schoenen, $schoen);
        }

        return $schoenen;
    }
}

Database::setPDO(new PDO("mysql:host=localhost;dbname=SpeedRUN", "root", ""));
?>
