<?php
    function limitarCadena($cadena, $limite, $sufijo){
	    if(strlen($cadena) > $limite){
		    return substr($cadena, 0, $limite) . $sufijo;
    	}
	    return $cadena;
    }
?>

<?php
    
    include("../db/Conexion.php");
    include("../clases/Observacion.php");
    include("../clases/Empleado.php");
    require('formato.php');

    $observacion = new Observacion();
    $id =$observacion->obtenerIdOb();
    $ob = $observacion->buscarId($id);
    $tipo = $ob->getNobservacion();
    $descripcion = $ob->getDescripcion();
    $nombre =  $ob->getNempleado();
    $apellido = $ob->getAempleado();

    
    $tituloRep="Impresión de Acta";
    
   
    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->Cell(198,0,utf8_decode($tituloRep),0,1,'C');
    $pdf->Ln(10);

    
    $pdf->Cell(190,1,'',0,1,'C',1);
    $pdf->Ln(20);
    $pdf->MultiCell(177,6, utf8_decode('Municipalidad de Gualán') ,0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Documento Administrativo') ,0,'J');
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('En la ciudad de Gualán, departamento de Zacapa, contituido en el edificio que ocupa la municipalidad de Gualán, se efectua el siguiente suscrito por parte de la Direccion Administrativa Financiera Integrada Municipal(DIFAM), haciendo constar que el empleado '.utf8_decode($nombre.' '.$apellido).' ').utf8_decode('se le ingreso lo siguiente: ').utf8_decode($descripcion),0,'J');
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Apeticion de la direccion DIFAM se extiende el siguiente documento el cual contiene vigencia durante todo el proceso laboral del empleado, indicando de esta forma la observacion que se efectuo en dicho momento para la contencion y reguardo del historial observatico que contiene el empleado en base a sus actividades y cambios efectuados') ,0,'J');
    $pdf->Ln(50);
    
    $pdf->SetFont('Arial','',12);
    $pdf->SetFillColor(255); 
    
	$pdf->SetXY(20, 205);
    $pdf->Cell(70, 15, 'ELABORO:', 0, 0, 'C', 1);
	
	$pdf->SetXY(20, 230);
    $pdf->Cell(70, 5, '______________________', 0, 0, 'C', 1);     
    
	$pdf->SetXY(145, 205);
    $pdf->Cell(10, 15, 'SELLA', 0, 0, 'C', 1);
	
	$pdf->SetXY(145, 230);
    $pdf->Cell(10, 5, '_______________________________________', 0, 0, 'C', 1);
	
	$pdf->SetXY(20, 235);
    $pdf->Cell(70, 5, 'Jose Mario Hernandez', 0, 0, 'C', 1);     
	
	$pdf->SetXY(110, 235);
    $pdf->Cell(80, 5, 'Aroldo Leon', 0, 0, 'C', 1);
	
	$pdf->SetXY(20, 240);
    $pdf->Cell(70, 5, 'Encargado de Nominas..', 0, 0, 'C', 1);  

    $pdf->SetXY(110, 240);
    $pdf->Cell(80, 5, 'Jefe Tesoreria', 0, 0, 'C', 1);  
    

   
    $pdf->Output();

?>


