<?php
use App\Core\GlobalTable;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 16:14
 */

require_once "App/Core/globaltable_class.php";

class Menu extends GlobalTable {

    public function __construct() {
        parent::__construct("menu");
    }

    public function getAllData() {
        return $this->transformLink($this->getAll("id"));
    }

    function transformElement($section) {
        $section["link"] = $this->url->menu("id");
        return $section;
    }
}