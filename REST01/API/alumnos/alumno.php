<?php
    header('Content-Type: application/json');

    //sea leido desde caulquier provveedor
    header("Access-Control-Allow-Origin: *");

    //Acceder desde diferentes verbos http
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

    function mostrar_alumno() {
        $alumno = array(
            'nombre' => 'Denis',
            'apellido' => 'Zelaya',
            'pais' => 'Honduras',
            'cursos' => '5',
            'usuario' => 'dsolouno'
        );
        return $alumno;
    }
    echo json_encode(mostrar_alumno());
?>