<style type="text/css">
	.quiosque{
		border-style: solid;
		width: 60%;
		margin-right: auto;
		margin-left: auto;
		right: 0;
		border-color: black;
	}
	#quiosques{
		right: 0;
		margin-top: 12%;
	}
	.quiosque img{
		display: flex;
		width: 200px;
		float: left;
		height: auto;
		margin-right: 10px;
		height: 110px;
	}
	.quiosque #valor{
		float: right;
		margin-right: 10%;
		font-weight: bold;
		margin-top: 10px;
		font-size: 20px;
	}
	.quiosque #data{
		float: right;
		margin-right: 10px;
		font-size: 18px;
		margin-top: 13px;
	}
	a{
		text-decoration: none;
		color: black;
	}
	.quiosque p{
		color: black;
	}
	#categorias{
		float: left;
		margin-left: 10px;
	}
	#categorias div{
		border-style: solid;
		width: 250px;
	}
	#categorias div a{
		text-decoration: none;
		margin-top: 10px;
	}
	#categorias div	h4{
		text-align: center;
		margin-top: 0px;
		background-color: gray;
		height: 30px;
	}
	#buscar{
		border-color: lightgreen;
		width: 100%;
		margin-bottom: 10px;
		height: 30px;
		border-radius: 20px;
	}
</style>
<body>
	<div id="categorias">
		<input id="buscar" placeholder="Buscar"></input>

		<div>
			<h4>buscar locais</h4>
			<a href="#">Plano Diretor Norte </a><br>
			<a href="#">Plano Diretor Sul</a><br>
			<a href="#">Plano Diretor Leste</a><br>
			<a href="#">Plano Diretor Oeste</a><br>
		</div>

	</div>
	<div id="quiosques">
		 <?php foreach ($quiosques as $quiosque) {
		 	?><a href="<?= base_url('dashboard/escolher_quiosque/'.$quiosque->idquiosque) ?>">
		 	<div class="quiosque">
		 		<img src="<?=$quiosque->imagem?>">
			 	<h3><?=$quiosque->local?></h3>
			 	<p id="data"><?= $quiosque->data?></p>
			 	<p id="valor">R$ <?= $quiosque->valor?></p>
			 	<p><?= $quiosque->locador ?> </p>
			 	<p><?=$quiosque->situacao?></p>
			 	
		 	</div>
		 	</a>
		 <?php
		 } ?>
	 </div>
</body>