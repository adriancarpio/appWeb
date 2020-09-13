<?php
include_once 'conexion.php';
//resibir los datos y alamcenar en variables 
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];
//consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, apellido, correo, usuario, clave, telefono) VALUE ('$nombre', '$apellido',  '$correo', '$usuario', '$clave', '$telefono')"; 

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if(mysqli_num_rows($verificar_usuario)> 0){
    echo '<script>
    alert("El usuario ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
}


$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo)> 0){
   echo '<script>
    alert("El correo ya esta registrado");
    window.history.go(-1);
    </script>'; 
    exit;
}

//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) {
    echo '<script>
    alert("Error de registro ");
    window.history.go(-1);
    </script>';
} else {
   echo '<script>
    alert("registro completo");
    window.history.go(-1);
    </script>';
    header("location:../index.html"); 
}
//cerrar conexion
mysqli_close($conexion);
?>


