
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/login.css" />
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
    <title>Login</title>
  </head>
  <body>
    <main class="d-flex">
      <div class="box-left d-flex justify-content-center align-items-center">
        <div class="text-center text-uppercase">
          <h1 class="mb-5">Bem-vindo</h1>
          <h2>Avaliação Discursiva</h2>
          <h3>Programação Web</h3>
          <h5 class="mt-5">Valdemar Junior</h5>
        </div>
      </div>
      <div class="box-right d-flex justify-content-center align-items-center">
        <form action="" class="w-50 gap-4 d-flex flex-column" autocomplete="off">
          <h2>Faça Login</h2>
          <div class="d-flex flex-column gap-3">
            <div class="area-input d-flex gap-3">
              <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
              <input
                class="button-login"
                type="text"
                name="email"
                placeholder="E-mail"
                
              />
            </div>
            <div class="area-input d-flex gap-3">
                <span><i class="fa fa-unlock" aria-hidden="true"> </i></span>
                <input
                  class="button-login"
                  type="password"
                  name="senha"
                  placeholder="Senha"
                  autocomplete="off"
                />
              </div>
          </div>
          <button class="mt-3">Acessar</button>
        </form>
      </div>
    </main>
  </body>
</html>
