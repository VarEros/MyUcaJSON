<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once('connection.php');
    //$nombres = $_GET["nombres"];
    $my_query = 'select * from coordinador';
    require_once('genericalReturn.php');

    $result->close();
    $mysql->close();
}

?>