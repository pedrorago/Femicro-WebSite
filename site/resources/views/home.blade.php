@include('templates.header')

@extends("base")

@section('title', 'Início')

@section("conteudo")
	<section id="index">

		<span class="blend-slide"></span>
		<div class="slide">
			<?php
				$sliders = $page['slider'];
				foreach ($sliders as $key => $value):
				?>	
					<div class="slide-box">
						<img src="<?= $value['img']; ?>">
						<div class="container">
						<p class="slide-paragrafo1"><?= $value['ban_descricao']; ?></p>
						<a href="<?= $value['ban_link']; ?>" class="slide-button">VER MAIS</a>
						</div>
					</div>
				<?php
				endforeach;
			?>
		</div>
	</section>

	<section id="noticiais">
		<div class="container">
			<h2>Últimas notícias</h2>
			@include('includes.noticiasHome')
			<a href="#" class="noticiais-button">VER MAIS</a>

		</div>
	</section>

	<section id="parceiros">
		<div class="container">
			<h2>Parceiros</h2>
			<div class="parceiros-slide">
				<a href="#" class="parceiros-box"><img src="img/mangues.png"></a>

				<a href="#" class="parceiros-box"><img src="img/mangues.png"></a>

				<a href="#" class="parceiros-box"><img src="img/mangues.png"></a>

				<a href="#" class="parceiros-box"><img src="img/mangues.png"></a>

				<a href="#" class="parceiros-box"><img src="img/mangues.png"></a>

				<a href="#" class="parceiros-box"><img src="img/mangues.png"></a>
			</div>
			<div class="arrows"></div>
		</div>
	</section>

	<section id="contato">
		<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15802.249276061666!2d-34.8818939!3d-8.0439772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33a5eb9f05bb4b71!2sFEMICRO!5e0!3m2!1spt-BR!2sbr!4v1503754919944" width="75%" height="495" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<form class="contato-form" method="post" onsubmit="return false;">
			<h4>Receba novidades no e-mail</h4>
			<label for="nome">Seu nome</label>
			<input type="text" name="nome" id="nome">
			<label for="email">Seu email</label>
			<input type="email" name="email" id="email">
			<label for="msg">Seu nome</label>
			<textarea id="msg" name="msg"></textarea>
			<button type="submit">ENVIAR</button>
		</form>
	</section>
@stop