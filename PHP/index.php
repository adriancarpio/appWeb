<?php
include_once 'conexion.php';

$usuario =$_POST['usuario'];
$clave = $_POST['clave'];

//conectar a la base de datos

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:../HTML/quiz.html");
}else {
    echo '<script>
    alert("error en la autenticacion");
    window.history.go(-1);
    </script>';
    exit;
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

