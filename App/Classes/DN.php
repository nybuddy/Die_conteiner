<?php
/**
 * Created by PhpStorm.
 * User: romanf
 * Date: 3/25/15
 * Time: 11:55 PM
 */


namespace App\Classes;

//bc it is part of AnyDie
class DN  extends AnyDie{

   function __construct(){


       $n=preg_replace("/(.+?)(\d+)$/",'${2}',get_class($this));
       echo $n."  number of sides \n";
     if( !is_numeric($n))
     {
         /*
          * we can throw exception or just do $n=1;
          * throw new Exception('Wrong class name');
          */
         $n=1;
     }
       else

       $n=(int)$n;


       $sides=[];
       for($i=1;$i<=$n;$i++){
           $sides[]=$i;
       }
       $this->define_sides($sides);

   }

}
