function validar() {
    var nombre, apellido, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").Value;
    apellido = document.getElementById("apellido").Value;
    correo = document.getElementById("correo").Value;
    usuario = document.getElementById("usuario").Value;
    clave = document.getElementById("clave").Value;
    telefono = document.getElementById("telefono").Value;

    expresion = /\w+@\w+\.+[a-z]/;

    if (nombre === "" || apellido === "" || correo === "" || usuario === "" || clave === "" || telefono === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (nombre.length > 30) {
        alert("El nombre es muy largo");
        return false;
    }

    else if (apellido.length > 40) {
        alert("El apellido es muy largo");
        return false;
    }

    else if (correo.length > 40) {
        alert("El correo es muy largo");
        return false;
    }

    else if (!expresion.test(correo) > 40) {
        alert("El correo no es valido");
        return false;
    }



    else if (usuario.length > 20 || clave.length > 20) {
        alert("El usuario y la clave solo deben teneer 20 caracteres como maximo");
        return false;
    }


    else if (telefono.length > 10) {
        alert("El telefono es muy largo");
        return false;
    }


    else if (isNaN(telefono)) {
        alert("El telefono ingresado no es un numero");
        return false;
    }


}
