<?php

session_start();
if (!isset($_SESSION['conectado'])) {
    header('Location: ../index.php');
    die();
}

include '../db/db.php';

if (isset($_POST['viagem']) && isset($_POST['carro']) && isset($_POST['consumo'])){
    

    $viagem = filter_input(INPUT_POST, 'viagem');
    $carro =  filter_input(INPUT_POST, 'carro');
    $combustivel = filter_input(INPUT_POST, 'consumo');

        if($viagem != 0  && $carro != 0 && $combustivel) {
            $stmt = $cc->prepare("SELECT * FROM rotas WHERE id = ?");
            $stmt->bind_param('i', $viagem);
            $stmt->execute();
            $result = $stmt->get_result();
            $rotasData = [];
        
            while ($rotas = $result->fetch_assoc()) {
        
                $rotasData[] = $rotas;
            }
            $result->close();
        
        
            $stmt = $cc->prepare("SELECT * FROM carros WHERE id = ?");
            $stmt->bind_param('i', $carro);
            $stmt->execute();
            $result = $stmt->get_result();
            $carroData = [];
        
            while ($carro = $result->fetch_assoc()) {
        
                $carroData[] = $carro;
            }
        
            $result->close();
        
            $rota = $rotasData[0]['cidade_inicio']. " - ".$rotasData[0]['cidade_destino'];
        
            $distancia = $rotasData[0]['quilometros'];
            
            $consumo = $carroData[0]['consumo'];
            $nomeCarro = $carroData[0]['modelo'];

            $r = $distancia * $combustivel / $consumo;
            $custoViagem = number_format($r, 2, '.', '');
        
            $stmt = $cc->prepare("INSERT INTO viagens (rota, distancia, carro, preco_combustivel, preco_viagem) VALUES ( ?,?,?,?,?)");
            $stmt->bind_param('sisdd', $rota, $distancia,$nomeCarro, $combustivel,$custoViagem);
            $stmt->execute();
            $stmt->close();
            header("Location: ../viagens.php");
            die();

        }else {
            header("Location: ../viagens.php");
            die();
        }
        

   
} 