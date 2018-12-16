<div id="cabecera">
	<div class="logo">
    <img src="imagenes/logo.jpg" alt="Logo" width=70px height=70px>
    <h1>Watched</h1>
     </div>

		<div class="saludo">
			<?php
			if (isset($_SESSION["login"]) && ($_SESSION["login"]===true)) {
				if($_SESSION["esAdmin"]){
					echo "<span>Bienvenido, <a href='perfilAdmin.php'>". $_SESSION['nombreusu'] ."(admin)</a> <a href='logout.php'>(salir)</a></span>";
				}
				else{
					$nombreusu = $_SESSION['nombreusu'];
					echo '<span>Bienvenido, <a href="perfil.php?codigo='.$nombreusu.'">'. $_SESSION['nombreusu'] .'</a> <a href="logout.php">(salir)</a></span>';
				}	
				
			} else {
				echo "Usuario desconocido. <a href='login.php'>Login</a> <a href='registros.php'>Registro</a>";
			}
			?>
  
    </div>
		
	<div class="busqueda">
		<form  id="searchform" action='VistaBusqueda.php' method='post'>
    			 <input type="text" name="aBuscar" class="inputSearch"placeholder="Busca peliculas aqu&iacute;..." required size="35" >
    		 	<button type="submit" class="searchBoton">Buscar</button>
		 </form>
	</div>
	<div class="navbar"> 
		  	<ul> 
				<li><a href="index.php">Inicio</a></li> 
				<li><a href="listaPeliculas.php">Peliculas Disponibles</a></li> 

				<li><a href="listas.php">Listas Disponibles</a></li> 

				<li><a href="reto.php">Retos Disponibles</a></li> 
				<?php
               if (isset($_SESSION["login"]) && ($_SESSION["login"]===true)) {

                   
                       
                    ?>
                
                <li>
                    <select name="number" onchange="location = this.value"> 
                        <option selected="selected">Opciones perfil</option>
                        <?php
                        if($_SESSION["esAdmin"]){
                             
                             echo '<option value="perfilAdmin.php">Mi perfil</option>';  
                            
                        }
                        else{
                        echo '<option value="perfil.php?codigo='.$_SESSION["nombreusu"].'">Mi perfil</option>';
                         }
                        ?>
                        <!--<option value="crearListaUsu.php">Crear una lista de peliculas</option>-->
                        <!--<option value="editaPerfil.php">Edita tu perfil</option>-->
                        <?php
                        echo '<option value="peliculasUsu.php?codigo='.$_SESSION["nombreusu"].'">Mis Peliculas Vistas</option>';
                        echo '<option value="listasUsu.php?codigo='.$_SESSION["nombreusu"].'">Mis Listas</option>';
                        echo ' <option value="listasSeguidas.php?codigo='.$_SESSION["nombreusu"].'">Listas Seguidas</option>';
                        ?>
                    </select>
                </li>
                
				    <?php 
                    
			     }
			     else {
                    ?>
                    <li><a href="login.php">Inicia Sesion</a></li> 
                    <?php
                }
                ?>
				<li>
                    <select name="number" onchange="location = this.value"> 
                        <option selected="selected">Rankings</option>
                        <option value="mostrarRanking.php?codigo=01">Los 5 usuarios que más películas han visto</option>
                        <option value="mostrarRanking.php?codigo=02">Las 10 películas de mayor duración</option>
                        <option value="mostrarRanking.php?codigo=03">Las 10 películas más vistas</option>
                        <option value="mostrarRanking.php?codigo=04">Los 15 actores más veteranos</option>
                        <option value="mostrarRanking.php?codigo=05">Los usuarios que más listas han creado</option>
                    </select>
                </li>

			</ul> 
		</div> 
</div>
