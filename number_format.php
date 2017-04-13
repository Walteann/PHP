<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8"/>
  <title>PHP Formatar Números.</title>
</head>
<body>
<div>
    <?php
       
       $numero = 354.265982; // Número que deseja formatar com uma quantidade de casas decimais.

       $numero = number_format($numero,2); // number_format(variavel,qtd_de_casas_decimais);

       echo $numero; // imprimi 354.27. ele tbm arredonda.



    ?>
</div>
</body>
</html>
 