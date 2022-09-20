<?php include "./cabecalho.php"; ?>
<?php
   if (!empty($_POST) && isset($_POST)){
      if (empty($_POST["email"])) {
         ?>
            <div class="alert alert-danger">
               O Campo email deve ser preenchido
            </div>
         <?php
      } else if(empty($_POST["nome"])){
         ?>
         <div class="alert alert danger">
            O campo nome deve ser preenchido
         </div>
         <?php
      }
      else{
         ?>
            <div class="alert alert-success">
               Sua Reclamação foi enviada com sucesso!
            </div>
         <?php
      }
   }
?>
   <h1>Entre em contato conosco</h1>

<form action="./contato.php" method="post">

   <div class="form-group col-4 offset-4">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control">
   </div>   

   <div class="form-group col-4 offset-4">
      <label>Email</label>
      <input type="email" require name="email" class="form-control">
   </div>
   <br>
   <div class="form-group col-4 offset-4">
   <textarea class="form-control" name="obs"></textarea>
   </div>
   <br>
   <button type="submit" class="btn btn-warning">
      Enviar dados
   </button>
</form>
<?php include "./rodape.php"; ?>