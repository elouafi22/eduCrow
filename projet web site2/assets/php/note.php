<?php
session_start();
if (!isset($_SESSION['nom']) && !isset($_SESSION['prenom'])) {
   echo "<script type=\"text/javascript\"> window.location='./../../index.php' </script>";
}

///////////////////////////////////////////////////////////////////////////////////////////

require('./../fpdf/fpdf.php');
include 'traitementNote.php';

class PDF extends FPDF
{
// Chargement des données
function LoadData($file)
{
    // Lecture des lignes du fichier
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tableau simple
function BasicTable($header, $data)
{
    // En-tête
    foreach($header as $col){
          $this->SetX(50);
          $this->Cell(70,7,$col,1);
          $this->Ln();
    }
      
    // Données
 
    foreach($data as $row)
    {   
        $this->Sety(35);
        foreach($row as $col){
            $this->SetX(120);
            $this->Cell(50,7,$col,1);
            $this->Ln();
        }
            
    }
}

}
$table=$_SESSION["note"];


$pdf = new PDF();

///////////////////////////SMI/////////////////////////////////
if($table[2]==="note 1ere annee" && $table[1]==="SMI")
$header = array('Analyse1', 'Algebre1','Algebre2', 'mecanique', 'Termodynamique','informatique');
elseif($table[2]==="note 2eme annee" && $table[1]==="SMI")
$header = array('ALGORITHME2', 'ELECTRONIQUE', 'WEB', 'SYSTEME DEXPLOITATION','Programation1','Probabilite');
elseif($table[2]==="note 3eme annee" && $table[1]==="SMI")
$header = array('Base de Donnes', 'Compilation', 'Reseaux', 'Recherche','Programation OOP','UML');
/////////////////////////SMA//////////////////////////////////////////
elseif($table[2]==="note 1ere annee" && $table[1]==="SMA")
$header = array('Analyse1', 'Algebre1','Algebre2', 'mecanique', 'Termodynamique','informatique');
elseif($table[2]==="note 2eme annee" && $table[1]==="SMA")
$header = array('Analyse4', 'Analyse5', 'Algebre4', 'Probabilite','Physique','Informatique');
elseif($table[2]==="note 3eme annee" && $table[1]==="SMA")
$header = array('Topologie', 'Integration', 'Calcul differentiel', 'Programation','Alasyse numerique','Informatique5');
/////////////////////SMP///////////////////////////////////////////////
elseif($table[2]==="note 1ere annee" && ($table[1]==="SMP" || $table[1]==="SMC" ) )
$header = array('Mecanique', 'Thermodynamique','Atomique', 'Algebre1', 'Thermochimie','LT1');
elseif($table[2]==="note 2eme annee" && ($table[1]==="SMP" || $table[1]==="SMC" ))
$header = array('Mecanique', 'Thermodynamique2','Electromagnetis', 'Chimie', 'Analyse3','Analyse numerique');
elseif($table[2]==="note 3eme annee" && ($table[1]==="SMP" || $table[1]==="SMC" ))
$header = array('Electronique', 'Mecanique', 'Physique nucleaire', 'Physique','Physique de quantite','Physique statistique');
////////////////////SVI////////////////////////////////////////////////////
elseif($table[2]==="note 1ere annee" && $table[1]==="SVI")
$header = array('Biologie', 'Embryologie','Geologie', 'Mathematique', 'Physique1','Chimie1');
elseif($table[2]==="note 2eme annee" && $table[1]==="SVI")
$header = array('Biologie2', 'Microbiologie','Ecologie', 'Technique biologie', 'Biophysique','Statistique');
elseif($table[2]==="note 3eme annee" && $table[1]==="SVI")
$header = array('Physiologie', 'Dev des plantes', 'Ecologie', 'Immunologie','Genetique','Biologie');
/////////////////////Economie///////////////////////////////////////////////
elseif($table[2]==="note 1ere annee" && $table[1]==="Economie")
$header = array('Economie', 'Microeconomie','Compatibilite', 'Management', 'Statistique','Analyse');
elseif($table[2]==="note 2eme annee" && $table[1]==="Economie")
$header = array('Microeconomie1', 'Microeconomie2','Comptabilite', 'Management2', 'Probabilite','Algebre');
elseif($table[2]==="note 3eme annee" && $table[1]==="Economie")
$header = array('Economie', 'Comptabilite', 'Fiscalise', 'Gestion des ressources','Gestion financiele','Gestion projet');
else
$header = array('ALGORITHME245', 'ELECTRONIQUE', 'WEB', 'SYSTEME DEXPLOITATION','Programation1','Probabilite');

// Chargement des données
$data = $pdf->LoadData('pays.txt');
$pdf->SetFont('Arial','B',20);
$pdf->AddPage();
$pdf->SetX(65);
$pdf->Cell(40,6,"RELEVE DE NOTE");
$pdf->SetFont('Arial','',14);
$pdf->Ln(25);
$pdf->BasicTable($header,$data);
$pdf->Ln(100);
$pdf->SetX(80);
$pdf->Image('img/images.jpg');
$pdf->Ln();
$pdf->SetY(180);
$pdf->Cell(40,6,"le".date('d/m/y'));
$pdf->Output();
?>
