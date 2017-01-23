<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 14:16
 */

require_once "config_config.php";
require_once "email_class.php";

class Mail {

    private $config;
    private $email;

    /**
     * Mail constructor.
     */
    public function __construct() {
        $this->config=new Config();
        $this->email = new Email();
    }

    public function send($to, $data, $template, $from="") {
        $data["sitename"] = $this->config->sitename;
        if($from=="") $from = $this->config->ademail;
        $subject=$this->email->getTitle($template);
        $message=$this->email->getText($template);
        $header = "From: $from\r\nReply-To: $from\r\nContent-type: text/html; charset=utf-8r\r\n";

        foreach ($data as $key => $value) {
            $subject = str_replace("%$key%", $value, $subject);
            $message = str_replace("%$key%", $value, $message);
        }
        $subject = '=?utf-8?B?' . base64_encode($subject) . '?=';
        return mail($to, $subject, $message, $header);
    }

}