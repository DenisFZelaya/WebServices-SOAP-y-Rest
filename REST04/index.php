<?php

//crear un cliente.
//$url = 'http://localhost/webservices/REST01/API/alumnos/alumno.php';
$cursosURL = 'http://localhost/webservices/REST02/API/alumnos/cursos';
$alumnosURL = 'http://localhost/webservices/REST02/API/alumnos/lista';

//Obtener el contenido
$cursosJSON = file_get_contents($cursosURL);
$alumnosJSON = file_get_contents($alumnosURL);

// Decodificar el JSON
$cursos = json_decode($cursosJSON);
$alumnos = json_decode($alumnosJSON);

?>

<pre> <?php // var_dump($cursos) ?> </pre>
<pre> <?php // var_dump($alumnos) ?> </pre>

<?php

    

?>

<form action="https://denisfzelaya504.000webhostapp.com/REST04/API/biblioteca/autor/nuevo" method="POST">
    <h1> Agregar </h1>
    <label>Autor</label>
    <input type="text" name="autor">
    <label>Libro</label>
    <input type="text" name="titulo">
    <input type="submit" value="Enviar">
</form>