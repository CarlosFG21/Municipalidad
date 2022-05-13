<?php

    require('formato.php');
    //jalamos los datos que vamos a mostrar en este reporte
    include("../db/Conexion.php");
    require('../clases/Observacion.php');
    include("../clases/Planilla.php");

    $id = $_GET['invoice'];

    $tituloRep="Impresión de Nomina";

    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('PORTRAIT','Legal');

    $pdf->Cell(198,0,utf8_decode($tituloRep),0,1,'C');
    $pdf->Ln(10);

    $pdf->Cell(190,1,'',0,1,'C',1);
    $pdf->Ln(8);

    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Datos Personales') ,0,'J');
    $pdf->Ln(4);

    //jalamos los datos del empleado para
    $planilla = new Planilla();
    $resultado =  $planilla->nominaEmpleadoPlanilla($id);
    $nombre = $resultado->getNombrep();
    $apellido = $resultado->getApellidop();
    $completo = $nombre." ".$apellido;
    $dpi = $resultado->getDpip();
    $nit =  $resultado->getNitp();
    $telefono =  $resultado->getTelefonop();
    $municipio = $resultado->getNombremup();
    $departamento = $resultado->getNombreDept();
    $direccion = $municipio.",".$departamento;
    $fechan = $resultado->getFecha_nacimientop();
    $figss= $resultado->getNoigssp();
    $cuenta = $resultado->getNocuentap();
    $expediente = $resultado->getNoexpedientep();
    $renglon = $resultado->getidRenglonp();
    $dependencia = $resultado->getNombredep();
    $cargo =  $resultado->getNombrecarp();
    $fechaingreso = $resultado->getFechaIngreso();
    $forma = $resultado->getFopagop();
    $salario = $resultado->getSalario();
    $bonificacion = $resultado->getBonip();
    $otro = $resultado->getOtrosp();
    $igss = $resultado->getIgssp();
    $estado = $resultado->getEstado();
    $plan = $resultado->getPlanp();
    $fianza = $resultado->getFianzap();
    $judicial = $resultado->getJudicialp();
    $timbre =  $resultado->getTimbrep();
    $dietas = $resultado->getDietapp();
    $salarioisr = $resultado->getSalario_isrp();
    $isrdieta = $resultado->getDieta_isrp();
    $ingresot =  $resultado->getIngresot();
    $totald = $resultado->getTotald();
    $sueldol =  $resultado->getSarioreci();

    //Nombres
    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(2);
    $pdf->Cell(20,6, utf8_decode('Nombre: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(28,15, utf8_decode($nombre." ".$apellido),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(83,6, utf8_decode('Telefono: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(7,15,utf8_decode($telefono),0,0,'C',0); 
    $pdf->Ln(10);
    //DPI
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(11,8, utf8_decode('Dpi: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(19,15,utf8_decode($dpi),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(99,8, utf8_decode('No igss: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(7,15,utf8_decode($figss),0,0,'C',0);
    $pdf->Ln(10);
    //Nit
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(10,8, utf8_decode('Nit: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(17,17,utf8_decode($nit),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(128,8, utf8_decode('No. Cuenta Bancaria: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(-44,17,utf8_decode($cuenta),0,0,'C',0);
    $pdf->Ln(10);
    //Fecha Nacimiento
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(41,8, utf8_decode('Fecha Nacimiento: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(-32,17,utf8_decode($fechan),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(119,8, utf8_decode('Estado: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    if ($estado==1) {
        $pdf->Cell(8,17,utf8_decode('Activo'),0,0,'C',0);    
    }else{
        $pdf->Cell(8,17,utf8_decode('Inactivo'),0,0,'C',0);
    }
    $pdf->Ln(18);
    //Linea intermedia
    $pdf->Cell(190,1,'',0,1,'C',1);
    $pdf->Ln(8);
    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Datos Laborales') ,0,'J');
    $pdf->Ln(6);
    //Renglon
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(21,8, utf8_decode('Renglon: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(5,17,utf8_decode($renglon),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(112,8, utf8_decode('Dependecia: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(15,17,utf8_decode($dependencia),0,0,'C',0);
    $pdf->Ln(11);
    //Cargo
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(16,8, utf8_decode('Cargo: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,17,utf8_decode($cargo),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(117,8,utf8_decode('Fecha ingreso: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(-5,17,utf8_decode($fechaingreso),0,0,'C',0);
    $pdf->Ln(11); 
    //forma de pago
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(34,8, utf8_decode('Forma de pago: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(-27,17,utf8_decode($forma),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(121,8,utf8_decode('Salario: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(18,17,utf8_decode($salario),0,0,'C',0);
    $pdf->Ln(11);
    //Bonificacion
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(29,8, utf8_decode('Bonificación: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(-20,17,utf8_decode($bonificacion),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(116,8,utf8_decode('Otros: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(16,17,utf8_decode($otro),0,0,'C',0);
    $pdf->Ln(11); 
    //IGSS
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(12,8, utf8_decode('Igss: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(15,17,utf8_decode($igss),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(96,8,utf8_decode('Plan: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(25,17,utf8_decode($plan),0,0,'C',0);
    $pdf->Ln(11); 
    ///Fianza
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(17,8, utf8_decode('Fianza: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(6,17,utf8_decode($fianza),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(106,8,utf8_decode('Judicial: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(10,17,utf8_decode($judicial),0,0,'C',0);
    $pdf->Ln(11); 
    //Tibre
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(18,8, utf8_decode('Timbre: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(4,17,utf8_decode($timbre),0,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(114,8,utf8_decode('Isr Salario: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(-5,17,utf8_decode($salarioisr),0,0,'C',0);
    $pdf->Ln(11); 
    //deitas
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(25,8, utf8_decode('Isr Dietas: '),0,0,'R',0);
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(4,17,utf8_decode($dietas),0,0,'C',0);
    $pdf->Ln(14); 
    $pdf->Cell(190,1,'',0,1,'C',1);
    $pdf->Ln(12);
    //observacion
    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Observaciones') ,0,'J');
    $pdf->Ln(7);
    $pdf->SetFillColor(225, 225, 225);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,6,utf8_decode('Descripción'),1,0,'C',1);
    $pdf->Ln(12);
    //descripcion
    $pdf->SetFont('Arial','',12);
    $observacion = new Observacion();
    $resultado =  $observacion->obtenerObservacionEmpleado($id);
    for($i=0; $i<sizeof($resultado); $i++){
        $descripcion = $resultado[$i]->getDescripcion();
        $pdf->Cell(1,2,utf8_decode($descripcion),0,0,'L',0);
        $pdf->Ln(8);
    }
    $pdf->Output();

    ?>