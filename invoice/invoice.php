<?php
session_start();
include("../Admin/Db_connection.php");
//require('mc_table.php');
//$pdf=new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial',"",15);
$pdf->Image('logo.jpeg',10,10,30,30); // logo will be added 
$pdf->SetXY(100,23);
$pdf->Cell(50,5,'INVOICE',0,0);

$pdf->SetXY(10,40);
$pdf->Cell(60,5,'INVOICE NUMBER: '.$cusinvoice,0,0);
$pdf->SetXY(150,40);
$pdf->Cell(20,5,'Date:'.date('d/m/Y'),0,0);
$pdf->SetXY(10,50);
$pdf->Cell(120,5,'Customer Name'.$firstname,0,0);
$pdf->SetXY(10,60);
$pdf->Cell(120,5,'Customer Email-id: '.$peremail);
$n=77;



?>