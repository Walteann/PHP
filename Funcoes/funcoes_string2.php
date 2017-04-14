<?php 

/*	printf()	print_r()	wordwrap()	str_len()	trim()
	
	ltrim()		rtrim() 	explode()	chr()		ord()

	srt_word_count()		implode()	str_split()


13 primeiras da parte 1
*/

## PARTE 2


//strtolower faz com que todas as letras fiquem em menusculo;

$texto = "Walteann Costa";

echo strtolower($texto); // ai fica:   walteann costa


echo "<br>";

// strtoupper FAZ com que todas as letras em MAIUSCULA.


// função ucfirst()  // vão coloca a primeira letra em MAIUSCULA


$texto2 = "Walteann Costa";

echo ucfirst($texto2);

echo "<br>";

// fu~ção ucwords() altera todas as primeiras letras de cada palavra colocando em maiusculo.


// função strrev() inveter toda uma string;

echo strrev($texto2);


?>