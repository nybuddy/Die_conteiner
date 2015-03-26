<?php
/**
 * Created by PhpStorm.
 * User: romanf
 * Date: 3/25/15
 * Time: 11:44 PM
 */

namespace App\Classes;



class MyDice extends Setup\Basic  implements  Setup\DiceContainerInterface {

    /**
     * @param DiceInterface $die
     *
     */
    function attach(Setup\DiceInterface $die){

        $this->info['dice'][]=$die;

    }


    /**
     *
     * @return int
     */
    function getTotal(){

        return count($this->dice);
    }

    public function __construct(){

    }

}


