<?php 

//web service lado del servidor
    require_once('lib/nusoap.php');

    //crear funcion para mostrar los planetas
    function muestraLibros() {
        require_once('db.php');
        $sql = "SELECT * from libros";
        $res_sql = $conn->query($sql);
        $respuesta = $res_sql->fetch_all();
        return $respuesta;
    }

    if(!isset($HTTP_RAW_POST_DATA)) {
        $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    }

    $server = new soap_server();
    $server->register('muestraLibros'); //forma normal

    //no se para que sirve jajaj
    $server->service($HTTP_RAW_POST_DATA);

    ?>