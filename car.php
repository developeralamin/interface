<?php 
require 'veichle.php';

//implements interface class
class Car implements Veichle{

   public function capacity(){
   	  return 12;
   }
   public function amount(){

   }
   public function re_capacity(){
    
   }
   public function display(){
   	  return 'welcome vaiya';
   }
 }

$obj = new Car();

echo $obj->capacity();
 echo "</br>";
echo $obj->display();