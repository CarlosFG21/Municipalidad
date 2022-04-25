<?php

    require('formato.php');
    
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
    //Nombres
    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(2);
    $pdf->MultiCell(177,6, utf8_decode('Nombre: ').utf8_decode('                                                                            ').utf8_decode('Telefono: '),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("               ").utf8_decode('Carlos Daniel Franco Perez').utf8_decode('                                              ').utf8_decode('54639120'),0,'J');
    $pdf->Ln(1);
    //DPI
    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(2);
    $pdf->MultiCell(177,6, utf8_decode('Dpi: ').utf8_decode('                                                                                    ').utf8_decode('No igss: '),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("          ").utf8_decode('33639123585888').utf8_decode('                                                                  ').utf8_decode('15789634523123') ,0,'J');
    $pdf->Ln(1);
    //Nit
    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(2);
    $pdf->MultiCell(177,6, utf8_decode('Nit: ').utf8_decode('                                                                                     ').utf8_decode('No. Cuenta bancaria: '),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("          ").utf8_decode('1587855-4').utf8_decode("                                                                             ").utf8_decode('1563248795245') ,0,'J');
    $pdf->Ln(1);
    //Fecha Nacimiento
    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(2);
    $pdf->MultiCell(177,6, utf8_decode('Fecha Nacimiento: ').utf8_decode('                                                            ').utf8_decode('Estado:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("                             ").utf8_decode('20/09/1998').utf8_decode('                                                            ').utf8_decode('Activo') ,0,'J');
    $pdf->Ln(4);
    //Linea intermedia
    $pdf->Cell(190,1,'',0,1,'C',1);
    $pdf->Ln(8);
    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Datos Laborales') ,0,'J');
    $pdf->Ln(8);
    //Renglon
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Renglon: ').utf8_decode("                                                                           ").utf8_decode('Dependencia:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("              ").utf8_decode('011').utf8_decode('                                                                                       ').utf8_decode('Consejo Municipal') ,0,'J');
    $pdf->Ln(1);
    //Cargo
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Cargo: ').utf8_decode("                                                                               ").utf8_decode('Fecha ingreso:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("             ").utf8_decode('Encargado de nominas').utf8_decode('                                                          ').utf8_decode('22-05-2021') ,0,'J');
    $pdf->Ln(1); 
    //forma de pago
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Forma de pago: ').utf8_decode("                                                                ").utf8_decode('Salario:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("             ").utf8_decode('Acreditamiento').utf8_decode('                                                                          ').utf8_decode('15000') ,0,'J');
    $pdf->Ln(1); 
    //Bonificacion
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Bonificación: ').utf8_decode("                                                                    ").utf8_decode('Otros:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("             ").utf8_decode('250').utf8_decode('                                                                                           ').utf8_decode('15000') ,0,'J');
    $pdf->Ln(1); 
    //IGSS
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Igss: ').utf8_decode("                                                                                   ").utf8_decode('Plan:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("             ").utf8_decode('120').utf8_decode('                                                                                          ').utf8_decode('15000') ,0,'J');
    $pdf->Ln(1); 
    ///Fianza
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Fianza: ').utf8_decode("                                                                               ").utf8_decode('Fianza:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("             ").utf8_decode('120').utf8_decode('                                                                                          ').utf8_decode('15000') ,0,'J');
    $pdf->Ln(1); 
    //Tibre
    $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Timbre: ').utf8_decode("                                                                               ").utf8_decode('Isr salario:'),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("             ").utf8_decode('120').utf8_decode('                                                                                          ').utf8_decode('15000') ,0,'J');
    $pdf->Ln(1); 
   //deitas
   $pdf->SetFont('Arial','B',12);
    $pdf->MultiCell(177,6, utf8_decode('Timbre: '),0,'J');
    $pdf->SetFont('Arial','',12);
    $pdf->MultiCell(177,6, utf8_decode("             ").utf8_decode('120') ,0,'J');
    $pdf->Ln(1); 
    $pdf->Cell(190,1,'',0,1,'C',1);
    $pdf->Ln(8);

    $pdf->SetFont('Arial','B',15);
    $pdf->MultiCell(177,6, utf8_decode('Observaciones') ,0,'J');
    $pdf->Ln(7);

    $pdf->SetFillColor(225, 225, 225);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(190,6,utf8_decode('Descripción'),1,0,'C',1);
    
    $pdf->SetFont('Arial','',12);

    $pdf->Output();

    ?>