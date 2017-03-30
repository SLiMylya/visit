<?php
/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 02.02.2017
 * Time: 22:14
 */

use App\Core\DataBase;
use PHPUnit\Framework\TestCase;

class DataBase_ClassTest extends TestCase{

    public function testConnectDB() {
        $dbtest=DataBase::getDb();
        $this->assertNotNull($dbtest);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSelect() {
        $dbtest=DataBase::getDb();
        $query = "";
        $dbtest->select($query);
    }
}