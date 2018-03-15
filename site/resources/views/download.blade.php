@include('templates.header')

@extends("base")

@section('title', 'Download')

@section("conteudo")

<section id="header-institucional">
	<section id="AreaBanner">
		<span class="blend-slide"></span>
		<img src="img/institucional/banner.png">
		<div class="container">
			<p class="slide-paragrafo1">Downloads</p>
		</div>
	</section>
</section>

<section id="Download">
	<main>
		<div class="container">
			<div class='left-box'>
				<h2>Agrupamento 1</h2>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>

				<h2>Agrupamento 2</h2>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>
				<span class="download-box">
					<i class="material-icons page">insert_drive_file</i>
					<p>Nome do arquivo.ext</p>
					<a href="#" download><i class="material-icons" id="file">file_download</i>Download</a>
				</span>
			</div>
		</div>

		<div class='right-box'>
			<form>
				<h1>Receba novidades no e-mail</h1>
				<label for='nome'>Seu nome</label>
				<input type="text" name="nome" id='nome'>
				<label for='email'>Seu email</label>
				<input type="email" name="email" id='email'>
				<label for='mensagem'>Sua mensagem</label>
				<textarea id='mensagem' name='mensagem'></textarea>
				<button class="btn" type="submit">Enviar</button>
			</form>
		</div>
	</div>
</section>

@stop