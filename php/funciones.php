<?php
    function validarCedula($cedula, $actividad){
         if (strlen($cedula) < 8  || strlen($cedula) > 10 || is_numeric($cedula) === false || strpos($cedula, ' ') === true) {
            return true;
         }else{
             if(strlen($actividad) <= 2){
                return true;
             }else{
                return false;
             }
         }
     }

    function verificaCedula($cedula){
        include 'cn.php';
        $verificar_cedula = mysqli_query($conexion, "SELECT PK_Cedula FROM TBL_Usuarios WHERE PK_Cedula = '$cedula'");
	    $rows = mysqli_num_rows($verificar_cedula);
        mysqli_close($conexion);

	    if ($rows > 0) {    
            return true;
	    }else{
            return false;
        }
    }

    function registraNew($cedula, $nombre, $apellido, $email, $carrera, $semestre){
        include 'cn.php';
        $sql = "INSERT INTO TBL_Usuarios(PK_Cedula, Nombre, Apellido, Gmail, Carrera, Semestre)
                VALUES('$cedula', '$nombre', '$apellido', '$email', '$carrera', '$semestre')";
        $resultado = $conexion->query($sql);
        mysqli_close($conexion);

        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    function registrarIngreso($cedula, $actividad){
        include 'cn.php';
        $fechaIngreso = date("Y-m-d H-i-s");

        $sql = "INSERT INTO TBL_Asistencia(FK_Cedula, Actividad, Fecha_Ingreso)
                VALUES('$cedula', '$actividad', '$fechaIngreso')";
        $resultado = $conexion->query($sql);
        mysqli_close($conexion);

        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    function VerificarInput($nombre, $apellido, $email, $carrera, $semestre){
        if(strlen($nombre) <= 2 || strlen($apellido) <= 2 || strlen($email) <= 2 || strlen($carrera) <= 2 || strlen($semestre) < 1){
            return true;
         }else{
            return false;
         }
    }

 ?>