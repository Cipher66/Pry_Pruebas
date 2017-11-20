<html>
    <head>
        <title>Formulario con post</title>
    </head>
    <body>
        <form method="POST" action="verDatos">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
            Nombre: <input type="text" name="Nombre" id="nombre">
            Apellido: <input type="text" name="Apellido" id="apellido">
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>