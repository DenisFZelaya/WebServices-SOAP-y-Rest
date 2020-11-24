<?php
//Lado del cliente
require_once 'lib/nusoap.php';

//crear un cliente que se conecte al webservice
$cliente = new nusoap_client('http://localhost/webservices/webservicesoapmysql/webservice_SOAP.php');

//Llamar a la funcion del webservice_SOAP.php
$libros = $cliente->call('muestraLibros');

//mostrar los resultados
echo "<h1>LIBROS</h1>";
?> 

<pre><?php var_dump($libros) ?></pre>
<?php

//Imprimir datos en pantalla
for ($i=0; $i <sizeof($libros) ; $i++) { 
    echo 'Id: '.  $libros[$i][0] .'<br>';
    echo 'Libro: '. $libros[$i][1] .'<br>';
    echo 'Autor: '. $libros[$i][2] .'<br>';
    echo '<br>';
}

?>