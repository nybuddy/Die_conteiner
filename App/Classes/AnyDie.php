<?php
/**
 * Created by PhpStorm.
 * User: romanf
 * Date: 3/25/15
 * Time: 11:50 PM
 */


namespace App\Classes;




class AnyDie extends Setup\Basic implements Setup\DiceInterface {


    /**
     *
     * @return int
     */

    function roll(){
        return  $this->sides[rand(0,$this->dementions-1)];
    }


    function __construct(Array $A){
      $this->define_sides($A);


    }
    function define_sides(Array $A){
        // to save time when do roll
        $this->dementions=sizeof($A);
        $this->sides=$A;

    }



}


