
<?php
include_once 'conexion.php';
$conslSelect = "SELECT nickname,clave FROM usuarios";

$nickname__iniciar__session = $_POST["nickname__iniciar__session"];
$clave__iniciar__session = $_POST["clave__iniciar__session"];

if ($nickname__iniciar__session == null or $clave__iniciar__session == null) {
    echo "<script>window.location = '../Indexs/iniciar_s.html';alert('DATOS INCORRECTOS O NO TE HAS REGISTRADO');</script>";
} else {
    $usuarios = mysqli_query($conexion, $conslSelect);

    $v_user_clave = 0;
    $user_nick = '';
    while ( $usuario=mysqli_fetch_assoc($usuarios) ) 
    {
        if ( $usuario["nickname"] === $nickname__iniciar__session &&  password_verify($clave__iniciar__session,$usuario["clave"])) {
            $v_user_clave = 1;
            $user_nick = $usuario["nickname"]
            ?>
            <?php
            }
        }
    if ($v_user_clave == 1) {
        echo "<script>window.location = '../Kid-helped_pag_principal/Kid-Helped.html';</script>";
        $consulInsert = "UPDATE usuarios SET estado = '1' WHERE nickname = '$user_nick'";
        $usuarios = mysqli_query($conexion, $consulInsert);
    }
    if ($v_user_clave == 0) {
        echo "<script>window.location = '../Indexs/iniciar_s.html';document.getElementById('sms_alert').style.display = 'block';</script>";
    }
    mysqli_free_result($usuarios);
}
?>
