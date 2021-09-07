<!-- Carregar o back-end de gerar piadas -->

<?php

require_once("geradorPiadas.php");

?>

<!-- fim do gerar piada -->


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<title>Chuck Norris jokes</title>

	<!-- Meu estilo css -->
	<link rel="stylesheet" href="./estilo.css">

	<!-- Recarregar página -->
	<script src="./recarregarPagina.js"></script>

</head>


<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHOxy3f6GPFtSK8MVaRg4gqBAQqg3bCgpLRg&usqp=CAU" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<form>
						<div class="input-group mb-3">
							<cite>
								<?= $dados["value"] ?>
							</cite>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button onclick="recarregar()" type="button" name="button" class="btn login_btn">New Joke</button>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>





</body>


</html>