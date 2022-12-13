<?php

$usuario = 'root';
$senha = '';
$database= 'formulario';
$host='localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database) or die('Conexão inexistente!');