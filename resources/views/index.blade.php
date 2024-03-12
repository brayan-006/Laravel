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
    <a class="navbar-brand" href="#">Cadastro</a>
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
          <?php
         //include("config.blade.php"); //conexão banco de dados
          switch(@$_REQUEST["page"]){
            case "novo":
            // include("novo-usuario.blade.php");
            break;
            case "listar";
             // include("listar-usuario.blade.php");
            break;
            case "salvar":
            //  include("salvar-usuario.blade.php");
              break;
              case "editar":
              //  include("editar-usuario.blade.php");
              break;
            default:

              print "<h1>Bem vindo!</h1>";

            }
          ?><img src="./img/Teentec.jpeg" class="img1">
          <script src="/js/bootstrap.bundle.min.js"></script>


        </div>
        </div>
    </div>
    </div>
  </body>
  </html>
