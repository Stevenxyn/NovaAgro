<?php
include('db.php');

if (isset($_POST['save_product'])) {
    $id_producto = $_POST['id_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $cantidad_producto = $_POST['cantidad_producto'];
    $precio_producto = $_POST['precio_producto'];
    $cedula_cliente = $_POST['cedula_cliente'];

echo $nombre_producto;

    $query2 = "INSERT INTO productos
    (id_producto, nombre_producto ,cantidad_producto ,precio_producto, cedula_cliente) VALUES  
    ('$id_producto', '$nombre_producto', '$cantidad_producto', '$precio_producto', '$cedula_cliente')";

    $result = mysqli_query($conn, $query2);

    header('Location: indexRegister.php');
}

?>