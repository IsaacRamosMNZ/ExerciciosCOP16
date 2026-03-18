<?php

// Exercício 11 — Produto com desconto
// Classe Produto com construtor e método aplicarDesconto($percentual)

class Produto
{
    private $nome;
    private $preco;
    private $categoria;

    public function __construct($nome, $preco, $categoria)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    // Aplica desconto percentual sobre o preço atual
    public function aplicarDesconto($percentual)
    {
        $desconto = $this->preco * ($percentual / 100);
        $this->preco -= $desconto;
        echo "Desconto de {$percentual}% aplicado. Novo preço: R$ "
            . number_format($this->preco, 2, ',', '.') . PHP_EOL;
    }
}

// Criando produto via construtor e aplicando desconto
$produto = new Produto("Notebook", 3500.00, "Eletrônico");

echo "Produto: " . $produto->getNome() . PHP_EOL;
echo "Preço original: R$ " . number_format($produto->getPreco(), 2, ',', '.') . PHP_EOL;

$produto->aplicarDesconto(10);

echo "Preço final: R$ " . number_format($produto->getPreco(), 2, ',', '.') . PHP_EOL;
