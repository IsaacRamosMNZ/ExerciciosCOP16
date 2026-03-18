<?php

// Exercício 5 — Método com parâmetro
// Classe Calculadora com método somar($a, $b)

class Calculadora
{
    public function somar($a, $b)
    {
        return $a + $b;
    }
}

// Criando objeto e exibindo resultado
$calc = new Calculadora();
$resultado = $calc->somar(7, 3);

echo "Resultado: {$resultado}" . PHP_EOL;
