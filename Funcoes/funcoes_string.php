<!DOCTYPE html>
<html>
<head>
 
  <meta charset="UTF-8"/>
  <title>25 FUNCOES EM PHP</title>
</head>
<body>
<div>
    <?php
        

        // print_r
    	echo "printf, ele imprimir e formatar<br>";

    	$p = "Leite";
    	$pr = 4.5;
    	echo "O $p custa R$ $pr <br>"; // com echo


    	echo "O $p custa R$ ".number_format($pr,2)."<br>";
    	//com printf

    	printf("O %s custa R$ %.2f",$p,$pr); // %s para string e %f para o float

    	echo "<br><br>";

    	//print_r  mostra detalhe de uma variavel, principalmente de um vetor.

    	$x[0] = 4;
    	$x[1] = 8;
    	$x[2] = 16;

    	print_r($x);  // logo ele vai mostrar     Array ( [0] => 4 [1] => 8 [2] => 16 )


    	$v2 = array (3,7,6,2,1,9);

    	print_r($v2); // Array ( [0] => 3 [1] => 7 [2] => 6 [3] => 2 [4] => 1 [5] => 9 )

    	// vale ressaltar que print_r pode ser substituito por var_dump() ou var_export()


    	// FUNCAO WORDWRAP cria qubera de linha dentro do codigo

    	echo "<br><br>";

    	$txt =" Este é um exemplo de sitrng gigante que..<br>";
    	$res = wordwrap($txt,5);

    	echo($res);


    	// strlen CALCULA o tamanho de uma String.

    	$texto = "Walteann";
    	$tamanho = strlen($texto);
    	echo $tamanho; // ele imprimi 8	

    	// função trim remove espaço no inicio e no final

    	// função ltrim remove somente o espaço do inicio.

    	// função rtrim remove somente os espaço do final.

    	// FUNÇÃO str_word_count  ele CONTA a quantidade de PALAVRAS em uma STRING

    	$frase =" Eu estou estudando PHP";

    	$cont = str_word_count($frase,0);

    	echo $cont; // ai ele MOSTRA 4

    	// função explode() , ele procura espaço em brancos e quebra em formar de vetor
    	// função str_split() ele quebra uma string colocando cada letra em um vetor.
    	// função implode() é o inverso do explode().
    	// função join() faz a mesma coisa que o implode()
    	// função chr() mostra o caracter atraves de seu codigo ASCII
    	// função ord() mostra a o codigo do caracter atraves de um caracter ASCII
    	





    ?>
</div>
</body>
</html>
 