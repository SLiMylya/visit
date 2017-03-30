<?php
use App\Util\Format;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 04.02.2017
 * Time: 21:40
 */


class Format_classTest extends TestCase {

    public function testTS() {
        $format = new Format();
        self::assertEquals(time(), $format->ts());
    }

    public function testXSS() {
        $format = new Format();
        self::assertEquals("", $format->xss(""));
        self::assertEquals("select", $format->xss("select"));
        self::assertEquals([], $format->xss([]));
        //self::assertEquals("<img>", $format->xss("<img>"));

    }
}