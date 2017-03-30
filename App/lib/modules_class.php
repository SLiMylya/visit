<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 17:33
 */
use App\Config;
use App\Core\Template;
use App\Util\Format;
use App\Util\Url;

require_once "App/config_class.php";
require_once "App/Util/url_class.php";
require_once "App/Util/format_class.php";
require_once "App/Core/template_class.php";
require_once "App/Table/menu_class.php";
require_once "App/Table/product_class.php";


abstract class Modules {

    protected $config;
    protected $data;
    protected $url;
    protected $format;
    protected $product;
    protected $menu;
    protected $template;


    /**
     * Modules constructor.
     */
    public function __construct() {
        session_start();
        $this->config=new Config();
        $this->url = new Url();
        $this->format = new Format();
        $this->menu = new Menu();
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