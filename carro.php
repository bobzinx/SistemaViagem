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
    <title>Carro</title>
  </head>
  <body>
    <header
      class="d-flex justify-content-center align-items-center p-2"
    >
      <p style="font-size: 2rem; color: white">
        <strong> GESTÃO DE VIAGENS - CARRO </strong>
      </p>
    </header>
      <div class="d-flex " style="height: 100vh;">
        <div class="col-2 menu-lateral d-flex flex-column">
            <button class="p-2 button-active">
                Carros
            </button>
            <a href="./rota.html" class=" text-center">
            <button class="p-2">
                    Rotas
                </button>
            </a>
            <a href="./calculo.html" class=" text-center">
            <button class="p-2">
                Cálculos
            </button>
            </a>
        </div>
        <div class="col-10 content">
            <div class="container mt-5">
                <fieldset>
                    <legend><strong> Cadastro de Carros </strong></legend>
              <form class="row g-3" action="actions/carro_action.php"  method="POST">
                    <div class="col-md-6">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control input-type" id="modelo" name="modelo" placeholder="Chevette Tubarão" required />
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">combustivel</label>
                        <input type="text" class="form-control input-type" id="combustivel" name="combustivel" placeholder="Gasolina" required/>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" class="form-label">Consumo</label>
                        <input
                        type="number"
                        class="form-control input-type"
                        id="consumo"
                        name="consumo"
                        placeholder="14.5"
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
                    <th>Modelo</th>
                    <th>Combustível</th>
                    <th>Consumo</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                <td>Monza</td>
                <td>Gasolina</td>
                <td>12 KM/L</td>
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
