@include('templates.header2')
@include('templates.headerAlternativo')
@extends("base")

@section('title', 'Evento nome')

@section("conteudo")
<section id="Evento">
	<div class="container">
		<main>
			<div class='evento-single'>
				<i class="material-icons share">share</i>
				<div class="eventoFoto">
					<img src="img/eventos/4.jpg">
					<span class="evento-overlay"></span>
				</div>
				<h1>MINICURSO: METODOLOGIA DE GESTÃO DE PROJETOS - SCRUMAAAAAAAA</h1>
				<span class='data-evento'>
					<i class="material-icons">date_range</i>
					<p>15 de abril de 2017</p>
				</span>
				<span class="location-evento">
					<i class="material-icons">place</i>
					<p>CENTRO DE CIÊNCIAS SOCIAIS APLICADAS</p>
				</span>
				<span class="time-evento">
					<i class="material-icons">watch_later</i>
					<p>18:00</p>
				</span>
				<p class='evento-desc'>You may be a person who loves to cook. You absolutely love to spend time in your kitchen. As a result, you like to outfit your kitchen with the latest and with the best cookware that is available on the market. However, and with that said, if you are like most people in the 21st century, you also live your life on a budget. You simply do not have a great deal of extra money to blow and spend at will. Therefore, with the goal of outfitting your kitchen with the latest, with the best in cookware, you also want to keep your eyes on ways in which you can save money on your cookware purchases. To this end, you might want to focus your attention on the Internet and the World Wide Web, specifically on overstock merchandise sites that are springing up all over the Net.</p>
				<a href='/eventos' class="btn">Voltar</a>
			</div>
		</main>
		@include('includes.proximosEventos')
	</div>
</section>
@stop
<style>
	.sidebar {
		margin-top: -7.1em;
	}
	.liEventos {
		font-weight: bold;
		background-color: #8A1F14;
	}
</style>