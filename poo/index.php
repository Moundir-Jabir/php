<?php
    class Car {
        protected $name;
        protected $horse;
        protected $acceleration;

        function __construct($name,$horse){
            $this->name = $name;
            $this->horse = $horse;
            $this->acceleration = 0;
        }

        public function getAcceleration(){
            return $this->acceleration;
        }

        public function setAcceleration($speed){
            if(filter_var($speed, FILTER_VALIDATE_INT) && $speed >= 0){
                $this->acceleration = $speed;
            }
        }
    }

    $carOne = new Car("Audi",600);
    echo $carOne->getAcceleration() . '<br>';
    $carOne->setAcceleration(255);
    echo $carOne->getAcceleration();
?>