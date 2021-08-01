<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
      <!-- ====== el normalaize sirve para poder hacer uq la pagina se vea igual en cuaquier navegador=======-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
   <link rel="preload"  href="css/style.css" as="style"><!-- esto es para que cargue la oja de estilos lo mas rapido que puedas-->
   <link rel="stylesheet" type="text/css" href="css/style.css">

	<title></title>
</head>
<body>
	<header>
		<h1 class="titulo">luis alberto <span>freelancer</span></h1>
	</header>
	

	<div class="nav-bg">
	<nav class="navegador_principal contenedor"><!-- en las clases se pueden meter varias separando o dejando espacio y en id no se puede-->
		<a href="#">Inicio</a>
		<a href="#">Sobre mi</a>
		<a href="#">clientes</a>
		<a href="#">Contactos</a>
	</nav>
	</div>
<section class="hero"> <!-- este se coloca cuando solo es una seccion o un heading un subtitulo-->
	<div class="contenido-hero">
	<h2 class="titulo">desarrollo luis alberto <span>frelancer</span></h2>
	<div class="ubicacion"><!--este es para que puedamos poner un display flex-->
<p><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffbf00" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="11" r="3" />
  <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
</svg></p>
<p>Guagalajara Jalisco</p>
</div>
<a class="boton" href="#">contactar</a>
</div>
</section>
	
	
<main class="contenedor sombra"> <!-- este se coloca cuando es el contenido principal -->
	<h2>Servicios</h2>
	<div class="servicios">
<section class="servicio">

<h3>Diseño web</h3>
<div class="iconos">
	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
	  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
	  <path d="M12 21a9 9 0 1 1 0 -18a9 8 0 0 1 9 8a4.5 4 0 0 1 -4.5 4h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25" />
	  <circle cx="7.5" cy="10.5" r=".5" fill="currentColor" />
	  <circle cx="12" cy="7.5" r=".5" fill="currentColor" />
	  <circle cx="16.5" cy="10.5" r=".5" fill="currentColor" />
	</svg>
</div>
<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quisquam, voluptatibus fuga quod necessitatibus. </p>
</section>

<section class="servicio">
<h3>Aplicaciones Web</h3>
<div class="iconos">
	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
	  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
	  <line x1="4" y1="10" x2="4" y2="16" />
	  <line x1="20" y1="10" x2="20" y2="16" />
	  <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
	  <line x1="8" y1="3" x2="9" y2="5" />
	  <line x1="16" y1="3" x2="15" y2="5" />
	  <line x1="9" y1="18" x2="9" y2="21" />
	  <line x1="15" y1="18" x2="15" y2="21" />
	</svg>
	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
	  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
	  <path d="M9 7c-3 0 -4 3 -4 5.5c0 3 2 7.5 4 7.5c1.088 -.046 1.679 -.5 3 -.5c1.312 0 1.5 .5 3 .5s4 -3 4 -5c-.028 -.01 -2.472 -.403 -2.5 -3c-.019 -2.17 2.416 -2.954 2.5 -3c-1.023 -1.492 -2.951 -1.963 -3.5 -2c-1.433 -.111 -2.83 1 -3.5 1c-.68 0 -1.9 -1 -3 -1z" />
	  <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
	</svg>
</div>
<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quisquam, voluptatibus fuga quod necessitatibus.</p>
</section>
<section class="servicio">
<h3>E-comerce</h3>
<div class="iconos">
	<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
	  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
	  <rect x="3" y="5" width="18" height="14" rx="3" />
	  <line x1="3" y1="10" x2="21" y2="10" />
	  <line x1="7" y1="15" x2="7.01" y2="15" />
	  <line x1="11" y1="15" x2="13" y2="15" />
	</svg>
</div>
<p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Molestiae quisquam, voluptatibus fuga quod necessitatibus.</p>
</section>
</div> <!--este es el cierre de la clase servicios-->

<section>
<h3>Contactos</h3>
<form class="formulario">
	<fieldset><!-- este sirve para que agrupe el formulario y coloca un borde -->
		<legend>Contactanos llenando todos los campos</legend>
		<div class="contenedor-campos">	
				<div class="campo"><!-- el div los agrupa de arriba hacia abajo y sin el los agrupa todos a los lados-->
				<label>Nombre</label>
				<input type="text" name="nombre" placeholder="nombre"> <!--existen varios input como email para que en el teclado del celular aparezca el @ y tel para que aparezca el puro numero-->
				</div>
				<div class="campo">
				<label>telefono</label>
				<input type="tel" name="telefono" placeholder="telefono">
				</div>
				<div class="campo">
				<label>correo</label>
				<input type="email" name="correo" placeholder="correo">
				</div>
				<div class="campo">
				<label>mensaje</label>
				<textarea></textarea>
				</div>
		</div><!--contenedor de los campos-->
				<div class="alinear-derecha flex">
				<button class="boton w-100" type="submit" value="enviar"> Enviar</button>
				</div>

	</fieldset>
</form>
</section>
</main>
<footer>
<P>Todos los derechos reservados. Luis Alberto</P>
</footer>

<!-- <articule este se coloca cuando se tiene una entrada de blog o noticias y <aside> se coloca cuando tiene una barra lateral -->
</body>
</html>