<?php
session_start();
if (!isset($_SESSION['nom']) & !isset($_SESSION['prenom'])) {
   echo "<script type=\"text/javascript\"> window.location='./../../index.php' </script>";
}
/////////////////////////////////////////////////////////////////////////////////////////////////
$table1= $_SESSION["information"];
$chefDepartement="moe";


require('../fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
  $pdf->SetFont('Arial','I',20);
//$pdf->mar*
         
         $pdf->Image("img/images.png");
         $pdf->Ln(10);
         $pdf->SetX(50);
$pdf->Cell(0,20,'CERTIFICAT DE SCOLARITE');
        $pdf->Ln("2");
        $pdf->SetX(60);
   $pdf->SetFont('Arial','I',15);
$pdf->Cell(0,40,'ANNEE SCOLAIRE: 2021/2022');
        $pdf->Ln("20");
        $pdf->SetX(70);
        $pdf->SetFont('Arial','B',15);
$pdf->Cell(0,40,'JE SOUSSIGNE(E):'.$chefDepartement);
        $pdf->Ln("10");
        $pdf->SetX(60);
        $pdf->SetFont('Arial','I',15);
$pdf->Cell(0,40,'CHEF DE D\'ETABLISSEMENT ');
        $pdf->Ln("10");
        $pdf->SetX(65);
        $pdf->SetFont('Arial','B',15);
$pdf->Cell(0,40,' CERTIFIE QUE M '.$table1[1]." ".$table1[0]);
        $pdf->Ln("10");
        $pdf->SetX(20);
        $pdf->SetFont('Arial','I',15);
$pdf->Cell(0,40,'POURCUIT SES ETUDES DANS MON ETABLISSEMENT EN QUALITE ');
        $pdf->Ln("10");
        $pdf->SetX(80);
$pdf->Cell(0,40,' Filiere : '.$table1[8]);
        $pdf->Ln("10");
        $pdf->SetX(55);
$pdf->Cell(0,40,'DANS LA CLASSE DE '.$table1[9]);
        $pdf->Ln("10");
        $pdf->SetX(80);
$pdf->Cell(0,40,' LE: '.date("d/m/y"));
        $pdf->Ln("10");
        $pdf->SetX(60);
$pdf->Cell(0,40,'LE CHEF D\'ETABLISSEMENT');
        $pdf->Ln(50);
        $pdf->SetX(80);
$pdf->Image("img/images.jpg");
$pdf->Output();
?>
