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
include('../clases/Usuario.php');

$tituloRep="Reporte Usuarios Activos";
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('Landscape','Legal');

$pdf->Cell(335,0,utf8_decode($tituloRep),0,1,'C');
$pdf->Ln(10);

$pdf->SetFillColor(225, 225, 225);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,6,'ID',1,0,'C',1);
$pdf->Cell(85,6,'Nombres',1,0,'C',1);
$pdf->Cell(85,6,'Apellidos',1,0,'C',1);
$pdf->Cell(60,6,'Usuario',1,0,'C',1);
$pdf->Cell(50,6,'Rol',1,0,'C',1);
$pdf->Cell(40,6,utf8_decode('Estado'),1,1,'C',1);
$pdf->SetFont('Arial','',12);

$usuario = new Usuario();
$usuarioarray = $usuario->obtenerUsuarios();
                for($i=0; $i<sizeof($usuarioarray); $i++){
                 $id = $usuarioarray[$i]->getIdUsuario();
                 $nombre = $usuarioarray[$i]->getNombre();
                 $apellido = $usuarioarray[$i]->getApellido();
                 $usuariov = $usuarioarray[$i]->getNickname();
                 $rol = $usuarioarray[$i]->getRol();
                 $estado = $usuarioarray[$i]->getEstado();
        if ($estado==1) {
            $pdf->Cell(10,10,$id,0,0,'C');
            $pdf->Cell(85,10,limitarCadena(utf8_decode($nombre),80,"..."), 0, 0, 'C');
            $pdf->Cell(85,10,limitarCadena(utf8_decode($apellido),30,"..."), 0, 0, 'C');
            $pdf->Cell(60,10,limitarCadena($usuariov,50,"..."), 0, 0, 'C');    
            $pdf->Cell(50,10,limitarCadena($rol,13,"..."), 0, 0, 'C');    
            $pdf->Cell(40,10,limitarCadena("Activo",50,"..."), 0, 1, 'C');
        }
    }
$pdf->Output();

?>