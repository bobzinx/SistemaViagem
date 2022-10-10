<?php
session_start();
if (!isset($_SESSION['conectado'])) {
    header('Location: ../index.php');
    die();
}
include '../db/db.php';


if (isset($_POST['cidade_inicio']) && isset($_POST['cidade_destino']) && isset($_POST['quilometros'])) {

    $cidade_partida = filter_input(INPUT_POST, 'cidade_inicio');
    $cidade_destino = filter_input(INPUT_POST, 'cidade_destino');
    $quilometros = filter_input(INPUT_POST, 'quilometros');

    $sql = $cc->prepare("INSERT INTO rotas (cidade_inicio, cidade_destino, quilometros) VALUES ( ?,?,?)");
    $sql->bind_param('ssi', $cidade_partida, $cidade_destino, $quilometros);
    $sql->execute();
    $sql->close();

    header("Location: ../rota.php");
    die();
}