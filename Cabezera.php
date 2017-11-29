<html>
<head>
  



<div id=cabecera>


 
  <link rel="stylesheet" type="text/css" href="CSS/FORMATO.css">
  

<IMG SRC="IMG/twist-25_2.jpg" WIDTH=200 HEIGHT=200 ALT="Cabeza movil"/>
<p align=center> S.RUBIO PRODUCCIONES</p>
</div>
</head>

<body>



<ul class=Lista>
			<li><a href="index.php">Inicio</a></li>
			<li class="dropdown">
			    <a href="Productos.php" class="dropa">Productos</a>
		       <div class="dropdown-content">
					<a href="iluminacion.php">iluminacion</a>
					<a href="sonido.php">sonido</a>
					
				 </div>
			</li>
			<li><a href="QuienesSomos.php">QuienesSomos?</a></li>
			<li><a href="Contacto.php">Contacto</a></li>
</ul> 

  <div id="Login">
	   <span style="color:#999;font-size:0.8em"><?php echo "(".$_SESSION["username"].") "; ?></span>
	   <a href="login.php" target="_blank">Iniciar Sesión</a>
	   <a href="logout.php">Cerrar Sesión</a>
</div>

</form>
</body>
</html>
