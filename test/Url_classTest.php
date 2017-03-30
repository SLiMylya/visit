<?php
use App\Util\Url;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 04.02.2017
 * Time: 21:57
 */
class Url_classTest extends TestCase {


    public function testGetView() {
        $url = new Url();
        //self::assertEquals("", $url->getView());
        self::assertEquals("html://localhost/visit/", $url->index());
        self::assertEquals("html://localhost/visit/menu?id=1", $url->menu(1));
    }
}