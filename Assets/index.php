<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Blog - VideoGames</title>
</head>
<body>

    <!--MENU-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-bottom shadow">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><img src="./img/Logo-blog-games.png" alt="logo-blog-games" class="img-fluid" width="100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
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

    <!--HEADER-->

    <div class="container">
    

    <!--SIDEBAR-->
    <aside id="sidebar">
        <!--Block-->
        <div id="login" class="block">
            <h3>Log In</h3>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="passwd" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwd" name="passwd">
                </div>
                
                <button type="submit" class="btn btn-primary mb-3">Log Int</button>
            </form>
        </div>
        <!--Block-->
        <div  id="registration" class="block">
            <h3>Sign Up</h3>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="nombre" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="passwd" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwd" name="passwd">
                </div>

                
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </aside>

    <!--MAIN BOX-->
    <div id="main">
        <h1>Last Entries</h1>
        <article class="input">
            <h2>Title</h2>
            <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
            alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
            </p>
        </article>
        <article class="input">
            <h2>Title</h2>
            <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
            alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
            </p>
        </article>
        <article class="input">
            <h2>Title</h2>
            <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
            alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
            </p>
        </article>
        <article class="input">
            <h2>Title</h2>
            <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
            alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
            </p>
        </article>
    </div>

    </div>

    <!--FOOTER-->
    <footer id="footer">
        <p>
            Developed by Antonio Pasasin &copy; 2019
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>