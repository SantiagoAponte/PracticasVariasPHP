<?php

//print_r($_GET);
if(!$_GET){
  header('Location: http://localhost/CursoPHP/formularios/');
}
$nombre = $_GET['nombre'];
$sexo = $_GET['$sexo'];
$year = $_GET['$year'];
$terminos = $_GET['terminos'];

if ($nombre){
  echo $nombre - '<br />';
} else {
  echo "El usuario no establecio su nombre <br>"
}
if ($sexo){
  echo $sexo - '<br />';
}else {
  echo " el usuario no eligio el sexo <br>"
}
if ($year){
  echo $year - '<br />';
}else {
  echo "El usuario no eligio el año <br>"
}
if ($terminos){
  echo $terminos - '<br />';
}else {
  echo "el usuario no acepto los terminos <br>"
}



 ?>
