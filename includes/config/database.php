<?php
    function conectarDB(){
        $db=mysqli_connect('localhost','root','','sisma');
        if(!$db){
            echo "No se conecto";
            exit;
        }
        return $db;
    }

?>