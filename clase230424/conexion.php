
<?php
$dns="mysql:host=127.0.0.1; dbname=DBweb1";
$user="root";
$pass="123456";
try{
    $conn = new PDO($dns, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
}catch(PDOException $e){
    echo "Error en la conexión" . $e->getMessage();
}


?>