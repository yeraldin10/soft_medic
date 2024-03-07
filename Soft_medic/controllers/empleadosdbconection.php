<?php 
    include_once '../config/bd.php';
    $conectionBD = BD::crearInstancia();

    $empleado['ID'] = "";
    $empleado['Nombre'] = "";
    $empleado['Apellidos'] = "";
    $empleado['FechaNacimiento'] = "";
    $empleado['Direccion'] = "";
    $empleado['Mail'] = "";
    $empleado['Telefono'] = "";
    $empleado['Cargo'] = "";

    $id = isset($_POST['id'])?$_POST['id']:'';
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
    $apellidos = isset($_POST['apellidos'])?$_POST['apellidos']:'';
    $fechaNacimiento = isset($_POST['fechaNacimiento'])?$_POST['fechaNacimiento']:'';
    $direccion = isset($_POST['direccion'])?$_POST['direccion']:'';
    $mail = isset($_POST['mail'])?$_POST['mail']:'';
    $telefono = isset($_POST['telefono'])?$_POST['telefono']:'';
    $cargo = isset($_POST['cargo'])?$_POST['cargo']:'';
    $accion = isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){
        switch($accion){
            case 'nuevo':
                $sql="INSERT INTO empleados (ID, Nombre, Apellidos, FechaNacimiento, Direccion, Mail, Telefono, Cargo) 
                VALUES (:id, :nombre, :apellidos, :fechaNacimiento, :direccion, :mail, :telefono, :cargo)";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':apellidos', $apellidos);
                $consulta->bindParam(':fechaNacimiento', $fechaNacimiento);
                $consulta->bindParam(':direccion', $direccion);
                $consulta->bindParam(':mail', $mail);
                $consulta->bindParam(':telefono', $telefono);
                $consulta->bindParam(':cargo', $cargo);
                $consulta->execute();
            break; 

            case 'actualizar':
                $sql="UPDATE empleados SET ID=:id, Nombre=:nombre, Apellidos=:apellidos, 
                FechaNacimiento=:fechaNacimiento, Direccion=:direccion, Mail=:mail, Telefono=:telefono, Cargo=:cargo
                WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':apellidos', $apellidos);
                $consulta->bindParam(':fechaNacimiento', $fechaNacimiento);
                $consulta->bindParam(':direccion', $direccion);
                $consulta->bindParam(':mail', $mail);
                $consulta->bindParam(':telefono', $telefono);
                $consulta->bindParam(':cargo', $cargo);
                $consulta->execute();
            break;

            case 'eliminar':
                $sql="DELETE FROM  empleados WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
            break; 

            case 'Buscar':
                $sql="SELECT * FROM empleados WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $empleado=$consulta->fetch(PDO::FETCH_ASSOC);
            break;
        }
    }
?>
