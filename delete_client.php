<?php
include("db.php");
//se verifica que si existe el id
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  //realizamos la consulta del id y donde el id sea al que le hayamos dado clic
  $query = "DELETE FROM cliente WHERE id_compra = $id";
  $result = mysqli_query($conn, $query);
if (!$result) {
  die("fallo");


}



  header('Location: indexRegister.php');
}
?>
