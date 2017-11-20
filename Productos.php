<?php
	include 'Cabezera.php'
	?>
<div id="Texto">
	PNuestros productos
	</div>
	<?php
include 'pie.html'
?>

 
<br>
<h2>Quieres introducir posibles nuevos artilugios de iluminacion?</h2>
<p>Rellena el siguiente formulario</p>
<br>

	
		<form action="Productos.php" method="post">
			 <p>ID del equipo: <input type="text" name="Id" /></p>
			 <p>Descripcion del foco:<input type="text" name="Descripcion" /></p>
			 <p>Tipo: <input type="text" name="Tipo" /></p>
			 <p><input type="submit" name="formu" value="Introducir"/></p>
<?php
echo $mensaje
?>
	

</body>
</html>
