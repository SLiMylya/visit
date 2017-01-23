<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 14:08
 */
require_once "complexmessage_class.php";

class PageMessage extends ComplexMessage {


    public function __construct() {
        parent::__construct("page_messages");
    }
}