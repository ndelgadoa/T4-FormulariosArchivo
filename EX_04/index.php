<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h1>Formulario</h1>
<form action="recive.php" method="POST" name="formulario">
    <h2>Nombre</h2>
    <input type="string" placeholder="nom:" name="nombre"></h2>
    <br>
    <h2>Apellido</h2>
    <input type="string" placeholder="nom:" name="apellido"></h2>
    <br>
    <h2>Contraseña</h2>
    <input type="password" placeholder="contra:" name="contraseña">
    <br>
    <h2>Alumno o Profe</h2>
    <label for="Alumno">Alumno </label>
    <input type="radio" name="alumno_profe" value="Alumno" id="Alumno">
    <label for="Profesor">Profesor </label>
    <input type="radio" name="alumno_profe" value="Profesor" id="Profesor">
    <h2>Imagen</h2>
    <input type="file" name="foto">
    <br>
    <h2>Edad</h2>
    <input type="number" placeholder="edad:" name="edad">
    <br>
    <h2>Comentarios</h2>
    <input type="string" placeholder="comentarios:" name="comentarios">
    <br>
    <h2>Test</h2>
    <input id="test" name="test" type="hidden" value="myPrueba">
    </br>
    </br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>