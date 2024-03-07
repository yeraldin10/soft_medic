<?php 
    include_once '../config/bd.php';
    $conectionBD = BD::crearInstancia();

    $pedido['ID'] = "";
    $pedido['IdMedicamento'] = "";
    $pedido['Cantidad'] = "";

    $id = isset($_POST['id'])?$_POST['id']:'';
    $idMedicamento = isset($_POST['idMEdicamento'])?$_POST['idMedicamento']:'';
    $cantidad = isset($_POST['cantidad'])?$_POST['cantidad']:'';
    $accion = isset($_POST['accion'])?$_POST['accion']:'';

    if($accion!=''){
        switch($accion){
            case 'nuevo':
                $sql="INSERT INTO pedidos (ID, IdMedicamento, Cantidad)
                VALUES (:id, :idMedicamento, :cantidad)";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':idMedicamento', $idMedicamento);
                $consulta->bindParam(':cantidad', $cantidad);
                $consulta->execute();
            break; 

            case 'actualizar':
                $sql="UPDATE pedidos SET ID=:id, IdMedicamento=:idMedicamento, Cantidad=:cantidad
                WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->bindParam(':idMedicamento', $idMedicamento);
                $consulta->bindParam(':cantidad', $cantidad);
                $consulta->execute();
            break;

            case 'eliminar':
                $sql="DELETE FROM  pedidos WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
            break; 

            case 'Buscar':
                $sql="SELECT * FROM pedidos WHERE ID=:id";
                $consulta=$conectionBD->prepare($sql);
                $consulta->bindParam(':id', $id);
                $consulta->execute();
                $pedido=$consulta->fetch(PDO::FETCH_ASSOC);
            break;
        }
    }
?>
