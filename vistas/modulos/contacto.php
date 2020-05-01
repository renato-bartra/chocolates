<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/estilos.css">
	<title>SinNOmbreAun</title>
</head>
<body>

	<!-- CABECERA -->
	<header class="cabecera inicio">

		<!-- CONTENEDOR DE CABECERA -->
		<div class="barra-superior contenedor casos-uso">
			<div class="logo">
				<h1 class="text-logo"><a href="../../index.php">Kawa<span>cho</span></a></h1>	
			</div>
			<nav class="navegador-barra">
				<ul class="lista-navegador">
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="">Diseña ahora</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="productos.php">Productos</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="nosotros.php">¿Quienes somos?</a></li>
					<li class="enlaces-barra-sup"><a class="navegador nav-trans" href="usuario.php">Mi cuenta</a></li>
					<li class="enlaces-barra-sup"><a class="navegador navegador-car"><i class="fab fa-opencart"></i></a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	
	<!-- SECION MINIBANER -->
	<section class="mini-banner">
		<div class="contenedor">
			<h1 class="title-ubicacion">Contacte con nosotros</h1>
		</div>
		
	</section>
	
	<!-- SECION UBICACION ACUAL -->
	<section>
		<div class="estyle-ubicacion">
			<h5 class="contenedor"><a href="../../index.php"><i class="fas fa-home"></i> Inicio</a> / Nosotros</h5>
		</div>
	</section>

	<!-- SECCION FOMRULARIO DE CONTACTO -->
	<main class="contenedor contenido-ajustado">
		<h1 class="fm-300 centrar-texto">Llenar formulario de contacto</h1>
		<form action="" >

			<fieldset class="">
				<legend>Información personal</legend>
			
				<!-- Ingresar Nombre -->
				<label for="nuevoNombre">Nombre</label>
				<input type="text" id="nuevoNombre" class="input-contato" name="nuevoNombre" placeholder="Ingresa tu nombre" value="Sharon Julvic">

				<!-- Ingresar Apellido -->
				<label for="nuevoApellido">Aprellido</label>
				<input type="text" id="nuevoApellido" class="input-contato" name="nuevoApellido" placeholder="Ingresa tu aprellido" value="Pinedo Arce">

				<!-- Ingresar EMAIL -->
				<label for="nuevoEmail">Email</label>
				<input type="email" id="nuevoEmail" class="input-contato" name="nuevoEmail" placeholder="Ingresa tu email" value="rbr1594@gmail.com">

				<!-- Ingresar Telefono -->
				<label for="nuevoTelefono">Telefono</label>
				<input type="tel" id="nuevoTelefono" class="input-contato" class="mascara-telefono" name="nuevoTelefono">
			</fieldset>	

			<fieldset>
				<legend>Contacto</legend>

				<!-- Ingresar Opcion de compra o vende -->
				<label for="nuevoMetodoContacto">Metodo de contacto</label>
				<select name="" id="nuevoMetodoContacto" class="input-contato">
					<option value="" disabled selected>-- Sleccione --</option>
					<option value="queja">Queja</option>
					<option value="reclamo">Reclamo</option>
					<option value="compra">Compra</option>
					<option value="vende">Vende</option>
				</select>

				<div class="metodo-contacto"></div>

				<!-- Ingresar Mensaje -->
				<label for="ingresaMensaje">Mensaje</label>
				<textarea id="ingresaMensaje" class="input-contato" name="ingresaMensaje"></textarea>
			</fieldset>

			<div class="centrar-texto separador-botones">
				<button type="submit" class="boton button-disenar">Enviar</button>
			</div>
		</form>
		
	</main>
	

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
<script src="../js/jqueri3.41.js"></script>
<!-- FontAwesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js"></script>
<!-- InputMask -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- JS Propios -->
<script src="../js/plantilla.js"></script>
<script src="../js/contacto.js"></script>

</html>