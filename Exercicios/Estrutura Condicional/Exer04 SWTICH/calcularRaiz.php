<!DOCTYPE html>
<html>
<head>



  <meta charset="UTF-8"/>
  <title>Estrutura SWITCH 4</title>
</head>
<body>
<div>
    <?php
      $numero = isset($_GET['numero'])? $_GET['numero'] : 0;
      $op = isset($_GET['op'])? $_GET['op'] : 1;

      switch ($op) {
      	case '1':
      		$resposta = $numero * 2; 
      		break;
      	case '2':
      		$resposta = $numero ^ 3;
      	case '3':
      		$resposta = number_format(sqrt($numero),2);
       		break;		
      }

      echo "Resposta: $resposta";
	
	
    ?>
    <br><br><a href="raiz.html">Voltar</a>
</div>
</body>
</html>
 