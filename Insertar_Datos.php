<html>
<head>
  <title>ASIR</title>
  <meta charset="UTF-8">
  <meta name="description" content="Probando bordes">
  <meta name="keywords" content="HTML, CSS, bordes">
  <meta name="author" content="root" >
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  
</head>

<body>

	<h3>Nueva arma asalto</h3>


<?php
if ( !isset($_POST['Id']) ) {
?>
        
    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
        Arma: <input type="text" name="Id" size="8" /><br/>
        Daño: <input type="text" name="Descripcion" size="10" /><br/>
        Cargador: <input type="text" name="Tipo" size="10" /><br/>
        <input type="submit" name="env" value="ENVIAR"/>
    </form>	  
    
<?php    
}
else {
   $username = "sergio";
    $password = "as3-2-17";
    $servername = "localhost";
    $database = "Productos";
    $table = "iluminacion";  
try {
    //Conexión con una base de datos del servidor
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión con la base de datos '".$database."' del servidor '".$servername."' realizada.<br/>";
    
    echo "Arma: ".$_POST['Id']."<br/>";
    echo "Daño: ".$_POST['Descripcion']."<br/>";
    echo "Cargador: ".$_POST['tipo']."<br/>";    
    
    $sql = "INSERT INTO ".$table." (Id, Descripcion, Tipo) VALUES ('".$_POST['Id']."','".$_POST['Descripcion']."','".$_POST['tipo']."')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Arma añadida correctamente.<br/>";
    }
catch(PDOException $e) {
    if ($e->getCode() == "23000")
        echo "Imposible insertar el registro porque esa clave ya existe."."<br/>";
    else
        echo $e->getMessage();
}
}    
 //print "<br/><br/><br/>sql: ".$sql;
?>



</body>
</html>
