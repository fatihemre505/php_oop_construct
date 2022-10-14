<?php

class Meyveler{

        public $name;
        public $color;

        function __construct($meyveadi,$myverengi)
        {
            $this->name     = $meyveadi;
            $this->color   = $myverengi;
            
            echo "<p class='alert alert-success'> this  is construct   $this->name  $this->color   </p>";
        }

        function setName($adi){

        $this->name = $adi;

        }

        function setColor($rengi){

        $this->color = $rengi;

        }

        function getName(){
     
            return $this->name;
     
        }

        function getColor(){

             return $this->color;
        
        }

        function __destruct()
        {
            echo "<p class='alert alert-warning mt-5'>this  is __Destruct </p>";
            echo "<p class='alert alert-danger'> Meyve Adı : {$this->name} ve Meyve Rengi {$this-> color} </p>";
        }


}



?>