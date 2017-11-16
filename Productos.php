<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/FORMATO.css">
<title>Productos</title>
<div id=cabecera>

<IMG SRC="IMG/twist-25_2.jpg" WIDTH=200 HEIGHT=200 ALT="Cabeza movil"/>
<p align=center> S.RUBIO PRODUCCIONES</p>

</div>
</head>
<body>
<?php
if(isset($_POST['formu']))
{
		include 'Introduce.php';
	}
?>
<div>
	<a href="index.html">Inicio</a>

  <a class="active" href="Productos.html">Productos</a>
	
  <a href="QuienesSomos.html">Quienes somos?</a>	
  <a href="Contacto.html">Contacto</a>
</div> 
<script language="JavaScript">
function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    segundo = momentoActual.getSeconds()

    horaImprimible = hora + " : " + minuto + " : " + segundo

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
}
</script> 
  <body onload="mueveReloj()"> 

<form name="form_reloj">
<input type="text" name="reloj" size="10">
</form>


  </div>
<h1> Aqui saldran los futuros productos de la productora</h1>





<p>ILUMINACION</p><br>

<div>

 <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Descripcion</th><th>tipo</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "sergio";
$password = "as3-2-17";
$dbname = "Productos";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM iluminacion");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
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
