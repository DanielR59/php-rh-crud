<?php
include("db.php");
require('fpdf/fpdf.php');

$email = $_POST['user'];

$query_name = "SELECT name FROM users WHERE email = '$email'";
$result_name = $mysqli ->query($query_name) ;
$name = mysqli_fetch_column($result_name,0);
$query = "CALL sp_get_report('$email');";
$result = $mysqli ->query($query) ;

class PDF extends FPDF
{ 
    function Header()
    {
        $this->SetFont('Arial','B',15);
        $this->Cell(30);
        $this->Cell(120,10, 'Reporte de asistencia',0,0,'C');
        $this->Ln(20);
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
}


$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Write(30,$name);
$pdf->Ln(20);
$pdf->SetFont('Arial','B',12);

$pdf->Cell(40,10, 'Fecha',1,0,'C',0);

$pdf->Cell(40,10, 'Asistencia',1,0,'C',0);
$pdf->Ln();

// $pdf->Cell(40,10, 'Notas',1,1,'C',0);



while ($row = mysqli_fetch_array($result)) {
    $pdf->Cell(40,10, $row['session_date'],1,0,'C',0);
    $pdf->Cell(40,10, $row['status'],1,0,'C',0);
    $pdf->Ln();
//     $pdf->Cell(40,10, $row['notes'],1,1,'C',0);
}




$pdf->Output();



?>