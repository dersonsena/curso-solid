<?php

namespace app\lsp\account;

class Account
{
    /**
     * @var integer
     */
    protected $number;

    /**
     * @var float
     */
    protected $balance;

    public function __construct(int $number, float $balance)
    {
        $this->number = $number;
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Account
     */
    public function setNumber(int $number): Account
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return Account
     */
    public function setBalance(float $balance): Account
    {
        $this->balance = $balance;
        return $this;
    }

    public function printBalance()
    {
        echo 'Saldo da Conta (Classe PAI): R$ ' . $this->balance;
    }
}