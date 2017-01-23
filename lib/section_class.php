<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 16:14
 */
require_once "globaltable_class.php";

class Section extends GlobalTable {

    public function __construct() {
        parent::__construct("section");
    }

    public function getAllData() {
        return $this->transformLink($this->getAll("id"));
    }

    function transformElement($section) {
        $section["link"] = $this->url->section["id"];
        return $section;
    }
}