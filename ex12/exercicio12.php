<?php

// Exercício 12 — Conta bancária
// Classe ContaBancaria com construtor, depositar() e sacar() com proteção de saldo negativo

class ContaBancaria
{
    private $titular;
    private $saldo;
    private $numeroConta;

    public function __construct($titular, $saldo, $numeroConta)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->numeroConta = $numeroConta;
    }

    // Getters
    public function getTitular()
    {
        return $this->titular;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }

    // Setters
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function setNumeroConta($numeroConta)
    {
        $this->numeroConta = $numeroConta;
    }

    // Operações
    public function depositar($valor)
    {
        if ($valor <= 0) {
            echo "Erro: valor de depósito inválido." . PHP_EOL;
            return;
        }
        $this->saldo += $valor;
        echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado." . PHP_EOL;
    }

    public function sacar($valor)
    {
        if ($valor <= 0) {
            echo "Erro: valor de saque inválido." . PHP_EOL;
            return;
        }
        if ($valor > $this->saldo) {
            echo "Erro: saldo insuficiente!" . PHP_EOL;
            return;
        }
        $this->saldo -= $valor;
        echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado." . PHP_EOL;
    }

    public function verSaldo()
    {
        echo "Titular: {$this->titular} | Saldo: R$ "
            . number_format($this->saldo, 2, ',', '.') . PHP_EOL;
    }
}

// Criando conta e testando operações
$conta = new ContaBancaria("Lucas", 1000.00, "12345-6");

echo "Conta: " . $conta->getNumeroConta() . PHP_EOL;
$conta->verSaldo();

echo PHP_EOL;
$conta->depositar(500.00);
$conta->verSaldo();

echo PHP_EOL;
$conta->sacar(200.00);
$conta->verSaldo();

echo PHP_EOL . "Tentando sacar R$ 2.000,00:" . PHP_EOL;
$conta->sacar(2000.00);
