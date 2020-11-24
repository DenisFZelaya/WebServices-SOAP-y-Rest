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

<pre> <?php var_dump($cursos) ?> </pre>
<pre> <?php var_dump($alumnos) ?> </pre>

<?php

echo '<h1>Alumnos</h1>';
echo '<ul>';
foreach ($alumnos as $alumno) {
    # code...
    echo '<li>'. $alumno . '</li>';
}
echo '</ul>';


echo '<h1>Cursos Disponibles</h1>';
echo '<ul>';
foreach ($cursos as $curso) {
    # code...
    echo '<li>'. $curso . '</li>';
}
echo '</ul>';

    
?>