<?php

    class Bike {
        private $speed;

        public function __construct() {
            $this->speed = 0;
            //echo 'Bike()<br />';
        }

        public function upSpeed(){
            $this->speed = $this->speed< 1? 1 : $this->speed * 1.4;
        }
        public function downSpeed(){
            $this->speed = $this->speed< 1? 0 : $this->speed * 0.7;
        }

        public function getSpeed(){
            return $this->speed;
        }

    }


    $myBike = new Bike();
    while ($myBike->getSpeed() < 10){
        $myBike->upSpeed();
    }
    echo $myBike->getSpeed();




?>