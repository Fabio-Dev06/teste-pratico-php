<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<title>Sistema de Vendas - By.:José Fábio</title>
</head>
<body>

	<div class="container">

		
		<nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="index.php">Englobar</a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-nav">
			    <span class="navbar-toggler-icon"></span>
			  </button>

		  <div class="collapse navbar-collapse" id="menu-nav">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home <span class="sr-only">(página atual)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php?pagina=cadastro">Cadastro</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php?pagina=listar">Listar</a>
		      </li>
		    </ul>
		  </div>
		</nav>
		
		<br><br><br>
		<div class="alert alert-warning" role="alert">
			Lembre-se de utilizar o menu da Barra de Navegação.
		</div>

	<!-- Jumbotron -->
	<div class="row">
		<div class="col-sm-12 col-xl-12">
			<div class="jumbotron">
			  <h1 class="display-4">Sistema de Vendas</h1>
			  <p class="lead">Resolução de um problema.</p>
			  <hr class="my-4">
			  <p>Nome, Data, Fornecedor, Endereço (CEP) e Valor total</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4 col-xl-12">
			<?php

			if(isset($_REQUEST['pagina'])){

				$pagina = $_REQUEST['pagina'];

				if($pagina == "cadastro"){
					include("cadastro.php");
				}else if($pagina == "listar"){
					include("lista.php");
				}
			}
	
			?>
		</div>
	</div>


</div>
	<footer>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
	</footer>

</body>
</html>