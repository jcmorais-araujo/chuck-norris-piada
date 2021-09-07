<?php

$link = "https://api.chucknorris.io/jokes/random";

$conteudo = file_get_contents($link);

// echo $conteudo; //Observando o retorno


//Convertendo o arquivo Json em Array.

$dados = json_decode($conteudo, true);

// print_r($dados);

//Pegar o array de piada

// echo $dados["value"];

?>