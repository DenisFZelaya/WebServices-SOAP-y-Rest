<?php

  //Coneccion a la db
  $conn = new mysqli('localhost', 'root', 'root', 'phpws');
  //$conn = new mysqli('localhost', 'root', '', 'mypymes');

  if($conn ->connect_error){
    echo $conn->connect_error;
  }

  $conn->set_charset('utf-8');

?>
