<?php
session_start();
    try {
    $cedula = $_POST['cedula'];
    $password =  md5($_POST['pass']);
    include('../model/MySQL.php');
    $conexion = new MySQL();
    $pdo = $conexion->conectar();
    $sql = "SELECT * FROM usuarios WHERE idUsuarios=:idUsuarios AND pass=:pass";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':idUsuarios', $cedula, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $password, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['cedula'] = $fila['idUsuarios'];
        $_SESSION['nombre'] = $fila['nombre'];
        $_SESSION['session'] = true;
        header("Location: ../principalCotizacion.php");
       
    } else {
        echo "ERROR";
        $_SESSION['error'] = "Usuario o Contraseña Incorrecta Intente Nuevamente";
        header("Location: ../iniciar.php"); 
    }
    } catch (\Throwable $th) {
        
        $_SESSION['error'] = "Error Interno Contacte a Soporte";
        header("Location: ../iniciar.php"); 
    }
?>