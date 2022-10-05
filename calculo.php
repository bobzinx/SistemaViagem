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
    <title>Cálculos</title>
  </head>
  <body>
    <header
      class="d-flex justify-content-center align-items-center p-2"
    >
      <p style="font-size: 2rem; color: white">
        <strong> GESTÃO DE VIAGENS - CÁLCULOS </strong>
      </p>
    </header>
      <div class="d-flex " style="height: 100vh;">
        <div class="col-2 menu-lateral d-flex flex-column">
          <a href="./carro.html" class=" text-center">
            <button class="p-2">
                Carros
            </button>
          </a>
               
          <a href="./rota.html" class=" text-center">
            <button class="p-2 ">
                    Rotas
                </button>
              </a>
            <button class="p-2 button-active">
                Cálculos
            </button>
 
        </div>
        <div class="col-10 content">
            <div class="container mt-5">
                <fieldset>
                    <legend><strong> Calcular Viagens </strong></legend>
              <form class="row g-3" action="actions/carro_action.php"  method="POST">
                    <div class="col-md-6">
                        <label for="viagem" class="form-label">Rota</label>
                        <div class="form-floating">
                          <select class="form-select" id="viagem" name="viagem" required>
                          <option value="0" selected>Escolha uma rota aqui...</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="carro" class="form-label">Carro</label>
                        <div class="form-floating">
                          <select class="form-select" id="carro" name="carro" required>
                          <option value="0" selected>Escolha o carro...</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Preço do Combustível</label>
                        <input
                        type="number"
                        class="form-control input-type"
                        id="price"
                        name="price"
                        placeholder="5.20"
                        required
                        />
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn">Calcular</button>
                          <button type="reset" class="btn">Limpar</button>
                    </div>
                </form>
            </fieldset>
            <div class="table-responsive mt-5">
              <table class="table table-sm table-bordered table-hover text-center text-white">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Rota</th>
                    <th>Distância</th>
                    <th>Carro</th>
                    <th>Preço do Combustível</th>
                    <th>Custo da Viagem</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td>1</td>
                            <td>Teste</td>
                            <td>5000 KM</td>
                            <td>C4 Pallas</td>
                            <td>R$ 5.36</td>
                            <td> R$ 2.500</td>
                      <td class="text-center">
                        <button class="btn btn-sm">
                          Excluir
                        </button>
                      </td>
                    </tr>
                    </tbody>
              </table>
            </div>
        </div>
      </div>
  </body>
</html>