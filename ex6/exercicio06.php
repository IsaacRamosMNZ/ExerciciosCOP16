<?php

// Exercício 6 — Simulação simples
// Classe Lampada com status e métodos ligar() / desligar()

class Lampada
{
    public $status = "desligada";

    public function ligar()
    {
        $this->status = "ligada";
        echo "Lâmpada ligada!" . PHP_EOL;
    }

    public function desligar()
    {
        $this->status = "desligada";
        echo "Lâmpada desligada!" . PHP_EOL;
    }
}

// Criando objeto e testando
$lampada = new Lampada();
echo "Status inicial: {$lampada->status}" . PHP_EOL;

$lampada->ligar();
echo "Status: {$lampada->status}" . PHP_EOL;

$lampada->desligar();
echo "Status: {$lampada->status}" . PHP_EOL;
