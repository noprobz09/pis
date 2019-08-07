<?php

namespace App\Helpers;

class AppHelper {
	
    
    public static function arrayToObject(array $array)
    {
        $obj = new \stdClass;
        foreach($array as $k => $v) {
            if(strlen($k)) {
                if(is_array($v)) {
                $obj->{$k} = self::arrayToObject($v); //RECURSION
                } else {
                $obj->{$k} = $v;
                }
            }
        }
        return $obj;
    }
    
}