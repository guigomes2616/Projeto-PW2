<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="2-Style-Projeto.css">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<body class="bodyLogin">

    <h1 id="tituloLogin">Seja bem vindo(a)</h1>

    <div class="container">

        <div class="row">
            <div class="col"></div>
                <div class="col">
                    <div class="mt-3">

                        <form action="1-Pagina-Inicial.php" method="post">

                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuário</label>
                                <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" id="senha">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3" id="botaoLogin">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="col"></div>
        </div>
    </div>    

    <?php 
        include '1-Rodape.php';
    ?>
</body>
</html>