<?php
require('fpdf/fpdf.php');
include 'db.php';

$conexiondb = conectardb();
$query = "SELECT * FROM persona";
$resultado = mysqli_query($conexiondb, $query);
mysqli_close($conexiondb);

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image("images/logo.png", 120, 5, 13);
    // Arial bold 15
    $this->SetFont("Arial", "B", 12);
    // Título
    $this->Cell(25);
    $this->Cell(280, 10, utf8_decode("Reporte de todos los clientes:"), 0, 0, "C");
    //Fecha 
    $this->SetFont("Arial", "", 10);
    $this->Cell(25, 10, "Fecha: ". date("d/m/Y"), 0, 1, "C");
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
}
}

$pdf = new PDF("L", "mm", "legal");
$pdf->AliasNbPages();
$pdf->SetMargins(5, 5, 5);
$pdf->AddPage();

$pdf->SetFont("Arial", "B", 9);

$pdf->Cell(15, 5, "Cedula", 1, 0, "C");
$pdf->Cell(25, 5, "Nombre", 1, 0, "C");
$pdf->Cell(25, 5, "Apellido", 1, 0, "C");

$pdf->SetFont("Arial", "", 9);

while($fila = $resultado->fetch_assoc()){
    $pdf->Ln(10);
    $pdf->Cell(15, 5, $fila['cedula'], 1, 0, "C");
    $pdf->Cell(25, 5, utf8_decode($fila['nombre']), 1, 0, "C");
    $pdf->Cell(25, 5, utf8_decode($fila['apellido']), 1, 0, "C");
}

$pdf->Output();
