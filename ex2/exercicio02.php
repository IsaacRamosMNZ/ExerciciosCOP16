<?php

// Exercício 2 — Dois atributos
// Classe Produto com nome e preco

class Produto
{
    public $nome;
    public $preco;
}

// Criando objeto e exibindo
$produto = new Produto();
$produto->nome = "Notebook";
$produto->preco = 3500;

echo "Produto: {$produto->nome} - R$ {$produto->preco}" . PHP_EOL;
