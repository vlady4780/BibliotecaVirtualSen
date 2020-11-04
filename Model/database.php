<?php

class Connect{
    public static function connection(){
        $usuario = 'root';
        $contraseña = '';
        $mbd = new PDO('mysql:host=localhost;dbname=bw_pim', $usuario, $contraseña);
        $mbd = null;
    }
   
} 

?>
