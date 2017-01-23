<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 17:33
 */
require_once "config_config.php";
require_once "url_class.php";
require_once "format_class.php";
require_once "template_class.php";
require_once "section_class.php";
require_once "product_class.php";


abstract class Modules {

    protected $config;
    protected $data;
    protected $url;
    protected $format;
    protected $product;


    /**
     * Modules constructor.
     */
    public function __construct() {
        session_start();
        $this->config=new Config();
        $this->url = new Url();
        $this->format = new Format();
        $this->product = new Product();
        $this->data = $this->format->xss($_REQUEST);

        $this->template = new Template($this->config->dir_tmpl);

        $this->template->set("title",$this->title);
        $this->template->set("meta_desc",$this->meta_desc);
        $this->template->set("meta_key",$this->meta_key);
        $this->template->set("index",$this->url->index());
        $this->template->set("content", $this->getContent());
        $this->template->display("main");
    }

    abstract protected function getContent();


}