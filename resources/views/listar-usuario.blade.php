

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
   <title>
   </title>

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


        </nav>

        <h1>Listar Usuários</h1>
<?php

  //  $sql = "SELECT * FROM usuarios ";

   // $res = $conn->query($sql);

 //   $qtd = $res->num_rows;

  //  if($qtd > 0){
        print "<table class='table table-hover
        table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";

     //   while($row = $res->fetch_object()){
        //  print   "<tr>";
       //   print "<td>".$row->id."</td>";
        //   print "<td>".$row->nome."</td>";
         //  print "<td>".$row->email."</td>";
        //   print "<td>".$row->data_nasc."</td>";
          // print "<td>
         //       <button onclick=\"location.href='?page=editar-usuario&id=".$row->id."'\" class='btn btn-success'>Editar</button>

           //     <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
               //     location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"
               //     class='btn btn-danger'>Excluir</button>

         //  </td>";
          //  print "</tr>";
      //  }

      //  print "</table>";
   // } else {
     //   print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  //  }
?>
