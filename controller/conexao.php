<?php

$usuario = 'root';
$senha = '';
$database= 'formulario';
$host='localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);

  if($mysqli->error){
      die('Falha na conexão'.$mysqli->error);
  }