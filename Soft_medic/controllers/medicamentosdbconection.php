<?php 
    include_once '../config/bd.php';
    $conectionBD = BD::crearInstancia();

    $medicamento['ID'] = "";
    $medicamento['Nombre'] = "";
    $medicamento['RegistroSanitario'] = "";
    $medicamento['Proveedor'] = "";
    $medicamento['FechaVencimiento'] = "";
    $medicamento['Inventario'] = "";

    $id = isset($_POST['id'])?$_POST['id']:'';
    $nombre = isset($_POST['nombre'])?$_POST['nombre']:'';
    $registroSanitario = isset($_POST['registroSanitario'])?$_POST['registroSanitario']:'';
    $proveedor = isset($_POST['proveedor'])?$_POST['proveedor']:'';
    $fechaVencimiento = isset($_POST['fechaVencimiento'])?$_POST['fechaVencimiento']:'';
    $inventario = isset($_POST['inventario'])?$_POST['inventario']:'';
    $accion = isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){
        switch($accion){
            case 'nuevo':
                $sql="INSERT INTO medicamentos (ID, Nombre, RegistroSanitario, Proveedor, FechaVencimiento, Inventario,) 
                VALUES (:id, :nombre, :registroSanitario, :proveedor, :fechaVencimiento, :inventario,)";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':registroSanitario', $registroSanitario);
                $consulta->bindParam(':proveedor', $proveedor);
                $consulta->bindParam(':fechaVencimiento', $fechaVencimiento);
                $consulta->bindParam(':inventario', $inventario);
                $consulta->execute();
            break; 

            case 'actualizar':
                $sql="UPDATE medicamentos SET ID=:id, Nombre=:nombre, RegistroSanitario=:registroSanitario, 
                Proveedor=:proveedor, FechaVencimiento=:fechaVencimiento, Inventario=inventario,
                WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':nombre', $nombre);
                $consulta->bindParam(':registroSanitario', $registroSanitario);
                $consulta->bindParam(':proveedor', $proveedor);
                $consulta->bindParam(':fechaVencimiento', $fechaVencimiento);
                $consulta->bindParam(':inventario', $inventario);
                $consulta->execute();
            break;

            case 'eliminar':
                $sql="DELETE FROM  medicamentos WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
            break; 

            case 'Buscar':
                $sql="SELECT * FROM medicamentos WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $paciente=$consulta->fetch(PDO::FETCH_ASSOC);
            break;
        }
    }
?>
