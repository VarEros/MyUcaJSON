<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once 'connection.php';
        $id = $_POST["id"];
        $nombre = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $fechaNac = $_POST["fechaNac"];
        $titulo = $_POST["titulo"];
        $email = $_POST["email"];
        $facultad = $_POST["facultad"];
        $my_query = "update coordinador set nombres = '".$nombres."', apellidos = '".$apellidos."', fechaNac = '".$fechaNac."', titulo = '".$titulo."', email = '".$email."', facultad = '".$facultad."' where id = ".$id."";
        $result = $mysql -> query($my_query);
        if($result == true){
            echo "Coordinador editado satisfactoriamente...";
        }else{
            echo "Error al editar el coordinador...";
        }
    }else{
        echo "Error desconocido";
    }
?>