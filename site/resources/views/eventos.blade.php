@include('templates.header2')
@include('templates.headerAlternativo')
@extends("base")

@section('title', 'Eventos')

@section("conteudo")
<section id="Eventos">
	<div class="container">
		<main>
			<label for="mes">Selecionar mês</label>
			<select id='mes'>
				<option>Todos os eventos</option>
			</select>

			<div class="eventos-container">
				<h2>Abril 2017</h2>
				
				@include('includes.eventos')

			</div>
		</main>
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