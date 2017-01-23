<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 15:34
 */

require_once "database_class.php";
require_once "config_config.php";
require_once "check_class.php";
require_once "url_class.php";

abstract class GlobalTable {

    protected $db;
    protected $table_name;
    protected $format;
    protected $config;
    protected $check;
    protected $url;

    /**
     * GlobalClass constructor.
     * @param $table_name
     */
    public function __construct($table_name) {
        $this->db = DataBase::getDb();
        $this->format = new Format();
        $this->config=new Config();
        $this->check=new Check();
        $this->url = new Url();
        $this->table_name = $this->config->db_prefix.$table_name;
    }

    protected function getAll($order = false, $up=true, $count=false, $offset=false) {
        $ol = $this->getOrderLimit($order, $up, $count, $offset);
        $query="SELECT * FROM`".$this->table_name." $ol";
        return $this->db->select($query);
    }

    protected function getAllOnField($field, $value, $order = false, $up = true, $count = false, $offset = false) {
        $ol = $this->getOrderLimit($order, $up, $count, $offset);
        $query="SELECT * FROM`".$this->table_name." WHERE `$field` = ".$this->config->sym_query." $ol";
        return $this->db->select($query, array($value));
    }

    public function getOrderLimit($order, $up, $count, $offset) {
        if ($order){
            $order="ORDER BY `$order`";
            if (!$up) $order .= " DESC";
        }

        $limit = $this->getLimit($count, $offset);

        return "$order $limit";
    }

    protected function transformLink($element) {
        if(!$element) return false;
        if (isset($element[0])) {
            for ($i = 0; $i < count($element); $i++){
                $element[$i] = $this->transformElement($element[$i]);
            }
            return $element;
        }else{
            return $this->transformElement($element);
        }
    }

    abstract function transformElement($element);

    private function getLimit($count, $offset) {
        $limit = "";
        if ($count) {
            if(!$this->check->count($count)) return false;
            if ($offset){
                if(!$this->check->offset($offset)) return false;
                $limit = "LIMIT $offset, $count";
            }
            else $limit = "LIMIT $count";
        }
        return $limit;
    }




}