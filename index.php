<?php
/**
 * Created by PhpStorm.
 * User: romanf
 * Date: 3/25/15
 * Time: 11:53 PM
 */

//Implement all of the classes that allow you to write the following code:

require_once('vendor/autoload.php');

use App\Classes\MyDice as MyDice;
use App\Classes\AnyDie as AnyDie;

use App\Classes\D4 as D4;
use App\Classes\D6 as D6;
use App\Classes\D8 as D8;
use App\Classes\D10 as D10;


$container = new MyDice();

$f=new AnyDie([0, 0, 1, 2, 3, 3]);

echo $f->roll()." rolling irregular die\n";

$container->attach($f);

$d10=new D10();


echo $d10->roll()." rolling d10\n";


$container->attach(new D10()); // 10­sided die

$container->attach(new D8()); // 8­sided die

$container->attach(new D6()); // 6­sided die

$container->attach(new D4()); // 6­sided die



$container->attach(new AnyDie([0, 0, 1, 2, 3, 3])); // A die with arbitrary faces

$total =$container->getTotal();

echo "Total of all dice: $total\n";




