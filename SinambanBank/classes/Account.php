<?php

class Account {
    public int $number;
    public string $type;
    protected float $balance;

    public function __construct(int $number, string $type, float $balance = 0.00) {
        $this->number  = $number;
        $this->type    = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(float $amount): void {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }
}

?>
