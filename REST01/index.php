<?php

//crear un cliente.
//$url = 'http://localhost/webservices/REST01/API/alumnos/alumno.php';
//$url = 'https://denisfzelaya504.000webhostapp.com/REST01/API/alumnos/alumno.php';

$JSON = file_get_contents($url);

$datos = json_decode($JSON);

?>

<pre> <?php var_dump($datos) ?> </pre>


<?php
echo 'Nombre: ' . $datos->nombre;
echo '<br>';
echo 'Apellido: ' . $datos->apellido;
echo '<br>';
echo 'Pais: ' . $datos->pais;
echo '<br>';
echo 'Cursos: ' . $datos->cursos;
echo '<br>';
echo 'Usuario: ' . $datos->usuario;
echo '<br>';
    

?>