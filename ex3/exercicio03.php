<?php

// Exercício 3 — Método com lógica
// Classe Conta com atributo saldo e método verSaldo()

class Conta
{
    public $saldo;

    public function verSaldo()
    {
        echo "Saldo atual: R$ {$this->saldo}" . PHP_EOL;
    }
}

// Criando objeto e testando
$conta = new Conta();
$conta->saldo = 1500.00;
$conta->verSaldo();
