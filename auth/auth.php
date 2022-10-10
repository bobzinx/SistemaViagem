<?php

session_start();

include '../db/db.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email =  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');

    $stmt =  $cc->prepare("SELECT * FROM usuarios WHERE email = ? AND password = ? ");

    $stmt->bind_param('ss', $email, $senha);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($id, $nome, $email, $senha);

        while ($stmt->fetch()) {

            $_SESSION['id'] = $id;
            $_SESSION['nome'] = $nome;
            $_SESSION['conectado'] = true;
            $_SESSION['email']  = $email;
        }

        header("Location: ../carro.php");
        die();
    } else {
        header("Location: ../index.php");
        die();
    }
} else {
    header("Location: ../index.php");
    die();
}
