<?php 
    include_once '../config/bd.php';
    $conectionBD = BD::crearInstancia();

    $consultorio['ID'] = "";
    $consultorio['Nombre'] = "";
    $consultorio['Direccion'] = "";
    $consultorio['Telefono'] = "";
    $consultorio['Mail'] = "";

    $id = isset($_POST['id'])?$_POST['id']:'';
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
    $direccion = isset($_POST['direccion'])?$_POST['direccion']:'';
    $telefono = isset($_POST['telefono'])?$_POST['telefono']:'';
    $mail = isset($_POST['mail'])?$_POST['mail']:'';
    $accion = isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){
        switch($accion){
            case 'nuevo':
                $sql="INSERT INTO consultorios (ID, Nombre, Direccion, Telefono, Mail) 
                VALUES (:id, :nombre, :direccion, :telefono, :mail)";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':direccion', $direccion);
                $consulta->bindParam(':telefono', $telefono);
                $consulta->bindParam(':mail', $mail);
                $consulta->execute();
            break; 

            case 'actualizar':
                $sql="UPDATE consultorios SET ID=:id, Nombre=:nombre, Direccion=:direccion, Telefono=:telefono, Mail=mail
                WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':direccion', $direccion);
                $consulta->bindParam(':telefono', $telefono);
                $consulta->bindParam(':mail', $mail);
                $consulta->execute();
            break;

            case 'eliminar':
                $sql="DELETE FROM  consultorios WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
            break; 

            case 'Buscar':
                $sql="SELECT * FROM consultorios WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $consultorio=$consulta->fetch(PDO::FETCH_ASSOC);
            break;
        }
    }
?>