<?php
/**
 * Created by PhpStorm.
 * User: speedup
 * Date: 2016-12-24
 * Time: 오후 2:59
 */
class Object {
    private function __construct() {
        // init...
    }

    /**
     * @return Object
     */
    public static function &getInstance() {
        static $theInstance;
        if(!isset($theInstance)) $theInstance = new Object();
        return $theInstance;
    }
}

$o = new Object();

//$o = &Object::getInstance();