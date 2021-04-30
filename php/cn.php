<?php
   // $server="localhost";
   // $usurname="id13382060_ivan";
   // $password="RPGH]Io/0SLxPg2S";
   // $db='id13382060_dbs_notasu';

    $server="localhost";
    $usurname="root";
    $password="";
    $db='DBS_Control';

    $conexion = mysqli_connect($server ,$usurname , $password ,$db );
   
    if (!$conexion) { 
        echo "Error Conexion";
     }else{
        // echo 'Conexion exitosa';
     }


?>