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
include('../clases/Empleado.php');

$tituloRep="Reporte Empleados Inactivos";
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('Landscape','Legal');

$pdf->Cell(335,0,utf8_decode($tituloRep),0,1,'C');
$pdf->Ln(10);

$pdf->SetFillColor(225, 225, 225);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,6,'ID',1,0,'C',1);
$pdf->Cell(75,6,'Empleado',1,0,'C',1);
$pdf->Cell(70,6,'Direccion',1,0,'C',1);
$pdf->Cell(24,6,'Telefono',1,0,'C',1);
$pdf->Cell(32,6,utf8_decode('DPI'),1,0,'C',1);
$pdf->Cell(85,6,utf8_decode('Cargo'),1,0,'C',1);
$pdf->Cell(30,6,utf8_decode('Cuenta'),1,1,'C',1);
$pdf->SetFont('Arial','',12);

    $empleado = new Empleado();
    $empleadoArray = $empleado->mostraEmpleados();
                
    for($i=0; $i<sizeof($empleadoArray);$i++){
        $id = $empleadoArray[$i]->getidEmpleado();
        $empleado = $empleadoArray[$i]->getNombre()." ".$empleadoArray[$i]->getApellido();
        $direccion = $empleadoArray[$i]->getNombremu()." ".$empleadoArray[$i]->getNombred();
        $Dpi = $empleadoArray[$i]->getDpi();
        $telefono = $empleadoArray[$i]->getTelefono();
        $cargo=$empleadoArray[$i]->getNombrecar();
        $cuenta= $empleadoArray[$i]->getNocuenta();
        $estado = $empleadoArray[$i]->getEstado();
        if ($estado==0) {
            $pdf->Cell(10,10,$id,0,0,'C');
            $pdf->Cell(75,10,limitarCadena(utf8_decode($empleado),80,"..."), 0, 0, 'C');
            $pdf->Cell(70,10,limitarCadena(utf8_decode($direccion),30,"..."), 0, 0, 'C');
            $pdf->Cell(24,10,limitarCadena($telefono,50,"..."), 0, 0, 'C');    
            $pdf->Cell(32,10,limitarCadena($Dpi,13,"..."), 0, 0, 'C');    
            $pdf->Cell(85,10,limitarCadena($cargo,50,"..."), 0, 0, 'C');    
            $pdf->Cell(30,10,limitarCadena($cuenta,10,"..."), 0, 1, 'C');    
        }
    }
$pdf->Output();

?>