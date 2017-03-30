<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 16:13
 */
use App\Core\GlobalTable;

require_once "App/Core/globaltable_class.php";

class Product extends GlobalTable {
    /**
     * Product constructor.
     */
    public function __construct() {
        parent::__construct("products");
    }

    public function getAllData() {
        return $this->transformLink($this->getAll("date",false ));
    }

    function transformElement($product) {
        $product["img"] = $this->config->dir_img_product["img"];
        $product["link"] = $this->url->product($product["id"]);
        return $product;
    }

    public function getAllOnSectionID($section_id) {
        return $this->getAllOnField("section_id", $section_id);
    }
}