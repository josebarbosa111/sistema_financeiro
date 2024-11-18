<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container text-center">
      <div style="color: white">
        <?php
        include 'php/conexao.php';
        session_start();
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
            $query = $conexao->query($sql);
            $resultado = $query->fetch_assoc();
            echo "Olá ". $resultado['nome']."!";
        }else {
          echo "<script> alert('Você não está logado!'); history.back(); </script>"; 
        }
    ?> 
    <a class="btn btn-outline-danger" href="php/logout.php" role="button">Sair</a>

      </div>
        <div class="row">
          <div class="col-sm-12 col-md-5" style="margin-top: 10%;">
             <form action="php/insert_usuario.php" method="post">
                    <h1 id="h1_cad_user">Cadastro de Categoria</h1>
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="tipo" class="form-label">Tipo</label>
                <div class="radio">
                  <input type="radio" name="tipo" value="1">
                  <label for="Despesa">Despesa</label>
                  <input type="radio" name="tipo" value="0">
                  <label for="Receita">Receita</label>
                </div>
                </div>
                <div class="mb-3">
                    <label for="descrição" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descrição" name="descrição">
                  </div>
            <div class="button">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <a href="tela_inicial.html" type="submit" class="btn btn-warning">Voltar</a>
            </div>
              </form>
          </div>
       
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>