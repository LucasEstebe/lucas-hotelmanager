<?php

namespace App\Model;

class Room {

    private $id;
    private $number;
    private $guest;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNumber() {
        return $this->number;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function getGuest() {
        return $this->guest;
    }

    public function setGuest($guest) {
        $this->guest = $guest;
    }

}