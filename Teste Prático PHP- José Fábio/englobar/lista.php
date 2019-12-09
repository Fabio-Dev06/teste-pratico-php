<?php
require_once 'produto/classe-produto.php';

  //Passando parâmetros para o Banco na Classe PRODUTO
$p = new Produto("englobar","localhost","root","");

?>

<h1>Registro de vendas</h1>

<table class="table table-bordered table-hover">
  <thead>
    <th>Nome</th>
    <th>Data</th>
    <th>Fornecedor</th>
    <th>Endereço</th>
    <th>CEP</th>
    <th>Valor</th>
  </thead>
<?php
    $dados = $p->listar();
    if(count($dados) > 0){
      for ($i=0; $i < count($dados) ; $i++) { 
          echo "<tr>";
        foreach ($dados[$i] as $k => $v) {
          if($k != "id"){
            echo "<td>".$v."</td>";
          }
        }
        ?>
        <?php
          echo "</tr>";
      }

    }else{
      echo "Banco vazio!";
    }
  ?>
  <tr>
    <th>Valor Total: R$</th>
    <td colspan="5">-|-</td>
  </tr>
</table>