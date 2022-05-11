<?php
function limitarCadena($cadena, $limite, $sufijo){
	if(strlen($cadena) > $limite){
		return substr($cadena, 0, $limite) . $sufijo;
	}
	return $cadena;
}
?>

<?php
require('formatooficio.php');
include("../db/Conexion.php");
include('../clases/Dependencia.php');

$tituloRep="Reporte Dependencias Activas";
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('Landscape','Legal');

$pdf->Cell(335,0,utf8_decode($tituloRep),0,1,'C');
$pdf->Ln(10);

$pdf->SetFillColor(225, 225, 225);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15,6,'ID',1,0,'C',1);
$pdf->Cell(32,6,'Codigo',1,0,'C',1);
$pdf->Cell(116,6,'Dependencia',1,0,'C',1);
$pdf->Cell(102,6,'Descripcion',1,0,'C',1);
$pdf->Cell(40,6,'Fecha',1,0,'C',1);
$pdf->Cell(30,6,utf8_decode('Estado'),1,1,'C',1);
$pdf->SetFont('Arial','',12);

$dependencia = new Dependencia();
$resultado = $dependencia->mostrarDependencia();
    for($i=0; $i<sizeof($resultado); $i++){
        $id = $resultado[$i]->getIdDependencia();
        $codigo = $resultado[$i]->getCodigo();
        $nombre = $resultado[$i]->getNombre();
        $descripcion = $resultado[$i]->getDescripcion();
        $fecha = $resultado[$i]->getFecha();
        $estado = $resultado[$i]->getEstado();
        if ($estado==1) {
            $pdf->Cell(15,10,$id,0,0,'C');
            $pdf->Cell(32,10,limitarCadena(utf8_decode($codigo),27,"..."), 0, 0, 'C');
            $pdf->Cell(116,10,limitarCadena(utf8_decode($nombre),113,"..."), 0, 0, 'C');
            $pdf->Cell(102,10,limitarCadena($descripcion,99,"..."), 0, 0, 'C');    
            $pdf->Cell(40,10,limitarCadena($fecha,30,"..."), 0, 0, 'C');    
            $pdf->Cell(30,10,limitarCadena("Activo",10,"..."), 0, 1, 'C');
        }
    }
$pdf->Output();

?>