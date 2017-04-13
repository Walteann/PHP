<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8"/>
  <title>Pegando idade.</title>
</head>
<body>
<div>
    <?php

    	$nome = isset($_GET['nome']) ? $_GET["Nome"] : "[não informado]" ; // o isset verifica se tem algo escrito, e faz um operador ternario caso não tenha nada.
    	$ano = isset($_GET['ano']) ? $_GET['ano'] : 0;
    	$sexo = isset($_GET['sexo']) ? $_GET['sexo']: "sem sexo";

    	$idade = date("Y") - $ano; // date("Y") ele vai colocar o ANO atual e subtrair com o ano da variavel ano, assim tendo a idade.

    	echo "$nome e $sexo tem $idade anos "; 


    ?>

    <br><a href="exercicio2.html">Voltar </a>
</div>
</body>
</html>
 