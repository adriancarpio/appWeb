<?php 
/*$conexion = mysqli_connect("localhost", "root", "root", "registro");

if (!$conexion) {
    echo 'error al conecta a la base de datos';
}
else{
    echo 'conectado a la base de datos';
}*/

$host="adrian12.mysql.database.azure.com";
$port=3306;
$user="adrian1208@adrian12";
$password="Carpio1208";
$dbname="registro";

$conexion = new  mysqli($host, $user, $password, $dbname, $port)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


?>

