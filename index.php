<?php
   include_once ('globals.php');
   include_once ('connection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MovieStar</title>
   <link rel="shortcut icon" href="<?= $BASE_URL ?>img/moviestar.ico" type="image/x-icon">
   <!--Bootstrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!--Bootstrap Icons-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
   <!--CSS PJ-->
   <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
   <header>
      <nav id="main-navbar" class="navbar navbar-expand-lg">
         <a href="<?= $BASE_URL ?>" class="navbar-brand">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Moviestar" id="logo">
            <span id="moviestar-title">Moviestar</span>
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
         </button>
         <form action= "" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
            <input type="text" name="q" id="search" class="form-control mr-sm-2" placeholder="Buscar Filmes" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit">
               <i id="search-btn" class="bi bi-search"></i>
            </button>
         </form>
         <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a href="<?= $BASE_URL ?>auth.php" class="nav-link"> Entrar / Cadastrar</a>
               </li>
            </ul>
         </div>
      </nav>
   </header>
   <div id="main-container" class="container-fluid">
      <h1>Corpo do site</h1>
   </div>
   <footer id="footer">
      <div id="social-container">
         <ul>
            <li>
               <a href="#"><i class="bi bi-facebook"></i></a>
            </li>
            <li>
               <a href="#"><i class="bi bi-instagram"></i></a>
            </li>
            <li>
               <a href="#"><i class="bi bi-youtube"></i></a>
            </li>
         </ul>
      </div>
      <div id="footer-links-container">
         <ul>
            <li><a href="#">Adicionar filme</a></li>
            <li><a href="#">Adicionar crítica</a></li>
            <li><a href="#">Entrar/registrar</a></li>
         </ul>
      </div>
      <p>&copy; 2021 João Pedro Sassi Granado</p>
   </footer>
   



   <!--Bootstrap JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>