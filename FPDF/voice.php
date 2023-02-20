<?php
require('fpdf.php');
//class PDF extends FPDF
$conn=mysqli_connect("localhost","root","","shaadi_mubarak");
if(mysqli_connect_error()) {
    echo "Connection not established" .mysqli_connect_error();
    exit();
}

$pdf=new fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial',"",15);
// $pdf->SetXY(10,10);
$pdf->Image('logo2.jpg',10,10,30,30);
$pdf->SETXY(100,23);
$pdf->Cell(50,5,'INVOICE',0,0);
$pdf->SetXY(10,40);
$pdf->Cell(60,5,'Invoice Number:',0,0); // receipt number= userid + timestamp
$pdf->SetXY(150,40);
$pdf->Cell(20,5,'Date:'.date('d/m/Y'),0,0);
// adding image / logo of shaadimubarak
$pdf->Image('dummyshaadi\FPDF\logo2.jpg','150','50','30','30');
$pdf->SetXY(10,50);
$pdf->Cell(120,5,'Customer Name:' ,0,0);
$pdf->Cell(120,5,'Customer Email-id',0,0);





$pdf->Output();
?>