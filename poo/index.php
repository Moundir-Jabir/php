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

    class Suv extends Car {
        // polymorphisme -> redefinition
        private $offRoad;
        public function __construct($name,$horse,$offRoad){
            parent::__construct($name,$horse);
            $this->offRoad = $offRoad;
        }

        public function getOffRoad(){
            return $this->offRoad;
        }
    }

    $tigwan = new Suv("tigwan",600,true);
    //echo $tigwan->getOffRoad();
    echo $tigwan->getAcceleration();
    $tigwan->setAcceleration(120);
    echo $tigwan->getAcceleration();
?>