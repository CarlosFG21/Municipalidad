<?php

    require('formato.php');
    
    $tituloRep="Impresión de Nomina";
    
   
    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->Cell(198,0,utf8_decode($tituloRep),0,1,'C');
    $pdf->Ln(10);

    $pdf->Cell(190,1,'',0,1,'C',1);
    $pdf->Ln(8);

    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Datos Personales') ,0,'J');
    $pdf->Ln(8);

    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Nombre: Carlos Daniel Franco Perez').utf8_decode("          ").utf8_decode('Dpi: 3336036521904').utf8_decode("          ").utf8_decode('Nit: 1587855-4') ,0,'J');
    $pdf->Ln(8);

    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Fecha nacimiento:20/09/1998').utf8_decode("          ").utf8_decode('Celular: 45786521').utf8_decode("          ").utf8_decode('No. igss: 15789634523123') ,0,'J');
    $pdf->Ln(8);

    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('No.Cuenta bancaria: 1563248795245').utf8_decode("          ").utf8_decode('Estado: Activo').utf8_decode("          "),0,'J');
    $pdf->Ln(12);

    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Datos Laborales') ,0,'J');
    $pdf->Ln(8);

    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Renglon: 011').utf8_decode("      ").utf8_decode('Dependencia: Direccion Administrativa Financiera Integral Municipal'),0,'J');
    $pdf->Ln(8);

    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Cargo: Encargado de nominas').utf8_decode("   ").utf8_decode('Fecha ingreos: 28-21-2021').utf8_decode("    ").utf8_decode('Forma de pago:Acreditamiento'),0,'J');
    $pdf->Ln(8);

    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Salario: 15000').utf8_decode("   ").utf8_decode('Bonificacion: 250').utf8_decode("    ").utf8_decode('Otros:10000').utf8_decode('   ').utf8_decode('Igss:10000').utf8_decode('  ').utf8_decode('Plan:10000').utf8_decode('  ').utf8_decode('Fianza:2300'),0,'J'); 
    $pdf->Ln(8);

    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode('Judicial: 15000').utf8_decode("   ").utf8_decode('Timbre: 20050').utf8_decode("    ").utf8_decode('Isa salario:10000').utf8_decode('   ').utf8_decode('Isr dietas:10000').utf8_decode('  '),0,'J'); 
    $pdf->Ln(12);

    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Observaciones') ,0,'J');
    $pdf->Ln(8);

    $pdf->Output();

    ?>