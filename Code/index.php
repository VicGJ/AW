<?php 
	session_start(); //NECESARIO
	//var_dump($_SESSION);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<title>Portada</title>
	</head>
	<body>
		<div id="contenedor">

	<?php
	require("comun/cabecera.php");
	?>

			<div id="contenidoIndex">
				<h1>Bienvenido a Watched!</h1>
				 <p> Hola! Si estás aquí seguro que eres un cinéfilo como nosotros.</p>
    <p> Sí, nosotros también creemos que pasarse un sábado viendo pelis es un ¡PLANAZO!    </p>
    <p> Delante de tus ojos tienes la inigualable e incomparable web que te permite llevar un control sobre las películas que has visto hasta el momento.</p>
    <p> Distintos usuarios que  han probado nuestro servicio de creación de listas propias de películas han salido encantados con el resultado, no dejes de explorar las múltiples opciones que disponemos... </p>
    <p>Ya no te voy a dar más la "tabarra", prefiero que navegues y disfrutes de esta nuestra WEB!</p>
				<div class="slideshow-container">

				<div class="mySlides fade">
				  <div class="numbertext">1 / 5</div>
				  <img src="imagenes/slider1.jpg" width=250px height=200px>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">2 / 5</div>
				  <img src="imagenes/slider2.jpg" width=250px height=200px>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">3 / 5</div>
				  <img src="imagenes/slider3.jpg" width=250px height=200px>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">4 / 5</div>
				  <img src="imagenes/slider4.jpg" width=250px height=200px>
				</div>

				<div class="mySlides fade">
				  <div class="numbertext">5 / 5</div>
				  <img src="imagenes/slider5.jpg" width=250px height=200px>
				</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span>
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>

				<script>
				var slideIndex = 0;
				showSlides();

				function showSlides() {
				    var i;
				    var slides = document.getElementsByClassName("mySlides");
				    var dots = document.getElementsByClassName("dot");
				    for (i = 0; i < slides.length; i++) {
				       slides[i].style.display = "none";  
				    }
				    slideIndex++;
				    if (slideIndex > slides.length) {slideIndex = 1}    
				    for (i = 0; i < dots.length; i++) {
				        dots[i].className = dots[i].className.replace(" active", "");
				    }
				    slides[slideIndex-1].style.display = "block";  
				    dots[slideIndex-1].className += " active";
				    setTimeout(showSlides, 3000); // Change image every 2 seconds
				}
				</script>
			</div>
			
   

			<?php

			
			require("comun/pie.php");
			?>
		</div> 
	</body>
</html>