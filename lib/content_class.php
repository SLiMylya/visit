<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 23.01.2017
 * Time: 11:09
 */
require_once "modules_class.php";

class Content extends Modules {

    protected $title = "Сосновка";
    protected $meta_desc = "Описание сайта";
    protected $meta_key = "поисковые теги";

    protected function getContent() {
        $this->template->set("table_products_title", "Новинки");
        $this->template->set("product", $this->product->getAllData(
            $this->config->count_on_page
        ));


        return "index";
    }
}