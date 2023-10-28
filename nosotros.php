<?php
require 'includes/app.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
	<h1>Conoce sobre nosotros</h1>
	<div class="contenido-nosotros">
		<div class="imagen">
			<picture>
				<source srcset="build/img/nosotros.webp" type="image/webp">
				<source srcset="build/img/nosotros.jpg" type="image/jpeg">
				<img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotos">
			</picture>
		</div>
		<div class="texto-nosotros">
			<blockquote>25 años de experiencia</blockquote>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloremque sunt illo illum, nam ipsam exercitationem unde quisquam mollitia odio fugit cumque eligendi labore eius quidem laborum ducimus obcaecati omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloremque sunt illo illum, nam ipsam exercitationem unde quisquam mollitia odio fugit cumque eligendi labore eius quidem laborum ducimus obcaecati omnis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloremque sunt illo illum, nam ipsam exercitationem unde quisquam mollitia odio fugit cumque eligendi labore eius quidem laborum ducimus obcaecati omnis.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa omnis provident cumque at. Praesentium reiciendis a id dolore! Totam optio eius minima ea id magni molestiae! Voluptas repudiandae quidem consequatur.</p>
		</div>
	</div>
</main>

<section class="contenedor seccion">
	<h1>Más Sobre Nosotros</h1>
	<div class="iconos-nosotros">
		<div class="icono">
			<img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
			<h3>Seguridad</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum amet numquam ad, voluptatibus quam tempora, ut totam beatae quas optio, officiis consequatur distinctio. Commodi esse quos iste dolor eligendi laudantium?</p>
		</div>

		<div class="icono">
			<img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
			<h3>Precio</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum amet numquam ad, voluptatibus quam tempora, ut totam beatae quas optio, officiis consequatur distinctio. Commodi esse quos iste dolor eligendi laudantium?</p>
		</div>

		<div class="icono">
			<img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
			<h3>A Tiempo</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum amet numquam ad, voluptatibus quam tempora, ut totam beatae quas optio, officiis consequatur distinctio. Commodi esse quos iste dolor eligendi laudantium?</p>
		</div>
	</div>
</section>
<?php
incluirTemplate('footer');
?>