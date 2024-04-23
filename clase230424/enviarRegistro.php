
<?php
include "conexion.php";
mysqli_set_charset($conexion,'utf8');
/*
    $buscarusuario="SELECT * FROM persona WHERE no_cuenta ='$_POST[no_cuenta]'";    

    $resultado = $conexion -> query($buscarusuario);
    $count =mysqli_num_rows($resultado);

    if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='index.html'>Nuevo registro</a>";


    }else{
    mysqli_query($conexion, "INSERT INTO persona( nombre_usuario ) VALUES('$_POST[nombre_usuario]')");
    }
*/
try{
    if(isset($_POST['nombre_usuario']) && isset($_POST['carrera'] )){
        $nombre = $_POST['nombre_usuario'];
        $carrera = $_POST['carrera'];
        $sql =  "INSERT INTO persona(nombre_usuario, carrera) VALUES(:nombre, :carrera) "
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':carrera', $carrera, PDO::PARAM_STR);
        $stmt->execute();
        echo "Los datos se cargaron correctamente";
        echo "<a href='index.html'>Nuevo registro</a>";


    }else{
        echo "Los datos no están definidos";
    }
    

}catch(PDOException $e){
    echo "Error en la conexión" . $e->getMessage();
}
$conn = NULL;
?>