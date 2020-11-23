<?php
//Lado del cliente


    require_once 'lib/nusoap.php';

//crear un cliente que se conecte al webservice
//$cliente = new nusoap_client('http://localhost/webservices/webservicesoap1/webservice_SOAP.php');
$cliente = new nusoap_client('http://localhost/webservices/webservicesoap1/webservice_SOAP.php?wsdl&debug=0', 'wsdl'); //envia valores por el url

//Llamar a la funcion del webservice_SOAP.php
$planetas = $cliente->call('muestraPlanetas');
$imagen = $cliente->call('muestraImagen', array('categoria' => 'espacio'));

//mostrar los resultados
echo "<h2>LOS PLANETAS</h2>";
echo "<h2>". $planetas . "</h2>";
echo $imagen;


?>