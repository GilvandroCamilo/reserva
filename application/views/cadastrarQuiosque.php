<style type="text/css">
	.container{
		margin-top: 80px;
	}
</style>
<div class="container">
  <h2>Cadastrar Produto</h2>
  <p>The form below contains two input elements; one of type text and one of type password:</p>
  <form action="<?= base_url()?>dashboard/cadastrar" enctype="multipart/form-data" method="post">
    <div class="form-group col-md-4">
      <label for="usr">Nome:</label>
      <input type="text" class="form-control" name="nome" id="nome">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">Local:</label>
      <input type="text" class="form-control" name="local" id="local">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">Valor:</label>
      <input type="text" class="form-control" name="valor" id="valor">
    </div>

    <div class="form-group col-md-4">
      <label for="pwd">Telefone:</label>
      <input type="text" class="form-control" name="telefone" id="descricao">
    </div>

    <div class="form-group col-md-4">
      <label for="pwd">Descrição:</label>
      <input type="text" class="form-control" name="descricao" id="descricao">
    </div>
    <div class="form-group col-md-4">
      <label for="imagem">Imagem:</label>
      <input type="file" class="form-control" name="imagem" id="imagem">
    </div>
    <button class="btn btn-success col-md-2">Enviar</button>
  </form>
</div>
<form>
