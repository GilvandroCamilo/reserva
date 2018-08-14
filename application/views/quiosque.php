
<style type="text/css">
#alugar{
	display: none;
	border-style: solid;
	padding-bottom: 20px;
	background-color: #fff4a6;
	margin-top: 100px;
	width: 29%;
	float: right;
}
#alugar > div{
	margin-top: 20px;
}
	#descricao{
		margin-top: -100px;
		float: left;
	}
	#sobreQ{
		margin-left: 2%;
		float: left;
		width: 70%;
		
	}
	h1{
		margin-top: 100px;
	}
	#locador{
		background-color: #fff4a6;
		border-style: solid;
		float: left;
		width: 29%;
	}
	#locador button{
		color: white;
		font-weight: bold;
		margin-left: 10px;
		padding: 10px 100px 10px 100px;
		background-color: orange;
		border-radius: 10px;
	}
	#sobreQ img{
		float: left;
		width: 70%;
	}
	#valor{
		margin-top: 140px;
		background-color: mediumpurple;
		float: right;
		font-size: 30px;
		padding: 10px 100px 10px 20px;
		border-bottom-left-radius: 50px;
		border-top-left-radius: 50px;
	}
	#alugar button{
		color: white;
		font-weight: bold;
		margin-left: 50px;
		padding: 10px 100px 10px 100px;
		background-color: orange;
		border-radius: 10px;
		margin-top: 10px;
	}
</style>
<div id="sobreQ">
<p id="valor"><?=$quiosque[0]->valor?> R$</p>

<h1><?=$quiosque[0]->local?></h1>
<img src="<?=$quiosque[0]->imagem?>">
<div id="locador">
	<p>Nome: <?=$quiosque[0]->locador?></p>
	<p>Tel: <?=$quiosque[0]->telefone?></p>
	<button onclick="alugar()">Alugar</button>
</div>
<div id="descricao">
	<h1>preço <?=$quiosque[0]->valor?></h1>
	<p><?=$quiosque[0]->descricao?></p>
</div>	
</div>
<form action="<?= base_url()?>dashboard/alugar" method="post">
	<div id="alugar">
		<h3>Insira seus dados: </h3>
		<div>
			<label for="nome">Nome</label>
			<input type="text" name="nome" id="nome" placeholder="nome">
		</div>
		<div>
			<label for="telefone">Telefone</label>
			<input type="text" name="telefone" id="telefone" placeholder="telefone">
	<input type="hidden" name="idquiosque" value="<?=$quiosque[0]->idquiosque?>">
		</div>	
		<button>Confirmar</button>
	</div>
</form>
<script type="text/javascript">
	function alugar(){
		document.getElementById("alugar").style.display = "block";
	}
</script>