<?php

// Exercício 8 — Regra de negócio
// Classe Aluno com método verificarAprovacao()

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

    // Regra de negócio: nota >= 7 → Aprovado, senão → Reprovado
    public function verificarAprovacao()
    {
        return $this->nota >= 7 ? "Aprovado" : "Reprovado";
    }
}

// Testando com aluno aprovado
$aluno1 = new Aluno();
$aluno1->setNome("Carlos");
$aluno1->setNota(7.5);
$aluno1->setMatricula("2024002");

echo "Aluno: " . $aluno1->getNome() . PHP_EOL;
echo "Nota: " . $aluno1->getNota() . PHP_EOL;
echo "Situação: " . $aluno1->verificarAprovacao() . PHP_EOL;

echo PHP_EOL;

// Testando com aluno reprovado
$aluno2 = new Aluno();
$aluno2->setNome("Juliana");
$aluno2->setNota(5.0);
$aluno2->setMatricula("2024003");

echo "Aluno: " . $aluno2->getNome() . PHP_EOL;
echo "Nota: " . $aluno2->getNota() . PHP_EOL;
echo "Situação: " . $aluno2->verificarAprovacao() . PHP_EOL;
