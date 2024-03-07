<?php 
    include_once '../config/bd.php';
    $conectionBD = BD::crearInstancia();

    $paciente['ID'] = "";
    $paciente['Nombre'] = "";
    $paciente['Apellidos'] = "";
    $paciente['FechaNacimiento'] = "";
    $paciente['Direccion'] = "";
    $paciente['Mail'] = "";
    $paciente['Telefono'] = "";

    $id = isset($_POST['id'])?$_POST['id']:'';
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
    $apellidos = isset($_POST['apellidos'])?$_POST['apellidos']:'';
    $fechaNacimiento = isset($_POST['fechaNacimiento'])?$_POST['fechaNacimiento']:'';
    $direccion = isset($_POST['direccion'])?$_POST['direccion']:'';
    $mail = isset($_POST['mail'])?$_POST['mail']:'';
    $telefono = isset($_POST['telefono'])?$_POST['telefono']:'';
    $accion = isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){
        switch($accion){
            case 'nuevo':
                $sql="INSERT INTO pacientes (ID, Nombre, Apellidos, FechaNacimiento, Direccion, Mail, Telefono) 
                VALUES (:id, :nombre, :apellidos, :fechaNacimiento, :direccion, :mail, :telefono)";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':apellidos', $apellidos);
                $consulta->bindParam(':fechaNacimiento', $fechaNacimiento);
                $consulta->bindParam(':direccion', $direccion);
                $consulta->bindParam(':mail', $mail);
                $consulta->bindParam(':telefono', $telefono);
                $consulta->execute();
            break; 

            case 'actualizar':
                $sql="UPDATE pacientes SET ID=:id, Nombre=:nombre, Apellidos=:apellidos, 
                FechaNacimiento=:fechaNacimiento, Direccion=:direccion, Mail=mail, Telefono=:telefono
                WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':apellidos', $apellidos);
                $consulta->bindParam(':fechaNacimiento', $fechaNacimiento);
                $consulta->bindParam(':direccion', $direccion);
                $consulta->bindParam(':mail', $mail);
                $consulta->bindParam(':telefono', $telefono);
                $consulta->execute();
            break;

            case 'eliminar':
                $sql="DELETE FROM  pacientes WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
            break; 

            case 'Buscar':
                $sql="SELECT * FROM pacientes WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $paciente=$consulta->fetch(PDO::FETCH_ASSOC);
            break;
        }
    }
?>
