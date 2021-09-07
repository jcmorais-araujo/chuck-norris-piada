<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- PHP -->

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

<!--  -->

<!DOCTYPE html>
<html>

<head>
	<title>Chuck Norris jokes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<link rel="stylesheet" href="./estilo.css">
</head>
<!--Coded with love by Mutiullah Samim-->

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHOxy3f6GPFtSK8MVaRg4gqBAQqg3bCgpLRg&usqp=CAU" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<cite>
								<?= $dados["value"] ?>;
							</cite>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button onclick="recarregar()" type="button" name="button" class="btn login_btn">Nova piada</button>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>

	<!-- Recarregar pagina -->

	<script>
		function recarregar() {
			location.reload();

		}
	</script>
</body>

</html>