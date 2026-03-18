<?php

// Exercício 10 — Inicialização automática
// Classe Pessoa com construtor recebendo nome, idade e email

class Pessoa
{
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getEmail()
    {
        return $this->email;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

// Criando objeto via construtor
$pessoa = new Pessoa("Ana", 28, "ana@email.com");

echo "Nome: " . $pessoa->getNome() . PHP_EOL;
echo "Idade: " . $pessoa->getIdade() . " anos" . PHP_EOL;
echo "Email: " . $pessoa->getEmail() . PHP_EOL;
