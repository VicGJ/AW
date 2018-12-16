$(document).ready(function(){




if(document.getElementById("cambiarNombre"))
{
	var botonNombre = document.getElementById("cambiarNombre");
	botonNombre.onclick = function(e) {
		e.preventDefault();
	    var nuevo = prompt("Introduce nuevo nombre.");
	    
		

		if(!nuevo)
		{
			alert("Introduce un nombre válido");
		}
		else
		{
			var data = {opcion: "cambiarNombre", codeLista: this.value, nombre: nuevo};
			$.post('./controllerLista.php', data, function(returnedData) {
    		// do something here with the returnedData
    		alert("Este es el nuevo nombre de tu lista: " + nuevo);

    		location.reload(true);
			});
			
		}
		
	}
}

if(document.getElementById("eliminarLista"))
{
	var botonDelete = document.getElementById("eliminarLista");
	botonDelete.onclick = function(e) {
		e.preventDefault();
	    var nuevo = confirm("¿Seguro que quieres eliminar la lista?");
	    
		
	    var usu = this.name;
	    
		if(nuevo)
		{
			
			var data = {opcion: "eliminarLista", codeLista: this.value};
			$.post('./controllerLista.php', data, function(returnedData) {
    		// do something here with the returnedData

    		alert("Lista Eliminada");
 			//DE AQUI VUELVA AL PERFIL

    		location.href="perfil.php?codigo=" + usu;
			});
			
		}
		else
		{
			alert("Esta lista está muy viva");
		}
		
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

			var data = {opcion: "eliminarPelicula", codePelicula: this.id, codeLista: this.value};
			$.post('./controllerLista.php', data, function(returnedData) {
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

});