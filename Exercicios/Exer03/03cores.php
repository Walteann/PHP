<!DOCTYPE html>
<html>
<head>

	<?php
		$txt = isset($_GET['t'])? $_GET['t']:"Texto Generico";
		$tam = isset($_GET['tam'])? $_GET['tam']:"12pt";
		$cor = isset($_GET['cor'])? $_GET['cor']: "#000000";
        
    ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Mudando CSS com PHP</title>

  <style>
  		span.texto{
  			color: <?php echo $cor; ?>;
  			font-size: <?php echo $tam; ?>;
  		}
  </style>
</head>
<body>
<div>
    <?php

    echo "<span class='texto'>$txt</span>"
        
    ?>

    <br><br><a href="exercicio3.html"> Voltar</a>
</div>
</body>
</html>
 