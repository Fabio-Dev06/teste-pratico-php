<?php

require_once 'produto/classe-produto.php';

	//Passando parâmetros para o Banco na Classe PRODUTO
$p = new Produto("englobar","localhost","root","");

?>

<h1>Registro de Vendas</h1>

	<!-- Formulário -->
	<form method="POST">
	  <div class="form-group">
	    <input type="text" class="form-control" id="nome" placeholder="Nome do produto" name="nome">
	  </div>
	  <div class="form-group">
	    <input type="date" class="form-control" id="data" name="data">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" id="fornecedor" placeholder="Fornecedor" name="fornecedor">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco">
	  </div>
	  <div class="form-group">
	    <input type="text" class="form-control" id="cep" placeholder="CEP" name="cep">
	  </div>
	   <div class="form-group">
	    <input type="text" class="form-control" id="preco" placeholder="Valor do Produto" name="preco">
	  </div>
  	<input type="submit" class="btn btn-primary" value="Cadastrar">
</form>

<?php

if(isset($_POST['nome'])){
	// addslashes --> evita problemas como SQLInjection
	$nome = addslashes($_POST['nome']);
	$data = addslashes($_POST['data']);
	$fornecedor = addslashes($_POST['fornecedor']);
	$endereco = addslashes($_POST['endereco']);
	$cep = addslashes($_POST['cep']);
	$preco = addslashes($_POST['preco']);

	if(empty($nome) || empty($data) || empty($fornecedor) || empty($endereco) || empty($cep) || empty($preco)){
		echo "<script>alert('Preencha todos os campos para poder prosseguir!');</script>";
	}else{
		$p->cadastrar($nome,$data,$fornecedor,$endereco,$cep,$preco);
		echo "<script>alert('Cadastro de venda concluída!');</script>";
		header("Location:index.php");

	}
}

?>