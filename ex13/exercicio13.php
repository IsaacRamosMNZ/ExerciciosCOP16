<?php

// Exercício 13 — Sistema de Alunos
// Classe Aluno com nota1, nota2, media() e situacao()

class Aluno
{
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2)
    {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getNota1()
    {
        return $this->nota1;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNota1($nota1)
    {
        $this->nota1 = $nota1;
    }

    public function setNota2($nota2)
    {
        $this->nota2 = $nota2;
    }

    // Lógica
    public function media()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao()
    {
        return $this->media() >= 7 ? "Aprovado" : "Reprovado";
    }
}

// Testando com dois alunos
$alunos = [
    new Aluno("Pedro", 8.0, 7.5),
    new Aluno("Fernanda", 5.0, 6.0),
];

foreach ($alunos as $aluno) {
    echo "Aluno: " . $aluno->getNome() . PHP_EOL;
    echo "Nota 1: " . $aluno->getNota1() . PHP_EOL;
    echo "Nota 2: " . $aluno->getNota2() . PHP_EOL;
    echo "Média: " . number_format($aluno->media(), 1, ',', '.') . PHP_EOL;
    echo "Situação: " . $aluno->situacao() . PHP_EOL;
    echo str_repeat("-", 30) . PHP_EOL;
}
