
      
<?php    

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
    
    //echo "Id: ".$_POST['Id']."<br/>";
    //echo "Descripcion: ".$_POST['Descripcion']."<br/>";
    //echo "Tipo: ".$_POST['tipo']."<br/>";    
    
    $sql = "INSERT INTO ".$table." (Id, Descripcion, Tipo) VALUES ('".$_POST['Id']."','".$_POST['Descripcion']."','".$_POST['tipo']."')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Producto añadido correctamente.<br/>";
    }
catch(PDOException $e) {
    if ($e->getCode() == "23000")
        echo "Error ya existe el producto."."<br/>";
    else
        echo $e->getMessage();
}
   
 //print "<br/><br/><br/>sql: ".$sql;
?>





