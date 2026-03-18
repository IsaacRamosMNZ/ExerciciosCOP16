<?php

// Exercício 16 — Sistema de Loja (Desafio Final)
// Classes: Produto, Cliente, Pedido com cálculo de total e resumo

// ─────────────────────────────────────────────
// CLASSE PRODUTO
// ─────────────────────────────────────────────
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
        if ($preco < 0) {
            echo "Erro: preço não pode ser negativo!" . PHP_EOL;
            return;
        }
        $this->preco = $preco;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}

// ─────────────────────────────────────────────
// CLASSE CLIENTE
// ─────────────────────────────────────────────
class Cliente
{
    private $nome;
    private $email;
    private $cpf;

    public function __construct($nome, $email, $cpf)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}

// ─────────────────────────────────────────────
// CLASSE PEDIDO
// ─────────────────────────────────────────────
class Pedido
{
    private $cliente;
    private $produtos = [];
    private $numeroPedido;

    public function __construct(Cliente $cliente, $numeroPedido)
    {
        $this->cliente = $cliente;
        $this->numeroPedido = $numeroPedido;
    }

    // Getters
    public function getCliente()
    {
        return $this->cliente;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function getNumeroPedido()
    {
        return $this->numeroPedido;
    }

    // Setters
    public function setNumeroPedido($numeroPedido)
    {
        $this->numeroPedido = $numeroPedido;
    }

    // Adiciona produto ao pedido
    public function adicionarProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
    }

    // Calcula o total de todos os produtos
    public function calcularTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }
        return $total;
    }

    // Exibe o resumo completo do pedido
    public function exibirResumo()
    {
        $linha = str_repeat("=", 44);
        $div = str_repeat("-", 44);

        echo $linha . PHP_EOL;
        echo "  RESUMO DO PEDIDO #" . $this->numeroPedido . PHP_EOL;
        echo $linha . PHP_EOL;
        echo "Cliente : " . $this->cliente->getNome() . PHP_EOL;
        echo "E-mail  : " . $this->cliente->getEmail() . PHP_EOL;
        echo "CPF     : " . $this->cliente->getCpf() . PHP_EOL;
        echo $div . PHP_EOL;
        echo "PRODUTOS:" . PHP_EOL;

        foreach ($this->produtos as $produto) {
            echo "  " . str_pad($produto->getNome(), 22)
                . " R$ " . number_format($produto->getPreco(), 2, ',', '.') . PHP_EOL;
        }

        echo $div . PHP_EOL;
        echo "TOTAL   : R$ " . number_format($this->calcularTotal(), 2, ',', '.') . PHP_EOL;
        echo $linha . PHP_EOL;
    }
}

// ─────────────────────────────────────────────
// TESTE DO SISTEMA
// ─────────────────────────────────────────────

$cliente = new Cliente("Ana Carolina", "ana@email.com", "123.456.789-00");

$p1 = new Produto("Notebook", 3500.00, "Eletrônico");
$p2 = new Produto("Mouse", 89.90, "Periférico");
$p3 = new Produto("Teclado", 149.90, "Periférico");

$pedido = new Pedido($cliente, "2024-001");
$pedido->adicionarProduto($p1);
$pedido->adicionarProduto($p2);
$pedido->adicionarProduto($p3);

$pedido->exibirResumo();
