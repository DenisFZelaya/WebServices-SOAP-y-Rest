<?php 

//web service lado del servidor
    require_once('lib/nusoap.php');

    //crear funcion para mostrar los planetas
    function muestraPlanetas() {
        $planetas = 'Segun la deficion mencionada, el Sistema Solar consta de un pijo de planetas';
        return $planetas;
    }

    //crear funcion muestraImagen
    function muestraImagen($categoria) {
        if($categoria == 'espacio') {
            $imagen = './img/imagen.png';
        } else {
            $imagen = './img/imagen2.png';
        }
        $resultado = '<img src="'.$imagen.'"></img>';

        return $resultado;
    }

    if(!isset($HTTP_RAW_POST_DATA)) {
        $HTTP_RAW_POST_DATA = file_get_contents('php://input');
    }

    $server = new soap_server();
    //registrar las funciones que estaran disponibles

    //definir el formato que utilizara nuestro webservice
    $server->configureWSDL('Info Blog', 'urn:infoBlog');

    //$server->register('muestraPlanetas'); //forma normal
    //$server->register('muestraImagen'); //forma normal sin parametros

    //registrar funciones con parametros
    $server->register(
        'muestraPlanetas',
        array(), //parametro
        array('return' => 'xsd:string'), //respuesta
        'urn:infoBlog', //namespace
        'urn:infoBlog#muestraPlanetas', //accion
        'rpc', //estilo
        'encoded', //uso
        'Muestra el contenido para el blog' //descripcion
    );

    $server->register(
        'muestraImagen',
        array('categoria' => 'xsd:string'), //parametro
        array('return' => 'xsd:string'), //respuesta
        'urn:infoBlog', //namespace
        'urn:infoBlog#muestraImagen', //accion
        'rpc', //estilo
        'encoded', //uso
        'Muestra una imagen variable' //descripcion
    );

    //no se para que sirve jajaj
    $server->service($HTTP_RAW_POST_DATA);
?>