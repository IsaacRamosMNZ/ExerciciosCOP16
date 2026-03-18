<?php

// Exercício 7 — Get e Set
// Classe Aluno com atributos privados e getters/setters

class Aluno
{
    private $nome;
    private $nota;
    private $matricula;

    // Setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    // Getters
    public function getNome()
    {
        return $this->nome;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }
}

// Criando objeto e testando
$aluno = new Aluno();
$aluno->setNome("Maria");
$aluno->setNota(8.5);
$aluno->setMatricula("2024001");

echo "Nome: " . $aluno->getNome() . PHP_EOL;
echo "Nota: " . $aluno->getNota() . PHP_EOL;
echo "Matrícula: " . $aluno->getMatricula() . PHP_EOL;
