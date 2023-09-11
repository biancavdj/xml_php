<?php 
// Transformando arquivo XML em Objeto
$xml = simplexml_load_file('escola.xml');
 
// Exibe as informações do XML
foreach ($xml->children() as $aluno){
	
  echo "Nome". $aluno->nome . "<br>";
  echo "Curso: " . $aluno->curso . "<br>";
  echo "Nascimento: ". $aluno->nascimento->dia . "/". $aluno->nascimento->mes . "/". $aluno->nascimento->ano. "<br>";
  echo "Logradouro: ". $aluno->logradouro . "<br>";
  echo "Número: ". $aluno->numero . "<br>";
  echo "Complemento: ". $aluno->complemento. "<br>";
  echo "Bairro: ". $aluno->bairro . "<br>";
  echo "Cep: ". $aluno->cep. "<br>";
  echo "Cidade: ". $aluno->cidade. "<br>";
  
 echo "<hr>";
  
}
 ?>