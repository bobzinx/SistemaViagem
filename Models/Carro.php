<?php
session_start();
if (!isset($_SESSION['conectado'])) {
    header('Location: ../index.php');
    die();
}
include '../db/db.php';


if (isset($_POST['modelo']) && isset($_POST['combustivel']) && isset($_POST['consumo'])) {

    $modelo = filter_input(INPUT_POST, 'modelo');
    $combustivel = filter_input(INPUT_POST, 'combustivel');
    $consumo = filter_input(INPUT_POST, 'consumo');

    $stmt = $cc->prepare("INSERT INTO carros (modelo, combustivel, consumo) VALUES ( ?,?,?)");
    $stmt->bind_param('ssi', $modelo, $combustivel, $consumo);
    $stmt->execute();
    $stmt->close();
    header("Location: ../carro.php");
    die();
}