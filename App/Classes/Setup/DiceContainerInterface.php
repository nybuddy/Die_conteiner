<?php
/**
 * Created by PhpStorm.
 * User: romanf
 * Date: 3/25/15
 * Time: 11:43 PM
 */


namespace App\Classes\Setup;


interface DiceContainerInterface

{

    public function attach(DiceInterface $die);

    public function getTotal();

}