<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$alunos = array(
    array("Nome" => "Lucas", "Idade" => 30, "Curso" => "ADS", "Média" => 7.0),
    array("Nome" => "Giovana", "Idade" => 21, "Curso" => "ADS", "Média" => 1.5),
    array("Nome" => "Carlos", "Idade" => 25, "Curso" => "CD", "Média" => 5.5),
    array("Nome" => "Gabriela", "Idade" => 28, "Curso" => "ADS", "Média" => 9.2),
    array("Nome" => "Pedro", "Idade" => 30, "Curso" => "ADS", "Média" => 7.0),
    array("Nome" => "João", "Idade" => 25, "Curso" => "CD", "Média" => 8.5),
    array("Nome" => "Maria", "Idade" => 28, "Curso" => "ADS", "Média" => 9.2),
    array("Nome" => "Ana", "Idade" => 22, "Curso" => "CD", "Média" => 4.0),
    array("Nome" => "Carlos", "Idade" => 27, "Curso" => "ADS", "Média" => 6.7),
    array("Nome" => "Júlia", "Idade" => 24, "Curso" => "CD", "Média" => 4.0),
    array("Nome" => "Vinicius", "Idade" => 18, "Curso" => "CD", "Média" => 7.0),
    array("Nome" => "Guilherme", "Idade" => 28, "Curso" => "ADS", "Média" => 3.0),
    array("Nome" => "Vitória", "Idade" => 19, "Curso" => "CD", "Média" => 10.0),
    array("Nome" => "Mário", "Idade" => 29, "Curso" => "CD", "Média" => 0.0),
    array("Nome" => "Phelipe", "Idade" => 23, "Curso" => "CD", "Média" => 8.0),
    array("Nome" => "Vanessa", "Idade" => 18, "Curso" => "ADS", "Média" => 4.0),
    array("Nome" => "Marcos", "Idade" => 31, "Curso" => "CD", "Média" => 6.0),
    array("Nome" => "Luana", "Idade" => 25, "Curso" => "ADS", "Média" => 6.5),
    array("Nome" => "Jonathan", "Idade" => 23, "Curso" => "ADS", "Média" => 1.9),
    array("Nome" => "Emanuele", "Idade" => 24, "Curso" => "CD", "Média" => 5.5),
    array("Nome" => "Natália", "Idade" => 23, "Curso" => "ADS", "Média" => 3.0),
    array("Nome" => "Arthur", "Idade" => 35, "Curso" => "ADS", "Média" => 6.0),
    array("Nome" => "Daniel", "Idade" => 29, "Curso" => "CD", "Média" => 4.0),
    array("Nome" => "Cristina", "Idade" => 20, "Curso" => "CD", "Média" => 3.0),
    array("Nome" => "Gabriel", "Idade" => 18, "Curso" => "ADS", "Média" => 5.0),
    array("Nome" => "Enzo", "Idade" => 19, "Curso" => "CD", "Média" => 2.5),
    array("Nome" => "Zilma", "Idade" => 29, "Curso" => "CD", "Média" => 7.5),
    array("Nome" => "Yuri", "Idade" => 34, "Curso" => "CD", "Média" => 5.9),
    array("Nome" => "Alessandra", "Idade" => 24, "Curso" => "ADS", "Média" => 6.5),
    array("Nome" => "Ricardo", "Idade" => 25, "Curso" => "ADS", "Média" => 1.5),
    array("Nome" => "Bianca", "Idade" => 28, "Curso" => "CD", "Média" => 4.0)

);

#ordem alfabética
function comparar_nomes($a, $b) {
    return strcmp($a['Nome'], $b['Nome']);
}

usort($alunos, 'comparar_nomes');

#array
$situacao_por_curso = array(
    "ADS" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0),
    "CD" => array("Aprovado" => 0, "Exame Final" => 0, "Reprovado" => 0)
);


echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Idade</th><th>Curso</th><th>Média</th><th>Situação</th></tr>";

#loop
foreach ($alunos as $aluno) {
    echo "<tr>";
    foreach ($aluno as $chave => $valor) {
        echo "<td>$valor</td>";
    }
    echo "<td>";
    if ($aluno['Média'] < 2) {
        echo "Reprovado";
        $situacao_por_curso[$aluno['Curso']]['Reprovado']++;
    } elseif ($aluno['Média'] >= 2 && $aluno['Média'] < 6) {
        echo "Exame Final";
        $situacao_por_curso[$aluno['Curso']]['Exame Final']++;
    } else {
        echo "Aprovado";
        $situacao_por_curso[$aluno['Curso']]['Aprovado']++;
    }
    echo "</td>";
    echo "</tr>";
}


echo "</table>";

#alunos por curso
echo "<h2>Situação dos Alunos por Curso:</h2>";
echo "<table border='1'>";
echo "<tr><th>Curso</th><th>Aprovado</th><th>Exame Final</th><th>Reprovado</th></tr>";
foreach ($situacao_por_curso as $curso => $situacao) {
    echo "<tr>";
    echo "<td>$curso</td>";
    echo "<td>{$situacao['Aprovado']}</td>";
    echo "<td>{$situacao['Exame Final']}</td>";
    echo "<td>{$situacao['Reprovado']}</td>";
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>