<?php
session_start();
//include('fpdf.php');
include("../Authentication/Db_connection.php");
require('mc_table.php');
$pdf = new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial',"",16);
//$pdf->Image('',10,10,30,30);
$pdf->SETXY(100,23);
$pdf->Cell(50,5,'INVOICE',0,0);
$pdf->Cell(50,10,'Atharva');

//$pdf->Cell(90,10, $fname,$lname);

?>
