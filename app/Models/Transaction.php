<?php

declare(strict_types=1);

use Psy\Readline\Transient;

class Transaction {

    public function __construct(
        private ?float $amount, 
        private string $description,
        )
        
        {
        throw new \Exception('Not implemented');
    }

    public function addTax(float $rate) {
        $this->amount += $this->amount * $rate / 100;
    }

    private function applyDiscount(float $rate) {
        $this->amount -= $this->amount * $rate / 100;
    }

    public function getAmount() {
        return $this->amount;
    }

}