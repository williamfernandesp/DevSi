<?php include "./cabecalho.php"; ?>

    <h1>Lista de usuários</h1>

<form action="./produtos.php" method="get">
    <div class="form-group col-4">
        <label>Nome</label>
        <input 
            type="text" 
            class="form-control"
            name="nome"/>
    </div>
    <div class="form-group col-4">
        <label>Endereço</label>
        <input 
            type="text" 
            class="form-control"
            name="endereco"/>
    </div>
    <div class="form-group col-4">
        <label>CPF</label>
        <input 
            type="text" 
            class="form-control"
            name="cpf"/>
    </div>
    <button type="submit" class="btn btn-success">
        Enviar
    </button>

</form>


   
<?php include "./rodape.php"; ?>