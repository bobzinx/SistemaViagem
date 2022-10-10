<?php
session_start();
include '../db/db.php';

if (!isset($_SESSION['conectado'])) {
    header('Location: index.php');
    die();
}


if (isset($_POST['id'])) {

    $id = filter_input(INPUT_POST, 'id');
    $print = "sucesso";

    $stmt = $cc->prepare("DELETE FROM carros WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    echo $print;
}