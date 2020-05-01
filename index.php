<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="vistas/css/normalize.css">
	<link rel="stylesheet" href="vistas/css/estilos.css">
	<title>SinNOmbreAun</title>
</head>
<body>

	<!-- CABECERA -->
	<header class="cabecera">

		<!-- CONTENEDOR DE CABECERA -->
		<div class="barra-superior contenedor inicio">
			<div class="logo">
				<h1 class="text-logo"><a href="index.php">Kawa<span>cho</span></a></h1>	
			</div>
			<nav class="navegador-barra">
				<ul class="lista-navegador">
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="">Como Diseñar</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="">Diseña ahora</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="vistas/modulos/productos.php">Productos</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="">Video</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="vistas/modulos/nosotros.php">¿Quienes somos?</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="vistas/modulos/usuario.php">Mi cuenta</a></li>
					<li class="enlaces-barra-sup"><a class="navegador navegador-car"><i class="fab fa-opencart"></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- ZONA BANNER -->
	<section id="banner">
		<div class="contenedor section-banner">	

			<!-- Seccion izquierda -->
			<div class="section-banner-l">
			</div>

			<!-- Seccion derecha -->
			<div class="section-banner-r">

				<div class="zona-der-banner">
					<div class="zona-inf-banner">
						<h1 class="anuncio-banner">Diseña tu felicidad</h1>
						<p class="psection-banner">Diseña tu chocolate escogiendo la forma y relleno</p>
					</div>
					<div class="zona-buton-banner">
						<a class="boton button-disenar" href="">Diseña ahora</a>	
					</div>	
				</div>
				
				<div class="zona-der-banner">
					<div class="zona-inf-banner">
						<h1 class="anuncio-banner">Con cacao de la amazonía</h1>
						<p class="psection-banner">Chocolate hecho a base de Cacao producido en la amazonía Peruana</p>
					</div>
					<div class="zona-buton-banner">
						<a class="boton button-comprar" href="">Comprar</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- ZONA COMO DISEÑAR -->
	<main id="zona-how-disenar" class="contenedor separador">
		
		<h1 class="titulo-section">Chocolate personalizado en 3 pasos</h1>
		
		<!-- Seccion como diseñar -->
		<div class="pasos-how-diseñar centrar-texto">

			<div class="paso-comoDisenar fm-300">
				<img src="vistas/img/escogeforma.png" alt="" class="tumbnail-hoy-diseñar">
				<h2 class="fm-300">1.- Elige la forma de tu chocolate</h2>
				<p class="psection-how-disenar">En una caja caben 12 chocolates, escoje la forma de cada uno o una sola forma para todos</p>
			</div>

			<div class="paso-comoDisenar fm-300">
				<img src="vistas/img/escoge_frutas.png" alt="" class="tumbnail-hoy-diseñar">	
				<h2 class="fm-300">2.- Escoge el relleno</h2>
				<p class="psection-how-disenar">Escoge el relleno que más te guste, o el que le guste a un amigo, o a esa persona especial. Escoge entre frutas, legumbres o algo exótico.</p>
			</div>
			<div class="paso-comoDisenar fm-300">
				<img src="vistas/img/543513.png" alt="" class="tumbnail-hoy-diseñar">
				<h2 class="fm-300">3.- Envio</h2>
				<p class="psection-how-disenar">Que no se te haga agua la boca. Espera pacientemente,seguro no tardara en llegar a tu domicilio</p>
			</div>
		</div>

		<!-- Seccion boton diseñar -->
		<div class="button-how-disenar centrar-texto">
			<a href="" class="boton button-disenar">Diseña ahora</a>
		</div>

		
	</main>
	
	<!-- ZONA COMPRAR PRODUCTOS -->
	<section id="productosVenta" class="separador">

		<h1 class="titulo-section contenedor fm-300" style="color: #FFFFFF;">Chocolates pensados para ti</h1>
		<p class="contenedor centrar-texto p-compra-pro">Cada producto es una caja con 12 unidades</p>

		<div class="section-comprar contenedor">
		
			<!-- Seccion lista de productos -->
			<div class="section-produc-prediseñados">

				<!-- Seccion producto -->
				<div class="produc-predisenado shadow-amarillo">
					<div class="tumbnail-product">
						<a href="vistas/modulos/informacion-producto.php">
							<img src="vistas/img/producto_bola.png" alt="">
						</a>
					</div>
					
					<!-- Seccion Info del producto para compra -->
					<div class="product-inf-compra">
						<h3 class="p-name-product"><a href="vistas/modulos/informacion-producto.php">Tierra de nueces</a></h3>
						<div class="precios">
							<p class="descuento">S/ <span>42.20</span></p>
							<p class="precio">S/ <span>35.50</span></p>
						</div>
					</div>

					<!-- Seccion Agregar a carrito de compras -->
					<div class="agregar-carrito">
						<div class="cantidad-product">
							<span class="btn-cantidad">-</span>
							<input type="number" value="1" class="inp-cantidad">
							<span class="btn-cantidad">+</span>
						</div>
						<a class="boton button-agregar-car">Agregar</a>
					</div>
				</div>
				
				<!-- Seccion producto -->
				<div class="produc-predisenado shadow-amarillo">
					<div class="tumbnail-product">
						<a class="tumbnail-product" href="vistas/modulos/informacion-producto.php">
							<img src="vistas/img/producto_fresa.jpg" alt="">
						</a>
					</div>
					
					<!-- Seccion Info del producto para compra -->
					<div class="product-inf-compra">
						<h3 class="p-name-product"><a href="vistas/modulos/informacion-producto.php">Pieza de freza</a></h3>
						<div class="precios">
							<p class="descuento">S/ <span>42.20</span></p>
							<p class="precio">S/ <span>35.50</span></p>
						</div>
					</div>

					<!-- Seccion Agregar a carrito de compras -->
					<div class="agregar-carrito">
						<div class="cantidad-product">
							<span class="btn-cantidad">-</span>
							<input type="number" value="1" class="inp-cantidad">
							<span class="btn-cantidad">+</span>
						</div>
						<a class="boton button-agregar-car">Agregar</a>
					</div>
				</div>
				
				<!-- Seccion producto -->
				<div class="produc-predisenado shadow-amarillo">
					<div class="tumbnail-product">
						<a class="tumbnail-product" href="vistas/modulos/informacion-producto.php">
							<img src="vistas/img/istockphoto-1129575006-1024x1024.jpg" alt="">
						</a>
					</div>
					
					<!-- Seccion Info del producto para compra -->
					<div class="product-inf-compra">
						<h3 class="p-name-product"><a href="vistas/modulos/informacion-producto.php">ChocoKiwi</a></h3>
						<div class="precios">
							<p class="descuento">S/ <span>42.20</span></p>
							<p class="precio">S/ <span>35.50</span></p>
						</div>
					</div>

					<!-- Seccion Agregar a carrito de compras -->
					<div class="agregar-carrito">
						<div class="cantidad-product">
							<span class="btn-cantidad">-</span>
							<input type="number" value="1" class="inp-cantidad">
							<span class="btn-cantidad">+</span>
						</div>
						<a class="boton button-agregar-car">Agregar</a>
					</div>
				</div>
				
				<!-- Seccion producto -->
				<div class="produc-predisenado shadow-amarillo">
					<div class="tumbnail-product">
						<a class="tumbnail-product" href="vistas/modulos/informacion-producto.php">
							<img src="vistas/img/producto_mamaco.jpg" alt="">
						</a>
					</div>
					
					<!-- Seccion Info del producto para compra -->
					<div class="product-inf-compra">
						<h3 class="p-name-product"><a href="vistas/modulos/informacion-producto.php">Mamaco Dulce</a></h3>
						<div class="precios">
							<p class="descuento">S/ <span>42.20</span></p>
							<p class="precio">S/ <span>35.50</span></p>
						</div>
					</div>

					<!-- Seccion Agregar a carrito de compras -->
					<div class="agregar-carrito">
						<div class="cantidad-product">
							<span class="btn-cantidad">-</span>
							<input type="number" value="1" class="inp-cantidad">
							<span class="btn-cantidad">+</span>
						</div>
						<a class="boton button-agregar-car">Agregar</a>
					</div>
				</div>

				<!-- Seccion producto -->
				<div class="produc-predisenado shadow-amarillo">
					<div class="tumbnail-product">
						<a class="tumbnail-product" href="vistas/modulos/informacion-producto.php">
							<img src="vistas/img/producto_mamaco.jpg" alt="">
						</a>
					</div>
					
					<!-- Seccion Info del producto para compra -->
					<div class="product-inf-compra">
						<h3 class="p-name-product"><a href="vistas/modulos/informacion-producto.php">Mamaco Dulce</a></h3>
						<div class="precios">
							<p class="descuento">S/ <span>42.20</span></p>
							<p class="precio">S/ <span>35.50</span></p>
						</div>
					</div>

					<!-- Seccion Agregar a carrito de compras -->
					<div class="agregar-carrito">
						<div class="cantidad-product">
							<span class="btn-cantidad">-</span>
							<input type="number" value="1" class="inp-cantidad">
							<span class="btn-cantidad">+</span>
						</div>
						<a class="boton button-agregar-car">Agregar</a>
					</div>
				</div>
				<div style="clear:both;"></div>
			</div>

			<!-- Seccion boton ver mas productos -->
			<div class="buton-vermas">
				<a class="boton btn-vermas" href="vistas/modulos/productos.php">Ver mas <span><i class="fas fa-arrow-right"></i></span></a>
			</div>
		</div>
	</section>
	
	<!-- ZONA DE BLOG Y TESTIMONILAES -->
	<section class="section-blog-testimoniales contenedor">

		<!-- Seccion blog personal -->
		<section class="blog">
			<h3 class="titulo-blogtest fm-300 centrar-texto">Nuestro blog</h3>

			<article class="entrada-blog">
				<div class="img-blog">
					<img src="vistas/img/como_chocolate.jpg" alt="">
				</div>

				<div class="text-entrada">
					<a href="#">
						<h4 class="semititle-blog">Gui para hacer tu propio chocolate</h4>
					</a>
					<p class="fecha-blog">Escrito el: <span>18/03/2020</span> por: <span>Admin</span></p>
					<p class="p-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, ullam sunt saepe exercitationem repellendus nisi unde .</p>
				</div>
			</article>

			<article class="entrada-blog">
				<div class="img-blog">
					<img class="img-blog" src="vistas/img/sanvalentin_nuncio.jpg" alt="">
				</div>

				<div class="text-entrada">
					<a href="#">
						<h4 class="semititle-blog">Nuestras ofertas por San Valentin</h4>
					</a>
					<p class="fecha-blog">Escrito el: <span>18/03/2020</span> por: <span>Admin</span></p>
					<p class="p-blog">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil alias ducimus, eius accusantium, architecto doloribus.</p>
				</div>
			</article>
		</section>

		<!-- Seccion testimonios -->
		<section class="testimonial">
			<h3 class="titulo-blogtest fm-300 centrar-texto"> Testimoniales</h3>
			<div class="testimonio">
				<blockquote>
					<div class="comilla"><i class="fas fa-quote-left"></i></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, expedita, non. Aliquid, soluta corrupti iste, expedita modi maiores necessitatibus.
				</blockquote>
				<p>-El Bicho</p>
			</div>
		</section>
	</section>

	<footer>
		<div class="contenedor zona-piecera">
			<div class="footerSection">
				<h4>Contactenos</h4>
				<p>Alonzo Cueva 156 – Tarapoto - Peru <br>
					<span>Celuar:</span>  +51 966916703 <br>
					<span>Email:</span>  kskrfkfksj@kawacho.com
				</p>
			</div>

			<div class="footerSection enlaces-redes">
				<h4>Siguenos</h4>
				<div class="zona-links">
					<div class="link-siguenos">
						<a href=""><i class="fab fa-facebook"></i></a>
						<a href=""><i class="fab fa-twitter"></i></a>
						<a href=""><i class="fab fa-instagram"></i></a>
						<a href=""><i class="fab fa-whatsapp"></i></a>
						<a href=""><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>

			<div class="footerSection footer-derechos">
				<p>Kawacho todos los derechos reservados &copy; </p>
			</div>
		</div>
	</footer>

</body>

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js"></script>

</html>

