<?php

// Exercício 14 — Carrinho de compras
// Classes Produto e Carrinho com adição de produtos e cálculo de total

class Produto
{
    private $nome;
    private $preco;
    private $categoria;

    public function __construct($nome, $preco, $categoria = 'Geral')
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
}

class Carrinho
{
    private $produtos = [];
    private $desconto;
    private $observacao;

    public function __construct($desconto = 0, $observacao = '')
    {
        $this->desconto = $desconto;
        $this->observacao = $observacao;
    }

    // Getters
    public function getProdutos()
    {
        return $this->produtos;
    }

    public function getDesconto()
    {
        return $this->desconto;
    }

    public function getObservacao()
    {
        return $this->observacao;
    }

    // Setters
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
    }

    // Adiciona produto à lista
    public function adicionarProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
        echo "Produto '{$produto->getNome()}' adicionado ao carrinho." . PHP_EOL;
    }

    // Calcula total aplicando desconto
    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total * (1 - $this->desconto / 100);
    }

    // Exibe resumo do carrinho
    public function exibirCarrinho()
    {
        echo PHP_EOL . "=== CARRINHO DE COMPRAS ===" . PHP_EOL;
        foreach ($this->produtos as $produto) {
            echo "  - " . str_pad($produto->getNome(), 15)
                . " R$ " . number_format($produto->getPreco(), 2, ',', '.') . PHP_EOL;
        }
        if ($this->desconto > 0) {
            echo "Desconto aplicado: {$this->desconto}%" . PHP_EOL;
        }
        echo "Total: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . PHP_EOL;
    }
}

// Criando produtos
$p1 = new Produto("Mouse", 89.90, "Periférico");
$p2 = new Produto("Teclado", 149.90, "Periférico");
$p3 = new Produto("Monitor", 1200.00, "Eletrônico");

// Criando carrinho com 5% de desconto
$carrinho = new Carrinho(5, "Entrega expressa");

$carrinho->adicionarProduto($p1);
$carrinho->adicionarProduto($p2);
$carrinho->adicionarProduto($p3);

$carrinho->exibirCarrinho();
