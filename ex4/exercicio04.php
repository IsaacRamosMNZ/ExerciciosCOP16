<?php

// Exercício 4 — Alterando valores
// Classe Carro com marca, velocidade e método acelerar()

class Carro
{
    public $marca;
    public $velocidade;

    public function acelerar()
    {
        $this->velocidade += 10;
    }
}

// Criando objeto e testando
$carro = new Carro();
$carro->marca = "Ford";
$carro->velocidade = 0;

echo "Velocidade antes: {$carro->velocidade} km/h" . PHP_EOL;

$carro->acelerar();

echo "Velocidade depois: {$carro->velocidade} km/h" . PHP_EOL;
