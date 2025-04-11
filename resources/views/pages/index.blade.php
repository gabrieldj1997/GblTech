<!doctype html>
<html lang="en">

@include('layout.structure.head', ["title" => "GBL Tech - Inovações teste"])

<body>

	@includeIf('layout.structure.header', ["text" => " Bem vindo", "position" => true])

	<div class="w3l-banner-slider">
		<div class="wrapper-container">

			<main class="sliders-container">

				<ul class="pagination">
					<li class="pagination__item"><a class="pagination__button"></a></li>
					<li class="pagination__item"><a class="pagination__button"></a></li>
					<li class="pagination__item"><a class="pagination__button"></a></li>
					<li class="pagination__item"><a class="pagination__button"></a></li>
				</ul>
				<div class="social">
					<a class="" href="https://www.linkedin.com/in/gabrieldj1997/" target="_blank"><span class="fa fa-linkedin"></span></a>
					<a class="" href="https://github.com/gabrieldj1997" target="_blank"><span class="fa fa-github"></span></a>
					<a class="" href="https://api.whatsapp.com/send?phone=5561985863577" target="_blank"><span class="fa fa-whatsapp"></span></a>
					<a class="" href="https://t.me/Gabrieldj1997" target="_blank"><span class="fa fa-telegram"></span></a>
				</div>
			</main>
		</div>
	</div>

	<div class="w3l-content-photo-5 py-5">
		<div class="content-main py-lg-5 py-md-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 content-left">
						<h3>Eu sou um desenvolvedor que quer trazer facilidade e soluções que vão tornar sua empresa inovadora</h3>
						<p class="mb-0">Olá meu nome é Gabriel e quero apresentar soluções que irão transformar sua empresa e o seu jeito de trabalhar.
							Para isso estou fundando a GBL Tech que terá uma equipe que trará soluções automatizadas para poupar seu tempo e integra-lo ao mundo 
							digital, podendo assim captar mais clientes e também impressioná-los.
							Em meio a pandemia que estamos vivendo o mundo digital nunca esteve tão presente, empresas que não pensam mais pelo lado digital estão
							ficando para trás, para evitar isso temos que pensar em soluções web e mobile, para que você trabalhe com a maior perfomance e seja visto
							por todos!
						</p>
						<a href="/about" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">Saiba mais sobre a GBL</a>
					</div>
					<div class="col-lg-4 content-photo mt-lg-0 mt-sm-5 mb-md-0 mb-4">
						<a href="#img"><img src="assets/images/myimage.jpg" class="img-fluid" alt="content-photo"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="w3l-gallery-7 bg-light py-5">
		<div class="gallery-7_sur py-lg-5">
			<div class="container">
				<div id="container">
					<div class="galleryContainer">
						<div class="gallery">
							<input type="radio" name="controls" id="c1" checked><img class="galleryImage img-fluid" id="i1" src="assets/images/g1.jpg" class="img" alt="">
							<input type="radio" name="controls" id="c2"><img class="galleryImage img-fluid" id="i2" src="assets/images/g2.jpg" class="img" alt="">
							<input type="radio" name="controls" id="c3"><img class="galleryImage img-fluid" id="i3" src="assets/images/g3.jpg" class="img" alt="">
							<input type="radio" name="controls" id="c4"><img class="galleryImage img-fluid" id="i4" src="assets/images/g4.jpg" class="img" alt="">
							<input type="radio" name="controls" id="c5"><img class="galleryImage img-fluid" id="i5" src="assets/images/g5.jpg" class="img" alt="">
							<input type="radio" name="controls" id="c6"><img class="galleryImage img-fluid" id="i6" src="assets/images/g6.jpg" class="img" alt="">
						</div>
						<div class="thumbnails">
							<label class="thumbnailImage" for="c1"><img src="assets/images/g1.jpg" class="img img-fluid" alt=""></label>
							<label class="thumbnailImage" for="c2"><img src="assets/images/g2.jpg" class="img img-fluid" alt=""></label>
							<label class="thumbnailImage" for="c3"><img src="assets/images/g3.jpg" class="img img-fluid" alt=""></label>
							<label class="thumbnailImage" for="c4"><img src="assets/images/g4.jpg" class="img img-fluid" alt=""></label>
							<label class="thumbnailImage" for="c5"><img src="assets/images/g5.jpg" class="img img-fluid" alt=""></label>
							<label class="thumbnailImage" for="c6"><img src="assets/images/g6.jpg" class="img img-fluid" alt=""></label>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="w3l-blog py-5">
		<div class="container py-lg-5">
			<div class="row">
				<div class="col-lg-3 col-6 pr-md-3 pr-2">
					<div class="img-block">
						<a href="#img">
							<img src="assets/images/iphone1.png" class="img-fluid" alt="image" />
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-6 pl-md-3 pl-2">
					<div class="img-block">
						<a href="#img">
							<img src="assets/images/iphone2.png" class="img-fluid" alt="image" />
						</a>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
					<h3>Tenha sua própria aplicação mobile.</h3>
					<h5 class="mt-3">Não dependa mais de terceiros e obtenha mais confiança.</h5>
					<p class="mt-4 mb-0"> Hoje o mundo deve estar a um clique para que seja visto, e ter sua própria
						aplicação faz com que tenham mais confiança em você e em seu negócio.
					</p>
					<a href="#blog.html" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">Ver projetos</a>
				</div>
			</div>
		</div>
	</section>

	<section class="w3l-blog py-5 bg-light">
		<div class="container py-lg-5 py-md-3">
			<div class="row">
				<div class="col-lg-5">
					<h3>Não se limite a trabalhos repetitivos manuais.</h3>
					<h5 class="mt-3">Com a aplicação certa você pode deixar trabalhos automatizados!</h5>
					<p class="mt-4"> Não se contenha hoje em fazer trabalhos que viram rotina, direcione seu tempo para o que realmente necessita de você
						e deixe a tecnologia trabalhar para você, ganhando assim mais tempo livre e menos dor de cabeça.
					</p>
				</div>
				<div class="col-lg-7 mt-lg-0 mt-4">
					<div class="img-block">
						<a href="#single">
							<img src="assets/images/g1.jpg" class="img-fluid" alt="image" />
							<span>WebSites modernos</span>
						</a>
					</div>
					<div class="img-block mt-3">
						<a href="#single"> <img src="assets/images/g2.jpg" class="img-fluid" alt="image" />
							<span>Aplicações personalizadas</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="w3l-grid-quote py-5">
		<div class="container py-lg-3">
			<h6>Eu estou disponível para projetos freelance.</h6>
			<h3>Vamos trabalhar juntos! Se cadastre ou me chame agora mesmo no whatsapp, responderei assim que possível.</h3>
			<a href="/contact" class="secondary-btn-style btn-secondary btn">Quero me cadastrar</a>
			<a href="https://api.whatsapp.com/send?phone=5561985863577" class="btn btn-style text-primary ml-2">Contatar</a>
		</div>
	</section>
	<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
		<span class="fa fa-angle-up"></span>
	</button>

	@includeIf('layout.structure.footer')

	<script>
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("movetop").style.display = "block";
			} else {
				document.getElementById("movetop").style.display = "none";
			}
		}


		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>

	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

	<script src="{{ asset('assets/js/momentum-slider.min.js') }}"></script>
	<script src="{{ asset('assets/js/index.js') }}"></script>

	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<script>
		$(function() {
			$('.navbar-toggler').click(function() {
				$('body').toggleClass('noscroll');
			})
		});
	</script>


</body>

</html>