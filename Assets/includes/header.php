<?php require_once 'connection.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Blog - VideoGames</title>
</head>
<body>
    <header>
    <!--MENU-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-bottom shadow">
        <div class="container">
                <a class="navbar-brand" href="./index.php"><img src="./img/Logo-blog-games.png" alt="logo-blog-games" class="img-fluid" width="70px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                More...
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Categoria</a></li>
                                <li><a class="dropdown-item" href="#">Categoria</a></li>
                                <li><a class="dropdown-item" href="#">Categoria</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    </header>
    <br>
    <div class="container">
