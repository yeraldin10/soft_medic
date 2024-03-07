<?php 
    include_once '../config/bd.php';
    $conectionBD = BD::crearInstancia();

    $cita['ID'] = "";
    $cita['Fecha'] = "";
    $cita['Hora'] = "";
    $cita['IdPaciente'] = "";
    $cita['IdConsultorio'] = "";
    $cita['IdEmpleado'] = "";

    $id = isset($_POST['id'])?$_POST['id']:'';
    $nombre = isset($_POST['fecha'])?$_POST['fecha']:'';
    $apellidos = isset($_POST['hora'])?$_POST['hora']:'';
    $fechaNacimiento = isset($_POST['idPaciente'])?$_POST['idPaciente']:'';
    $direccion = isset($_POST['idConsultorio'])?$_POST['idConsultorio']:'';
    $mail = isset($_POST['idEmpleado'])?$_POST['idEmpleado']:'';
    $accion = isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){
        switch($accion){
            case 'nuevo':
                $sql="INSERT INTO citas (ID, Fecha, Hora, IdPaciente, IdConsultorio, IdEmpleado) 
                VALUES (:id, :fecha, :hora, :idPaciente, :idConsultorio, :idEmpleado)";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':fecha', $fecha);
                $consulta->bindParam(':hora', $hora);
                $consulta->bindParam(':idPaciente', $idPaciente);
                $consulta->bindParam(':idConsultorio', $idConsultorio);
                $consulta->bindParam(':idEmpleado', $idEmpleado);
                $consulta->execute();
            break; 

            case 'actualizar':
                $sql="UPDATE citas SET ID=:id, Fecha=:fecha, Hora=:hora, 
                IdPaciente=:idPaciente, IdConsultorio=:idConsultorio, IdEmpleado=idEmpleado
                WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':fecha', $fecha);
                $consulta->bindParam(':hora', $hora);
                $consulta->bindParam(':idPaciente', $idPaciente);
                $consulta->bindParam(':idConsultorio', $idConsultorio);
                $consulta->bindParam(':idEmpleado', $idEmpleado);
                $consulta->execute();
            break;

            case 'eliminar':
                $sql="DELETE FROM  citas WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
            break; 

            case 'Buscar':
                $sql="SELECT * FROM citas WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $cita=$consulta->fetch(PDO::FETCH_ASSOC);
            break;
        }
    }
?>
