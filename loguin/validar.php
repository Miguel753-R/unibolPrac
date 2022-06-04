<?php
    include('includes/db.php');
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    $consulta="SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contraseña'";
    $resultado=mysqli_query($connection,$consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        while ($row = mysqli_fetch_assoc($resultado)){
            $id_user = $row['id_usuario'];
            $usu = $row['usuario'];
            $contra = $row['contraseña'];
            $carg = $row['cargo'];
        }

        if($carg == "Administrador"){
            header("location:includes/home.php");
        }else{
            header("Location:../../../../Universidad-UNISEN/index.php");
        }
    }else{
?>
        <?php
            include("index.html")
        ?>
        <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($connection);
        ?>