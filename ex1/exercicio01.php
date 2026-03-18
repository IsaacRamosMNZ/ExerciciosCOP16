<?php

// Exercício 1 — Primeira Classe
// Classe Pessoa com atributo público e método apresentar()

class Pessoa
{
    public $nome;

    public function apresentar()
    {
        echo "Olá, meu nome é {$this->nome}" . PHP_EOL;
    }
}

// Criando objeto e testando
$pessoa = new Pessoa();
$pessoa->nome = "João";
$pessoa->apresentar();
