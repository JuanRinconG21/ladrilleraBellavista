<?php
session_start();
$precioProd = $_POST['precioEdit'];
$pesoProd = $_POST['pesoEdit'];
$idProd = $_POST['idProd'];
$nuevoPeso = str_replace(",",".", $pesoProd);
$nuevoPeso = trim($nuevoPeso);
if (is_numeric($nuevoPeso)){
    try {
        include('../model/MySQL.php');
        $conexion = new MySQL();
        $pdo = $conexion->conectar();
        $sql = "UPDATE productos SET precio=:precio, peso=:peso WHERE idProductos=:idProductos ";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':precio', $precioProd, PDO::PARAM_STR);
        $stmt->bindParam(':peso', $nuevoPeso, PDO::PARAM_STR);
        $stmt->bindParam(':idProductos', $idProd, PDO::PARAM_STR);
        $stmt->execute();
        $_SESSION['felicitaciones'] = 'Producto Editado Correctamente';
        header("Location: ../verProductos.php");
    } catch (\Throwable $th) {
        $_SESSION['error'] = $th;
        header("Location: ../verProductos.php");
    }
   
}else{
    $_SESSION['error'] = 'Ingrese Solo Numeros';
    header("Location: ../verProductos.php");
}
?>