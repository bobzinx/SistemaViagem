<?php


$servenome = "localhost";
$usuario = "root";
$senha = "";
$db = "sistema";


$cc = new mysqli($servenome, $usuario, $senha,$db);

if ($cc->connect_error) {
    die("Falha em conectar " . $cc->connect_error);
  }