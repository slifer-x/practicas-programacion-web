<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="keywords" lang="es" content="HackerGarage, Eventos, Programación Web" />
		<meta name="author" content="root"/>
		<meta name="description" content="Registro de eventos de programación en linea" />
		<title>Eventos</title>
		<link rel="stylesheet" type="text/css" href="./css/vistablog.css" />
	</head>

	<body>
		<header class="header" id="header">
	 		<h1>Eventos</h1>
		</header>
		<nav class="navegacion">
			<?php
				include('navegacion.html');
			?>
		</nav>
		<article class="all_event">
			<section class="event">
				<h3><a href="vista_detalle.html"> Jueves 30: Hackers and Founders </a></h3>
				<img src="img/HF.jpg" alt="Evento Hackers and Founders" width="500" height="800" />
				<p>
					Hackers &amp; founders es una comunidad tecnológica basada en la pregunta ¿Qué Necesitas? 
					Conoce a tus futuros socios, solicita ayuda, aprende y emprende. Nos reunimos el último Jueves del mes.
				</p>
				<div id="info-event-1" class="info">
					<p> Cuando: <span class="place" id="cuando-1">Jueves 30 de Agosto de 2012 19:00 hrs</span></p>
					<p class="place" >Donde: <span class="place" id="donde-1">HackerGarage, Vidrio #2188, entre Simón Bolivar y Gral. San Martín, Guadalajara.</span></p>
					<p class="place" >Precio: <span class="place" id="precio-1">$50.00</span> 
					Capacidad: <span class="place" id="capacidad-1">50</span> 
					Categoría: <span class="place" id="categoria-1"> <a href="#">Conferencia</a> Publicado el 23/09/12</span> por 
					<span class="place" id="quien-1"><a href="" >@levhita</a></span> </p>
				</div>
			</section>
			<section class="event">
				<h3><a href="" >Sábado 1: Super Happy Dev House </a></h3>
				<img src="img/SHDH.jpg" alt="Super Happy Dev House" width="500" height="700" />
				<div id="info-event-2" class="info">
					<p>No olvides registrarte aqui: <a href="http://guadalajaradevhouse.org"> http://guadalajaradevhouse.org</a></p>
					<p>Precio: <span class="place" id="precio-2">Gratuito</span> 
					Capacidad: <span class="place" id="capacidad-2">50</span> 
					Categoría: <span class="place" id="categoria-2"> <a href="#">Convivencia</a> Publicado el 23/09/12</span> por 
					<span class="place" id="quien-2"><a href="" >@levhita</a></span> </p>
				</div>
			</section>
			<div class="pre-nex">
				<button type="button" id="previous" class="boton">&laquo; Anterior</button>
				<button type="button" id="next" class="boton">Siguiente &raquo;</button>
			</div>
		</article>
		<footer>
			<?php
				include('footer.html');
			?>
		</footer>
	</body>
</html>
