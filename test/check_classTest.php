<?php
use App\Util\Check;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 04.02.2017
 * Time: 22:18
 */
class check_classTest extends TestCase {


    public function testIntNumberCount() {
        $check = new Check();
        self::assertTrue($check->count("0"));
        self::assertTrue($check->count("1"));
        self::assertFalse($check->count("asdsadas"));
    }

    public function testIntNumberID() {
        $check = new Check();
        self::assertTrue($check->id("0"));
        self::assertTrue($check->id("1"));
        self::assertFalse($check->id("-1"));
        self::assertFalse($check->id("asdsadas"));
    }
}