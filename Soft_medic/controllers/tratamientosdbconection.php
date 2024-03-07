<?php
include_once '../config/bd.php';
$conectionBD = BD::crearInstancia();

$tratamiento['ID'] = "";
$tratamiento['Posologia'] = "";
$tratamiento['Medicamento'] = "";
$tratamiento['IdPaciente'] = "";
$tratamiento['IdMedico'] = "";
$tratamiento['FechaConsulta'] = "";

$id = isset($_POST['id']) ? $_POST['id'] : '';
$posologia = isset($_POST['posologia']) ? $_POST['posologia'] : '';
$medicamento = isset($_POST['medicamento']) ? $_POST['medicamento'] : '';
$idPaciente = isset($_POST['idPaciente']) ? $_POST['idPaciente'] : '';
$idMedico = isset($_POST['idMedico']) ? $_POST['idMedico'] : '';
$fechaConsulta = isset($_POST['fechaConsulta']) ? $_POST['fechaConsulta'] : '';
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

if ($accion != '') {
    switch ($accion) {
        case 'nuevo':
            $sql = "INSERT INTO tratamientos (ID, Posologia, Medicamento, IdPaciente, IdMedico, FechaConsulta) 
                VALUES (:id, :posologia, :medicamento, :idPaciente, :idMedico, :fechaConsulta)";
            $consulta = $conectionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->bindParam(':posologia', $posologia);
            $consulta->bindParam(':medicamento', $medicamento);
            $consulta->bindParam(':idPaciente', $idPaciente);
            $consulta->bindParam(':idMedico', $idMedico);
            $consulta->bindParam(':fechaConsulta', $fechaConsulta);
            $consulta->execute();
            break;

        case 'actualizar':
            $sql = "UPDATE tratamientos SET ID=:id, Posologia=:posologia, Medicamento=:medicamento, 
                IdPaciente=:idPaciente, IdMedico=:idMedico, FechaConsulta=fechaConsulta
                WHERE ID=:id";
            $consulta = $conectionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->bindParam(':posologia', $posologia);
            $consulta->bindParam(':medicamento', $medicamento);
            $consulta->bindParam(':idPaciente', $idPaciente);
            $consulta->bindParam(':idMedico', $idMedico);
            $consulta->bindParam(':fechaConsulta', $fechaConsulta);
            $consulta->execute();
            break;

        case 'eliminar':
            $sql = "DELETE FROM  tratamientos WHERE ID=:id";
            $consulta = $conectionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            break;

        case 'Buscar':
            $sql = "SELECT * FROM tratamientos WHERE ID=:id";
            $consulta = $conectionBD->prepare($sql);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            $tratamiento = $consulta->fetch(PDO::FETCH_ASSOC);
            break;
    }
}
