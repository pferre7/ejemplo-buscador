<?php

    class Hotel{

        public $id;
        public $name;
        public $stars;
        public $type;
        public $city;
        public $province;

        public function _construct(){
            //Acciones para el constructor
        }

        public function getId(){
            return $this->id;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setStars($stars){
            $this->stars = $stars;
        }

        public function getStars(){
            return $this->stars;
        }

        public function setType($type){
            $this->type = $type;
        }

        public function getType(){
            return $this->type;
        }

        public function setCity($city){
            $this->city = $city;
        }

        public function getCity(){
            return $this->city;
        }

        public function setProvince($province){
            $this->province = $province;
        }

        public function getProvince(){
            return $this->province;
        }

    }

?>