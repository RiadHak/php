<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbName = "databank_php";
    $mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbName);
    if($mysqli -> connect_errno){
      echo "connection failed";
      exit();
    }
    else{
      echo "connected successfully <br>";

    }

  
?>