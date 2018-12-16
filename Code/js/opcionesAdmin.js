$(document).ready(function(){

if(document.getElementsByName("eliminarUsuario").length != 0)
{
	var botonPelicula = [];
	botonPelicula = document.getElementsByName("eliminarUsuario");
	
	for(var i = 0; i < botonPelicula.length; i++)
	{
		botonPelicula[i].addEventListener("click", function(){
			var nuevo = confirm("¿Seguro que quieres eliminar el usuario?");

		if(nuevo)
		{

			var data = {opcion: "eliminarUsuario", nombreusu: this.id};
			$.post('./controllerAdmin.php', data, function(returnedData) {
    		// do something here with the returnedData

    		alert("Usuario Eliminado");
 			
    		location.reload(true);
			});
			
		}
		else
		{
			alert("Más duro que Chuck Norris");
		}
		
		});
	}
}
    
if(document.getElementsByName("eliminarPelicula").length != 0)
{
	var botonPelicula = [];
	botonPelicula = document.getElementsByName("eliminarPelicula");
	
	for(var i = 0; i < botonPelicula.length; i++)
	{
		botonPelicula[i].addEventListener("click", function(){
			var nuevo = confirm("¿Seguro que quieres eliminar la película?");

		if(nuevo)
		{

			var data = {opcion: "eliminarPelicula", codePelicula: this.id};
			$.post('./controllerAdmin.php', data, function(returnedData) {
    		// do something here with the returnedData

    		alert("Pelicula Eliminada");
 			
    		location.reload(true);
			});
			
		}
		else
		{
			alert("Esta pelicula está muy viva");
		}
		
		});
	}
}    

if(document.getElementsByName("eliminarReto").length != 0)
{
	var botonEliminarReto = [];
	botonEliminarReto = document.getElementsByName("eliminarReto");
	
	for(var i = 0; i < botonEliminarReto.length; i++)
	{
		botonEliminarReto[i].addEventListener("click", function(){
			var nuevo = confirm("¿Seguro que quieres eliminar el reto?");

		if(nuevo)
		{

			var data = {opcion: "eliminarReto", nombreReto: this.value};
			
			$.post('./controllerAdmin.php', data, function(returnedData) {
    		// do something here with the returnedData

    		alert("Pelicula Eliminada");
 			
 			
    		location.reload(true);
			});
			
		}
		else
		{
			alert("Esta pelicula está muy viva");
		}
		
		});
	}
}        


if(document.getElementsByName("insertaPeliculaReto").length != 0)
{
	var botonRetoInsertar = [];
	botonRetoInsertar = document.getElementsByName("insertaPeliculaReto");
	
	for(var i = 0; i < botonRetoInsertar.length; i++)
	{
		botonRetoInsertar[i].addEventListener("click", function(){
			var nuevo = confirm("¿Seguro que quieres añadir la película?");

		if(nuevo)
		{

			var data = {opcion: "insertaPeliculaReto", codePelicula: this.id, nombreReto : this.value};
			$.post('./controllerAdmin.php', data, function(returnedData) {

    		alert("Pelicula Añadida");
 			
    		location.reload(true);
			});
			
		}
		else
		{
			alert("Esta pelicula está muy viva");
		}
		
		});
	}
}

if(document.getElementsByName("eliminarPeliculaReto").length != 0)
{
	var botonRetoInsertar = [];
	botonRetoInsertar = document.getElementsByName("eliminarPeliculaReto");
	
	for(var i = 0; i < botonRetoInsertar.length; i++)
	{
		botonRetoInsertar[i].addEventListener("click", function(){
			var nuevo = confirm("¿Seguro que quieres eliminar la película?");

		if(nuevo)
		{

			var data = {opcion: "eliminarPeliculaReto", codePelicula: this.id, nombreReto : this.value};
			$.post('./controllerAdmin.php', data, function(returnedData) {

    		alert("Pelicula Eliminada");
 			
    		location.reload(true);
			});
			
		}
		else
		{
			alert("Esta pelicula está muy viva");
		}
		
		});
	}
}       
    


});