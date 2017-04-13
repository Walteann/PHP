<!DOCTYPE html>
<html>
<head>



  <meta charset="UTF-8"/>
  <title>Estrutura Condicional 3</title>
</head>
<body>
<div>
    <?php
      
	$nota1 = isset($_GET['nota1'])? $_GET['nota1'] : 0;
	$nota2 = isset($_GET['nota1'])? $_GET['nota1'] : 0;

	$media = ($nota1+$nota2)/2;

		if($media >= 7){
			$situacao = "APROVADO";
		}elseif($media > 5 && $media <7){
			$situacao = "RECUPERACÃO";
		}elseif($media <= 5){
			$situacao = "REPROVADO";
		}

	echo "Aluno tirou $nota1 e $nota2 , sua média é: $media <br>";
	echo "O Aluno se encontrar $situacao";
	
    ?>
    <br><br><a href="pessoa.html">Voltar</a>
</div>
</body>
</html>
 