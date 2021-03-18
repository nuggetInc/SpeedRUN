<?php
//$pdo = new PDO("mysql:host=localhost;dbname=[database name]", "root", "");
class Database
{
    private static PDO $pdo;

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

    public static function getArtikelen(int $offset, int $limit): array {
        $parameters = array(":offset"=>$offset, ":limit"=>$limit);
        $sth = Database::pdo->prepare("SELECT artikel.id, artikel.naam, artikel.beschrijving FROM artikel GROUP BY leerlingen.delen_tot LIMIT :offset, :limit");

        //SELECT leerlingen.delen_tot, GROUP_CONCAT(leerlingen.naam) FROM `leerlingen` GROUP BY leerlingen.delen_tot LIMIT 2 
    }

    public static function getKledingStukken(int $offset, int $limit): array {
        $parameters = array(":offset"=>$offset, ":limit"=>$limit);
        $sth = Database::pdo->prepare("SELECT kledingStuk.id, kledingStuk.naam, kledingStuk.beschrijving, GROUP_CONCAT(kledingStuk.possibleSizes), GROUP_CONCAT(kledingStuk.aviableSizes) FROM kledingStuk GROUP BY kledingStuk.id LIMIT :offset, :limit");
        // this still has to be adapted to the database and such
    }
}

Database::setPDO(new PDO("mysql:host=localhost;dbname=SpeedRUN", "root", ""));
?>
