<?php

session_start();
   if (!isset($_SESSION['nom']) & !isset($_SESSION['prenom'])) {
      echo "<script type=\"text/javascript\"> window.location='./../../index.php' </script>";
   }
//////////////////////////////////////////////////////////////////////////////////////////////////////
$table1= $_SESSION["information"];
$chefDepartement="moe";

//////////////////////////////////Calculer la note total///////////////////////////////////////////////
$t=fopen("pays.txt","r");
$t1=fgetcsv($t,0,";");
$value=0;
for($i=0;$i<6;$i++){
        $value+=$t1[$i];
}
if( ($value/6)<=12 && ($value/6)>10)
   $resulta="Passable";
elseif(($value/6)<=15 && ($value/6)>12)
   $resulta="A.bien";
elseif(($value/6)<=17 && ($value/6)>15)
   $resulta="Bien";
elseif(($value/6)<=20 && ($value/6)>17)
   $resulta="Tre.Bien";
   fclose($t);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
require('../fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
  $pdf->SetFont('Arial','B',20);
//$pdf->mar*
         
         $pdf->Image("img/images.png");
         $pdf->Ln(-50);
         $pdf->SetX(150);
         $pdf->Cell(0,40,' LE: '.date("d/m/y"));
         $pdf->ln(50);
         $pdf->SetX(60);
        
$pdf->Cell(0,20,'ATTESTATION DE REUSSITE');
        $pdf->Ln("2");
        $pdf->SetX(70);
   $pdf->SetFont('Arial','I',15);
$pdf->Cell(0,40,'ANNEE SCOLAIRE: 2021/2022');
        $pdf->Ln("10");
        $pdf->SetX(90);
        $pdf->SetFont('Arial','B',15);
$pdf->Cell(0,40,' MME'." ".$table1[1]." ".$table1[0]);
        $pdf->Ln("10");
        $pdf->SetX(70);
        $pdf->SetFont('Arial','I',15);
$pdf->Cell(0,40,'A OBTENU LE RESULTAT ADMIS '." ".$resulta);
        $pdf->Ln("10");
        $pdf->SetX(95);
        $pdf->SetFont('Arial','B',15);
$pdf->Cell(0,40,' Filiere : '.$table1[8]);
        $pdf->Ln("10");
        $pdf->SetX(65);
        $pdf->SetFont('Arial','I',15);
$pdf->Cell(0,40,'DANS LA CLASSE DE '.$table1[9]);
        $pdf->Ln("10");
        $pdf->SetX(75);
$pdf->Cell(0,40,'LE CHEF D\'ETABLISSEMENT');
        $pdf->Ln(50);
        $pdf->SetX(80);
$pdf->Image("img/images.jpg");
$pdf->Output();


?>
