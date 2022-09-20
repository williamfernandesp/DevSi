<?php include "./cabecalho.php"; ?>

<h1>Minha lista de produtos</h1>

<form action="./produtos.php" method="post">

   <div class="form-group col-4 offset-4">
      <label>Descrição</label>
      <input type="text" name="descricao" class="form-control">
   </div>

   <div class="form-group col-4 offset-4">
      <label>Valor</label>
      <input type="text" name="valor" class="form-control">
   </div>
   <br>
   <div class="form-group col-4 offset-4">
      <label>Quantidade em Estoque</label>
      <input type="text" name="qtdEstoque" class="form-control">
   </div>
   <br>
   <button type="submit" class="btn btn-warning">
      Enviar dados
   </button>
</form>

<?php
   if (!empty($_POST) && isset($_POST)){
      if (empty($_POST["descricao"])) {
         ?>
            <div class="alert alert-danger">
               O Campo Descrição deve ser preenchido
            </div>
         <?php
      } else if(empty($_POST["valor"])){
         ?>
         <div class="alert alert danger">
            O campo nome1 deve ser preenchido
         </div>
         <?php
      } else if(empty($_POST["qtdEstoque"])){
        ?>
        <div class="alert alert danger">
           O campo Quantidade de Estoque deve ser preenchido
        </div>
        <?php
      }else{
         ?>
            <table class="table">
                <tr>
                    <td>
                        <?php print_r($_POST["descricao"])?>
                    </td>
                    
                    <td>
                        <?php print_r($_POST["valor"])?>
                    </td>
                    
                    <td>
                        <?php print_r($_POST["qtdEstoque"])?>
                    </td>
                </tr>
            </table>
         <?php
      }
   }
?>

<?php include "./rodape.php"; ?>