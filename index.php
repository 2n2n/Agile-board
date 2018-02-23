<?php
class Ticket {
    protected $number = null;

    function __construct() {
        $this->number = $this->generateNumber();
    }

    public function generateNumber() {
        return rand(1, 40);
    }

    public function getNumber() {
        return $this->number;
    }
}

$ticket1 = new Ticket();
print_r($ticket1->getNumber());