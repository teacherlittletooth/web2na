<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../public/assets/bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css"/>
        <title>Página inicial</title>
    </head>
    <body>

<!-- Propriedades principais (cor e tamanho) -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
<!-- logo e link do logo -->
    <a class="navbar-brand" href="../index.php">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/479px-WhatsApp.svg.png" alt="Logo" height="80px">
    </a>
    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <li class="nav-item">
        <a class="nav-link" href="../public/lista.php">Listar pedidos</a>
      </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>