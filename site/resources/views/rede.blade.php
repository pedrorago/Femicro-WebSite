@include('templates.header2')
]
@extends("base")

@section('title', 'Rede de Negócios')

@section("conteudo")
<section id="Rede">
	<div class="container">
		<main>
			<h2>Rede de negócios</h2>
			<form>
				<p class="label">Filtrar por cidade</p>
				<p class="label">Buscar termos específicos</p>
				<select value="cidades" class="selectCidades">
					<option>Todas as cidades</option>
				</select>
				<input type="text" name="cidade" class="buscarInput">
				<button id="btnRede"><i class="material-icons">search</i></button>
			</form>
			
			<div class="anuncios">
				<div class="anuncios-box"  data-nome="Mangue Tecnologia e Consultoria" data-img="img/anuncios/1.png" data-desc="Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get." data-local="Recife/PE">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
				<div class="anuncios-box">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
				<div class="anuncios-box">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
				<div class="anuncios-box">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
				<div class="anuncios-box">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
				<div class="anuncios-box">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
				<div class="anuncios-box">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
				<div class="anuncios-box">
					<span class="anuncios-img">
						<img src="img/anuncios/1.png">
						<span class="anuncios-overlay"></span>
					</span>
					<h3 class="anuncio-nome">Mangue Tecnologia e Consultoria</h3>
					<span class="anuncio-local">
					<i class="material-icons">room</i>
					<p>Recife/PE</p>
					</span>
					<p class="anuncio-desc">Descrição dos serviços vão aqui, seems from the moment you begin to take your love of astronomy seriously, the thing that is on your mind is what kind of telescope will you get. </p>
				</div>
			</div>
		</main>
	</div>	
</section>
@stop