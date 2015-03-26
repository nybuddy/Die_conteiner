<?php
/**
 * Created by PhpStorm.
 * User: romanf
 * Date: 3/25/15
 * Time: 11:43 PM
 */


namespace App\Classes\Setup;

class Basic{

    protected $info;


    /**
     * @param mixed $name
     * @param mixed $value
     */

    function __set($name,$value)
    {



        $this->info["$name"]=$value;

    }

    /**
     * @param mixed $name
     * @return mixed
     */

    function __get($name){
        if (array_key_exists($name, $this->info)) {
            return $this->info[$name];
        }
        return null;

    }


}