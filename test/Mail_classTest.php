<?php
use App\Message\Mail;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 04.02.2017
 * Time: 22:49
 */
class Mail_classTest extends TestCase {


    public function testSendMail() {
        $mail = new Mail();
        //self::assertEquals("",$mail->send("to",[],"ORDER"));
    }
}