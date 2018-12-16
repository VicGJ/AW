$(document).ready(function(){
//DA ERROR PORQUE BOTONDEJARDESEGUIR ESTA A NULL, NO SE COMO ARREGLARLO
//DA ERROR PORQUE BOTONNOMBRE ESTA A NULL, NO SE COMO ARREGLARLO, DADO QUE AQUI NO SE PULSA
if(document.getElementById("seguir"))
{
	var botonSeguir = document.getElementById("seguir");

	botonSeguir.onclick = function(e) {
	e.preventDefault();
    var nuevo = confirm("¿Seguro que quieres seguir esta lista?");

	if(nuevo)
	{
		var data = {opcion: "seguirLista", codeLista: this.value};
			$.post('./controllerLista.php', data, function(returnedData) {
    		// do something here with the returnedData

    		alert("Lista Seguida");
 			
    		location.reload(true);
			});
	}
	else
	{
		alert("Esta lista está muy sola");
	}
	
}
}

if(document.getElementById("dejarDeSeguir"))
{
var botonDejarSeguir = document.getElementById("dejarDeSeguir");



botonDejarSeguir.onclick = function(e) {
	e.preventDefault();
    var nuevo = confirm("¿Seguro que quieres dejar de seguir esta lista?");
    
	

	if(nuevo)
	{
		var data = {opcion: "dejarSeguirLista", codeLista: this.value};
			$.post('./controllerLista.php', data, function(returnedData) {
    		// do something here with the returnedData

    		alert("Lista No Seguida");
 			
    		location.reload(true);
			});
		
	}
	else
	{
		alert("Esta lista está muy sola");
	}
	
}
}
});