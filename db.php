<?php
session_start();

$conn = mysqli_connect(
  //en donde esta el servidor
  'localhost',
  //usuario por defecto es root
  'root',
  //contraseña
  '',
  //nombre de la bdd
  'novaagro'
); 

?>