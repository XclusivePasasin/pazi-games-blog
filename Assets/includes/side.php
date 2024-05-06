
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