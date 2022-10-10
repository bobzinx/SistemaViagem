<?php 
session_start();
include '../db/db.php';

if (!isset($_SESSION['conectado'])) {
    header('Location: index.php');
    die();
}


if (isset($_POST['id'])) {
    
    $print = "sucesso";

    $id = filter_input(INPUT_POST, 'id');

    $stmt = $cc->prepare("DELETE FROM viagens WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    echo $print;
    
}