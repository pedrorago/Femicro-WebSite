<!DOCTYPE html>
<html>
<head>
	<meta charset="UT
	ort" content="width=device-width, initial-scale=1">
	<meta author="Mangue Tecnologia">
	<link rel="icon" href="https://static.wixstatic.com/media/bd1987_f687d4c784e047ccab6216d8b2ed6b02~mv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/bd1987_f687d4c784e047ccab6216d8b2ed6b02~mv2.png">
	<meta name="description" content="A FEMICRO-PE é a entidade representativa das microempresas, empresas de pequeno porte e empreendedores individuais.">
	<title>Femicro - @yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Zilla+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsivo.css">
</head>
<body>
	<div class="blurOut">
		<div class="modal-funcionario">
			<i class="material-icons fecha-modal" aria-hidden="true">close</i>
			<div class="box-left-modal">
				<div class="modal-img">
					<img src="">
				</div>
			</div>
			<div class="box-right-modal">
			<H2></H2>
			<h3></h3>
			<p></p>
			</div>
		</div>
	</div>
	<div class="content">
		@yield("conteudo")
		<footer>
			<div class="rodape-conteudo">
				<p class="rodape-descricao"><strong>Femicro | PE </strong>- Federação das Associações de microempresas e empresas de pequeno porte
					<br>Av. Norte, 1098 - Santo Amaro - CEP: 50.100-000 - Recife-PE<br>
					(81) 3231.2560 ou (81) 3423.0284</p>
					<i class="material-icons scrolltop">expand_less</i>
					<p class="rodape-desenvolvido">Desenvolvido pela <strong>Mangue Tecnologia. </strong></p>
					<img src="img/mangue-simbol.svg" class="simbol-mangue">
				</div>
			</footer>
		</div>
		<script src="js/jquery.js"></script>
		<script src="plugins/slick/slick.min.js"></script>
		<script src="js/slide.js"></script>
		<script src="js/parceiros-slide.js"></script>
		<script src="js/app.js"></script>
	</body>
	</html>