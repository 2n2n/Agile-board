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

class TicketGenerator {
    public static $qs = [];
    public static function make() {
        array_push(self::$qs, new Ticket);
    }

    // public static function remove() {
    //     array_shift(self::$qs);
    // }
}


TicketGenerator::make();
TicketGenerator::make();
TicketGenerator::make();

$queue = TicketGenerator::$qs;
print_r($queue);
// TicketGenerator::remove();
// print_r(TicketGenerator::$qs);