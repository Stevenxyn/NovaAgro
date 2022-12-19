<?php
include('db.php');

if (isset($_POST['save_client'])){
    $nombre_cliente = $_POST['nombre_cliente'];
    $direccion_cliente = $_POST['direccion_cliente'];
    $telefono_cliente = $_POST['telefono_cliente'];
    $cedula_cliente = $_POST['cedula_cliente'];
    $metodo_pago = $_POST['metodo_pago'];
    $fecha_llegada = $_POST['fecha_llegada'];

    $query = "INSERT INTO cliente 
    (nombre_cliente, direccion_cliente, telefono_cliente, cedula_cliente,
    metodo_pago, fecha_llegada) VALUES  ('$nombre_cliente', '$direccion_cliente', '$telefono_cliente', '$cedula_cliente', '$metodo_pago', '$fecha_llegada')";

    $result = mysqli_query($conn, $query);

    header('Location: indexRegister.php');

}

?>




