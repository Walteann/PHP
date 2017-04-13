<!DOCTYPE html>
<html>
<head>



  <meta charset="UTF-8"/>
  <title>Estrutura Condicional 2</title>
</head>
<body>
<div>
    <?php
      
	$ano = isset($_GET['ano'])? $_GET['ano'] : 1900;
	$idade = date("Y") - $ano;

		echo "voce nasceu em $ano e tera $idade anos ";

		if($idade < 16){
			$tipoVoto =  "Não Vota";
		}elseif(($idade >= 16 && $idade < 18) || ($idade > 65)){ // não é else if(separado) e sim "elseif" JUNTO.
				$tipoVoto =  "Voto opcional";
			}else{
				$tipoVoto = "Voto obrigatorio";
			}

		

		echo "para essa idade $tipoVoto";
	
    ?>
    <br><br><a href="pessoa.html">Voltar</a>
</div>
</body>
</html>
 