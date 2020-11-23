<?php
    $curl = curl_init('http://localhost/testphp/base.txt');
    //$curl = curl_init('https://denisfzelaya504.000webhostapp.com/base.txt');

   

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $respuesta = curl_exec($curl);

    //leer meta informacion
    $info = curl_getinfo($curl);

    if($info['http_code'] == 200) {

        //rompe el codigo por los archivos separados por ,
        $datos = explode(',', $respuesta);
        
        echo '<h1>Frutas en mi tienda <h1>';

        foreach($datos as $fruta) {
            echo '->'. $fruta . " <br>";
        }

    } else {
        echo 'Error' . curl_error($curl);
    }
?>