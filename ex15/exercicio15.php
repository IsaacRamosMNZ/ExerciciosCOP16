<?php

// Exercício 15 — Sistema de Login
// Classe Usuario com email, senha e método login() com validação segura

class Usuario
{
    private $nome;
    private $email;
    private $senha; // armazenada com hash

    public function __construct($nome, $email, $senha)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
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

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    // Valida email e senha, retorna true em caso de sucesso
    public function login($email, $senha)
    {
        if ($this->email !== $email) {
            echo "Erro: e-mail não encontrado." . PHP_EOL;
            return false;
        }
        if (!password_verify($senha, $this->senha)) {
            echo "Erro: senha incorreta." . PHP_EOL;
            return false;
        }
        echo "Login bem-sucedido! Bem-vindo, {$this->nome}!" . PHP_EOL;
        return true;
    }
}

// Criando usuário
$usuario = new Usuario("Rafael", "rafael@email.com", "senha123");

echo "--- Tentativa 1: e-mail incorreto ---" . PHP_EOL;
$usuario->login("outro@email.com", "senha123");

echo PHP_EOL . "--- Tentativa 2: senha incorreta ---" . PHP_EOL;
$usuario->login("rafael@email.com", "senhaerrada");

echo PHP_EOL . "--- Tentativa 3: credenciais corretas ---" . PHP_EOL;
$usuario->login("rafael@email.com", "senha123");
