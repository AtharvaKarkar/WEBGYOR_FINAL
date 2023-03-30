
<?php
//require('fpdf.php');
include("../Authentication/Db_connection.php");
require('mc_table.php');
// create a new PDF object
$pdf = new FPDF();

// add a new page
$pdf->AddPage();

// set font
$pdf->SetFont('Arial', 'B', 16);

// set heading
$pdf->Cell(80);
$pdf->Cell(30, 10, 'Invoice', 0, 0, 'C');
$pdf->Ln(20);

// set customer information
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 10, 'Customer:', 0);
$pdf->Cell(60, 10, 'Atharva Karkar', 0);
$pdf->Ln(10);
$pdf->Cell(30, 10, '', 0);
$pdf->Cell(60, 10, 'Bmcc', 0);
$pdf->Ln(10);
$pdf->Cell(30, 10, '', 0);
$pdf->Cell(60, 10, 'FC Road, Pune', 0);
$pdf->Ln(20);

// set invoice details
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 10, 'Package', 1);
$pdf->Cell(50,9,'Package Price',1);
$pdf->Cell(40, 10, 'Facility', 1);
$pdf->Cell(40, 10, 'Price', 1);
$pdf->Cell(40, 10, 'Total', 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Pro', 1);
$pdf->Cell(40, 10, 'Social Media Mgmt', 1);
$pdf->Cell(40, 10, '6999', 1);
$pdf->Cell(40, 10, '6999', 1);
$pdf->Ln(10);
$pdf->Cell(50, 10, 'Standard', 1);
$pdf->Cell(40, 10, 'SEO', 1);
$pdf->Cell(40, 10, '999', 1);
$pdf->Cell(40, 10, '999', 1);
$pdf->Ln(10);
$pdf->Cell(130, 10, 'Total', 1, 0, 'R');
$pdf->Cell(40, 10, '$50.00', 1);
$pdf->Ln(20);

// output the PDF
$pdf->Output();
?>


