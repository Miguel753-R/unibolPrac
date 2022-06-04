<?php
    include('includes/db.php');

    $usuario = $_POST['usuario'];
    $cargo = $_POST['cargo'];
    $contraseña = $_POST['contraseña'];
    
    $consulta = "INSERT INTO usuarios (id_usuario, usuario, contraseña, cargo) VALUES ('NULL', '$usuario', '$contraseña', '$cargo')";
    $resultado = mysqli_query($connection,$consulta);

    if(!$resultado){
        die("Registro fallido");
    }
    header("Location: ../index.html");
    mysqli_free_result($resultado);
    mysqli_close($connection);
        ?>