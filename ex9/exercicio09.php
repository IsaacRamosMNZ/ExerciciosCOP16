<?php

// Exercício 9 — Validação
// Classe Produto com setPreco() que impede preço negativo

class Produto
{
    private $nome;
    private $preco;
    private $categoria;

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setPreco($preco)
    {
        if ($preco < 0) {
            echo "Erro: o preço não pode ser negativo!" . PHP_EOL;
            return;
        }
        $this->preco = $preco;
    }

    public function setCategoria($categoria)
    {
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
}

// Criando objeto e testando a validação
$produto = new Produto();
$produto->setNome("Teclado");
$produto->setCategoria("Periférico");

echo "Tentando definir preço -50:" . PHP_EOL;
$produto->setPreco(-50);

echo PHP_EOL . "Definindo preço válido R$ 150:" . PHP_EOL;
$produto->setPreco(150);

echo PHP_EOL;
echo "Produto: " . $produto->getNome() . PHP_EOL;
echo "Preço: R$ " . $produto->getPreco() . PHP_EOL;
echo "Categoria: " . $produto->getCategoria() . PHP_EOL;
