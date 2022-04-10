<?php

    class Apartment{

        public $id;
        public $name;
        public $available;
        public $adults;
        public $city;
        public $province;

        public function _construct(){
            //Acciones para el constructor
        }

        public function getId(){
            return $this->$id;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setAvailable($available){
            $this->available = $available;
        }

        public function getAvailable(){
            return $this->available;
        }

        public function setAdults($adults){
            $this->adults = $adults;
        }

        public function getAdults(){
            return $this->adults;
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