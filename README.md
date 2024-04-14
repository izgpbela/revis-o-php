<h1>Exercícios de revisão (vetores, laço de repetição, if/else/else if)</h1>
<p>1) Escreva o código PHP para representar um vetor com os seguintes dados:

a)

"ADS"	"CD"	"ADS"	"ADS"	"CD"	"CD"	"ADS"
b)

Nome	Idade	Curso	Média
Pedro	30	ADS	7.0
Observação: neste item "b" a primeira linha representa os índices do vetor e a segunda linha os valores de cada posição do vetor





2) Escreva o código PHP para representar os dados abaixo em um vetor multidimensional.

a)

Nome	Curso	Média	Situação
Maria	ADS	7.0	
João	CD	5	
José	CD	8.0	
Pedro	ADS	1.5	
Paulo	ADS	6.0	

b) complete o código PHP para percorrer os dados (use foreach - veja a dica abaixo) e preencha a coluna "situação" de acordo com a tabela abaixo:

Média
média < 2	média >= 2 e média < 6
média >= 6
Reprovado	 Exame Final
Aprovado
c) complemente o código para
i.  exibir os dados do vetor como uma tabela HTML
ii. contar e exibir a situação dos alunos por curso. Por exemplo:
ADS:
- Aprovado: 2
- Exame Final: 0
- Reprovado: 1
CDD:
- Aprovado: 1
- Exame Final: 1
- Reprovado: 0

DICAS:
1) Crie o vetor com a  coluna "situação" contendo uma string vazia ("").
2) Use o foreach e if/else para atribuir a situação de cada aluno. 
# foreach irá percorrer o vetor dados, de modo que cada vez a variável $linha terá os dados de um(a) aluno(a)
foreach($dados as $linha){
  if ($linha["media] < 2) {
    $linha["situacao"] = "Reprovado";
  } elseif (media <6) {
    $linha["situacao"] = "Exame Final";
  } else {
    $linha["situacao"] = "Aprovado";
  }
}

3) Para exibir os dados de um vetor bidimensional como uma tabela HTML pode usar algo semelhante ao código abaixo.
Vai percorrer os dados do vetor mais uma vez (da primeira vez, foi para atribuir a situação de cada aluno).
Suponha o vetor $dados
$dados[0] = array(0=>"A", 1=>"B");
$dados[1] = array(0=>"C", 1=>"D");
$dados[2] = array(0=>"E", 1=>"F");
O código para exibir o vetor $dados como tabela HTML seria:
echo '<table border="1">';
foreach($dados as $linha){
  echo '<tr>';
  foreach($linha as $v){
    echo "<td>$v</td>";
  }
  echo '</tr>';
}
echo '</table>';</p>
