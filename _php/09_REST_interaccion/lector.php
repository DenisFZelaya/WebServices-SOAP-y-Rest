<?php
  $opts = array(
    'ssl' => array('ciphers'=>'RC4-SHA')
  );

  $objSoapClient = new SoapClient(
    'https://example.com/?wsdl',
    array ( "encoding"=>"ISO-8859-1",
    'stream_context' => stream_context_create($opts)
    // your options
    );
?>