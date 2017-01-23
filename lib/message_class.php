<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 14:13
 */
require_once "globalmessage_class.php";

class Message extends GlobalMessage {

    /**
     * Message constructor.
     */
    public function __construct($file) {
        parent::__construct("messages");
    }
}