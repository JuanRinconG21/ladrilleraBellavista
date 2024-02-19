<?php
session_start();
$idProd = $_GET['id'];
    try {
        include('../model/MySQL.php');
        $conexion = new MySQL();
        $pdo = $conexion->conectar();
        $sql = "UPDATE productos SET estado=1 WHERE idProductos=:idProductos ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':idProductos', $idProd, PDO::PARAM_STR);
        $stmt->execute();
        $_SESSION['felicitaciones'] = 'Producto Desactivado Correctamente';
        header("Location: ../verProductos.php");
    } catch (\Throwable $th) {
        $_SESSION['error'] = $th;
        header("Location: ../verProductos.php");
    }

?>