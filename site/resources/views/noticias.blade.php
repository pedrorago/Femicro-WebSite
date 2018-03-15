@include('templates.header2')
@include('templates.headerAlternativo')
@extends("base")

@section('title', 'Notíciais')

@section("conteudo")
	<section id="Noticias">
		<div class="container">
			<main>
					<label for='categorias'>Categorias</label>
					<label for='publicacao'>Mês de publicação</label>
					<label for='especifico'>Buscar termos específicos</label>
					<select class="categorias" id="categorias" value='categorias'>
						<option>Concursos</option>
					</select>
					<select class="publicacao" id='publicacao' value='publicacao'>
						<option>Abril/2017</option>
					</select>
					<input type="text" name="especifico">
					<button id="btnRede"><i class="material-icons">search</i></button>

					<div class='noticias-container'>
					@include('includes.noticias')
					</div>
			</main>
		</div>
	</section>
@stop
<style>
	.sidebar {
		margin-top: -7.1em;
	}
	.liNoticias {
		font-weight: bold;
		background-color: #8A1F14;
	}
</style>