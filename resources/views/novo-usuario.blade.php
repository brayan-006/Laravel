<!DOCTYPE html>
<html lang="pt-BR">
  <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="
   width=device-width, initial-scale=1">
   <!-- Bootstrap Css -->
   <link href="/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="/css/crud.css">
   <title> </title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="index">Home</a>
            </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="novo-usuario">Novo usuário</a>
            </li>

        <li class="nav-item">
          <a class="nav-link" href="listar-usuario">Listar usuário</a>
            </li>


      </ul>
    </div>
  </div>

</nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
            <h1>Novo Usuário</h1>
 <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control"required>
</div>

<div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control"required>
</div>

<div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control"required>
</div>

<div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>

</div>
          <img src="./img/Teentec.jpeg" class="img1">
          <script src="/js/bootstrap.bundle.min.js"></script>


        </div>
        </div>
    </div>
    </div>
  </body>
  </html>
