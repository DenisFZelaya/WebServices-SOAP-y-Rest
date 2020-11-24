<?php
        header('Content-Type: application/json');
        //sea leido desde caulquier provveedor
        header("Access-Control-Allow-Origin: *");
        //Acceder desde diferentes verbos http
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

    //Imprimir el valor pasado por url
    //print_r($_GET);

    function mostrar_cursos() {
        $cursos = array('AngularJS', 'MondoDB', 'PHP', 'UX', 'Ruby');
        return $cursos;
    }

    function mostrar_alumnos() {
        $alumnos = array('Antonio', 'Hernan', 'Carlos', 'Denis', 'Mayte');
        return $alumnos;
    }

    if($_GET['solicitud'] == 'cursos') {
        $resultados = mostrar_cursos();
    } else if($_GET['solicitud'] == 'lista') {
        $resultados = mostrar_alumnos();

    } else {
        header('HTTP/1.1 405 Method Not Allowed');
        exit;
    }

    echo json_encode(($resultados));
?>