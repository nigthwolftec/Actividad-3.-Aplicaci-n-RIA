<?php
mb_internal_encoding("UTF-8");
try {
  $nombre1 = trim(filter_input(INPUT_POST, "nombre1"));
  $nombre2 = trim(filter_input(INPUT_POST, "nombre2"));
  $nombre3 = trim(filter_input(INPUT_POST, "nombre3"));
  if (!$nombre1) {
    throw new Exception("Falta el nombre de la biblioteca");
  } elseif (!$nombre2) {
    throw new Exception("Falta los horarios de la biblioteca");
  } elseif (!$nombre3) {
    throw new Exception("Falta las actividades de la biblioteca");
  }
  $respuesta = "La biblioteca $nombre1 sus horarios son de $nombre2 y sus actividades son $nombre3";
  muestraRespuesta($respuesta);
} catch (Exception $e) {
  muestraRespuesta($e->getMessage());
}
function muestraRespuesta($respuesta) {
  header('Content-type: text/plain');
  echo $respuesta;
}