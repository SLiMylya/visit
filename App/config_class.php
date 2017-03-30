<?php

namespace App;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 13.01.2017
 * Time: 22:54
 */
class Config {

    public $sitename = "Visit";
    public $address = "html://localhost/visit/";
    public $db_host = "localhost";
    public $db_user = "root";
    public $db_password = "";
    public $db_name = "visit";
    public $db_prefix = "dbu_";

    public $sym_query = "{?}";

    public $adname = "root";
    public $ademail = "no-reply@localhost";

    public $dir_text = "App/Message/text/";
    public $dir_tmpl = "tmpl/";
    public $count_on_page=8;
    public $dir_img_product="img/product";
}