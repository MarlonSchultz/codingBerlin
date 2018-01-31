<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 31.01.18
 * Time: 13:22
 */

namespace mschultz\awesomeShop\database;

class Database
{
    private $dbConnection;

    public function __construct()
    {
        // todo: change from sqlite to mysql; credentials for container are in docker-compose.yml
        $this->dbConnection = new \PDO('sqlite:../sqlite.db');
    }

    public function writeToDb(String $sql): int
    {
        $pdoStatement = $this->dbConnection->prepare($sql);
        return $this->dbConnection->exec($pdoStatement);
    }
}