<?php
/**
 * Created by PhpStorm.
 * User: mgbs
 * Date: 31.01.18
 * Time: 13:20
 */

use mschultz\awesomeShop\database\Database;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    private $databaseClass;

    public function setUp()
    {
        $this->databaseClass = new Database();
    }

    /**
     * @test
     */
    public function it_should_be_instatiated()
    {
        $this->assertTrue(is_a($this->databaseClass, Database::class));
    }

    public function it_should_write_data_to_db()
    {

    }
}
