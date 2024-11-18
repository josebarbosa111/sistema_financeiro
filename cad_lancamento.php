<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center">
    <a class="btn btn-outline-danger" href="php/logout.php" role="button">Sair</a>
        <div class="row">
          <div class="col-sm-12 col-md-5" style="margin-top: 10%;">
             <form action="php/insert_usuario.php" method="post">
                    <h1 id="h1_cad_user">Cadastro de laçamento</h1>
                <div class="mb-3">
                  <label for="cargo" class="form-label">Data do lançamento</label>
                  <input type="date" class="form-control" id="dt_lacamento" name="dt_lacamento">
                </div>
                <div class="mb-3">
                    <label for="cargo" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="ds_lacamento" name="ds_lacamento">
                </div>
                <label for="cargo" class="form-label">categoria</label>
                <select class="form-select" name="fk_categoria" id="fk_categoria">
                    <option value="x">Luz</option>
                </select>
            <div class="button">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <a href="tela_inicial.html" type="submit" class="btn btn-warning">Voltar</a>
            </div>
              </form>
             
          </div>
         <div class="col-sm-12 col-md-5">
            <img src="img/oil_8084515.png" alt="" style="width: 100%; margin-top: 80px;">
          </div>
        </div>
      
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>