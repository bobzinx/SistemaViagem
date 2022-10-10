<?php

session_start();

if (!isset($_SESSION['conectado'])) {

  header('Location: index.php');
  die();
}

include 'db/db.php';

$stmt = $cc->query("SELECT * FROM rotas");
$rotas = [];

if ($stmt->num_rows > 0) {

  while ($data = $stmt->fetch_assoc()) {
    $rotas[] = $data;
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/global.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Rotas</title>
  </head>
  <body>
    <header
      class="d-flex justify-content-center align-items-center p-2"
    >
      <p style="font-size: 2rem; color: white">
        <strong> GESTÃO DE VIAGENS - ROTA </strong>
      </p>
    </header>
      <div class="d-flex " style="height: 100vh;">
        <div class="col-2 menu-lateral d-flex flex-column">
          <a href="./carro.php" class=" text-center">
            <button class="p-2">
                Carros
            </button>
          </a>
            <button class="p-2 button-active">
                    Rotas
                </button>
         
            <a href="./viagens.php" class=" text-center">
            <button class="p-2">
                Cálculos
            </button>
            </a>
        </div>
        <div class="col-10 content">
            <div class="container mt-5">
                <fieldset>
                    <legend><strong> Cadastro de Carros </strong></legend>
              <form class="row g-3" action="Models/Rota.php"  method="POST">
                    <div class="col-md-6">
                        <label for="origem" class="form-label">Cidade de Partida</label>
                        <input type="text" class="form-control input-type" id="origem" name="cidade_inicio" placeholder="Irecê - BA" required />
                    </div>
                    <div class="col-md-6">
                        <label for="destino" class="form-label">Cidade de Destino</label>
                        <input type="text" class="form-control input-type" id="destino" name="cidade_destino" placeholder="Gramado - RS" required/>
                    </div>
                    <div class="col-md-6">
                        <label for="distancia" class="form-label">Distância</label>
                        <input
                        type="number"
                        class="form-control input-type"
                        id="distancia"
                        name="quilometros"
                        placeholder="2560"
                        required
                        />
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn">Cadastrar</button>
                          <button type="reset" class="btn">Limpar</button>
                    </div>
                </form>
            </fieldset>
            <div class="table-responsive mt-5">
              <table class="table table-sm table-bordered table-hover text-center text-white">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Cidade de Partida</th>
                    <th>Cidade de Destino</th>
                    <th>Distância</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($rotas as $item) : ?>
            <tr>
              <td><?= $item['id'] ?></td>
              <td><?= $item['cidade_inicio'] ?></td>
              <td><?= $item['cidade_destino'] ?></td>
              <td><?= $item['quilometros'] ?> KM</td>
              <td class="text-center">
                <button onclick="down('<?= $item['id'] ?>')" class="btn btn-sm">
                  Excluir
                </button>
              </td>
            </tr>
          <?php endforeach ?>
                    </tbody>
              </table>
            </div>
        </div>
      </div>
  </body>
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>

  <script src="js/delete_rota.js">
  </script>
</html>
