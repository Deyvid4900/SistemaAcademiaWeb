<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Academia</title>
    <link
      rel="shortcut icon"
      href="https://cdn-icons-png.flaticon.com/128/8140/8140472.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,800;1,100;1,200;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="box">
      <div class="my-auto d-flex justify-content-center align-itens-center">
        <form class="text-white row-lg">
          <h1 class="h1_Login my-4">Entrar</h1>
          <div class="col">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Nome Usuario</label
              >
              <input
                type="Text"
                class="form-control"
                placeholder="Nome de Usuario"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Senha</label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Senha"
                id="exampleInputPassword1"
              />
              <div class="d-flex justify-content-between mt-1">
                <a href="#" class="link-secondary">Esqueci a Senha</a>
                <a href="./pages/Registrar/Register.php">Criar a conta</a>
              </div>
            </div>
          </div>
          <div class="d-flex w-100 my-5">
            <button type="submit" class="w-100 btn btnEntrar btn-primary">
              Entrar
            </button>
          </div>
        </form>
      </div>
    </div>

    <script src="index.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
