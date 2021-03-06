<?php
namespace App\Util;
use App\Config;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 11:51
 */
require_once "App/config_class.php";

class Url {
    private $config;
    private $amp;

    public function __construct($amp = true) {
        $this->config = new Config();
        $this->amp = $amp;
    }

    public function setAMP($amp) {
        $this->amp = $amp;
    }

    public function getView() {
        $view = $_SERVER["REQUEST_URI"];
        $view = substr($view, 7);
        if (($pos = strpos($view, "?")) !== false) {
            $view = substr($view, 0, $pos);
        }
        return $view;
    }

    public function getThisURL() {
        $uri = substr($_SERVER['REQUEST_URI'], 1);
        return $this->config->address.$uri;
    }

    private function deleteGET($url, $param) {
        $res = $url;
        if ($p = strpos($res, "?") !== false) {
            $paramstr = substr($res, $p + 1);
            $params = explode("&", $paramstr);
            $paramsarr = array();
            foreach ($params as $value) {
                $tmp = explode("=", $value);
                $paramsarr[$tmp[0]] = $tmp[1];
            }
            if (array_key_exists($param, $paramsarr)) {
                unset($paramsarr[$param]);
                $res = substr($res, 0, $p + 1);
                foreach ($paramsarr as $key => $value) {
                    $str = $key;
                    if ($value!==""){
                        $str .= "=$value";
                    }
                    $res .= "$str&";
                }
                $res = substr($res, 0, -1);
            }
        }
        return $res;
    }

    private function returnURL($url, $index = false) {
        //TODO delete
        //echo $url;
        if(!$index) $index = $this->config->address;
        if($url=="") return $index;
        if (strpos($url, $index)!==0) $url = $index . $url;
        if($this->amp) $url = str_replace("&", "&amp;", $url);
        return $url;
    }

    public function index() {
        return $this->returnURL("");
    }

    public function product($id) {
        return $this->returnURL("product?id=$id");
    }

    public function menu($id) {
        return $this->returnURL("menu?id=$id");
    }

}