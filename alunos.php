<?php

function calcularMedia(array $turma)
{
    $soma = 0;
    foreach ($turma as $aluno) {
        $soma = $soma + $aluno["nota"];
    }

    $media = $soma / count($turma);

    return $media;
}

function maiorNota(array $turma)
{
    $melhorAluno = null;
    foreach ($turma as $aluno) {
        if ($melhorAluno == null) {
            $melhorAluno = $aluno;
        } elseif ($aluno["nota"] > $melhorAluno["nota"]) {
            $melhorAluno = $aluno;
        }
    }
    return $melhorAluno;
}

function alterarNota(array &$turma, $nome, $novaNota)
{

    foreach ($turma as $chave => $aluno) {
        if ($aluno["nome"] == $nome) {
            $turma[$chave]["nota"] = $novaNota;
            return;
        }
    }
}

function situacaoAluno(array &$turma)
{

    foreach ($turma as $chave => $aluno) {

        if ($aluno["nota"] >= 50) {

            $turma[$chave]["situacao"] = "Apavorado";
        } else {
            $turma[$chave]["situacao"] = "Delegado";
        }
    }
}

$alunosTurmaA = [
    "1" => [
        "nome" => "Roberto",
        "idade" => 16,
        "nota" => 10,
    ],
    "2" => [
        "nome" => "Silas",
        "idade" => 16,
        "nota" => 100,
    ],
    "3" => [
        "nome" => "Saxofone",
        "idade" => 16,
        "nota" => 460,
    ],
    "4" => [
        "nome" => "Ventilador",
        "idade" => 17,
        "nota" => 5,
    ],
    "5" => [
        "nome" => "Jorge",
        "idade" => 170,
        "nota" => 10,
    ]
];


alterarNota($alunosTurmaA, "Roberto", 56);

//Situação dos alunos da Turma A

situacaoAluno($alunosTurmaA);

print_r($alunosTurmaA);

echo "<br>";
echo "<br>";

//Média da Turma A

$media = calcularMedia($alunosTurmaA);

echo "A média da turma A é $media - ";


$alunosTurmaB = [
    "1" => [
        "nome" => "Jonas",
        "idade" => 16,
        "nota" => 850
    ],
    "2" => [
        "nome" => "Jimmy",
        "idade" => 16,
        "nota" => 200
    ],
    "3" => [
        "nome" => "Botijão",
        "idade" => 16,
        "nota" => 60
    ],
    "4" => [
        "nome" => "Flauta",
        "idade" => 17,
        "nota" => 905
    ],
    "5" => [
        "nome" => "Garrafinha",
        "idade" => 170,
        "nota" => 5000
    ]
];

//Média da Turma B

$media = calcularMedia($alunosTurmaB);

echo "A média da turma B é $media - ";

//Maiores notas

$melhorAluno = maiorNota($alunosTurmaA);

echo "Melhor estudante da Turma A: " . $melhorAluno["nome"] . " - ";

$melhorAluno = maiorNota($alunosTurmaB);

echo "Melhor estudante da Turma B: " . $melhorAluno["nome"];

//Situação dos alunos da Turma B

echo "<br>";
echo "<br>";

situacaoAluno($alunosTurmaB);

print_r($alunosTurmaB);

echo "<br>";

// $notaAlterada = alterarNota($alunosTurmaB);

// echo "A maior nota da Turma A é: " . maiorNota($alunosTurmaA) . " - ";

// echo "A maior nota da Turma B é: " . maiorNota($alunosTurmaB);

// echo $alunos["4"]["nome"];

// echo $alunos["1"]["nota"] + $alunos["3"]["nota"];

// echo "A média das notas é " . ($alunos["1"]["nota"] + $alunos["2"]["nota"] + $alunos["3"]["nota"] + $alunos["4"]["nota"]) / 4;


// echo "A média dos alunos da turma A é " . calcularMedia($alunosTurmaA) . " - ";
// echo "A média dos alunos da turma B é " . calcularMedia($alunosTurmaB);
