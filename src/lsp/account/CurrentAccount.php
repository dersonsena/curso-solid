<?php

namespace app\lsp\account;

class CurrentAccount extends Account
{
    public function printBalance()
    {
        echo 'Saldo da Conta (Classe CurrentAccount): R$' . $this->balance;
    }
}