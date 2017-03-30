<?php
namespace App\Message;
/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 14:13
 */

class Message extends GlobalMessage {

    public function __construct() {
        parent::__construct("messages");
    }
}