<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <h1>Registro para datos personales</h1>
        <form method="POST" action="../Home/insertarForm">

            <label for="nombre">Nombre</label>
            <input type="nombre" id="nombre" name="nombre" placeholder="Nombre">
            <br><br>
            <label for="apellidos">Apellidos</label>
            <input type="apellidos" id="apellidos" name="apellidos" placeholder="Apellidos">
            <br><br>
            <label for="telefono">Telefono</label>
            <input type="telefono" id="telefono" name="telefono" placeholder="Telefono">
            <br><br>
            <label for="empresa">Empresa</label>
            <input type="empresa" id="empresa" name="empresa" placeholder="empresa">
            <br><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="email@example.com">
            <br><br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <br><br>

            <button type="submit">Registrar</button>

        </form>

    </div> </body>

<footer>

    <div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">

        <i class="bi bi-badge-cc"></i>2022:

        <a class="text-dark" href="#">Nesler</a>

    </div>

</footer>

</html>

