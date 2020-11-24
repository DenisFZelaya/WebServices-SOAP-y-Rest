<?php
    header('Content-Type: application/json');
    //sea leido desde caulquier provveedor
    header("Access-Control-Allow-Origin: *");
    //Acceder desde diferentes verbos http
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

    //Conexion a la db
    //require_once('db.php');

    //Imprimir el valor pasado por url
    //print_r($_GET);

    function mostrar_titulos($detalle) {
        if($detalle == 'lista'){
            require_once('./db.php');
            $sql = "SELECT titulo FROM libros";
            $res_sql = $conn->query($sql);
            $respuesta = $res_sql->fetch_all();
            //return $respuesta;
        } else {
            require_once('./db.php');
            $sql = "SELECT titulo from libros WHERE id=".$detalle;
            $res_sql = $conn->query($sql);
            $respuesta = $res_sql->fetch_all();
            //return $respuesta;
        }

        return $respuesta;
    }

    function mostrar_autores($detalle) {
        if($detalle == 'lista'){
            require_once('./db.php');
            $sql = "SELECT autor FROM libros";
            $res_sql = $conn->query($sql);
            $respuesta = $res_sql->fetch_all();
            return $respuesta;
        } else {
            require_once('./db.php');
            $sql = "SELECT autor from libros WHERE id=".$detalle;
            $res_sql = $conn->query($sql);
            $respuesta = $res_sql->fetch_all();
            return $respuesta;
        }
    }

    function nuevo_libro() {
        $titulo = $_POST['ntitulo'];
        $autor = $_POST['nautor'];

        require_once('./db.php');
        $sql = "INSERT INTO `libros` (`id`, `titulo`, `autor`)
        VALUES (NULL, '{$titulo}', '{$autor}');";
        $res_sql = $conn->query($sql);

        header('Location: ../../../');
        exit;
    }
    ///////////////////////////////////////////////////////
    if($_GET['peticion'] == 'titulo') {
        $resultados = mostrar_titulos($_GET['detalle']);
    } else if ($_GET['detalle'] == 'nuevo') {
        nuevo_libro();
    } else if ($_GET['peticion'] == 'autor') {
        $resultados = mostrar_autores($_GET['detalle']);
    } else {
        header('HTTP/1.1 405 Method Not Allowed');
        exit;
    }

    echo json_encode(($resultados));
?>