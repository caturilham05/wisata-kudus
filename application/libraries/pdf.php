<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('fpdf.php');
class Pdf extends FPDF{

function __construct($orientation='p', $unit='mm', $size='A4')
  {
    parent::__construct($orientation,$unit,$size);
}

function Header()
{    
    // Logo
    global $title;
    global $subtitle;
    global $kop;
    global $alamat;
    global $lrh;
    global $t;
    global $st;
    
    $image_file = base_url().'gambar/kudus.png';
    $this->Image($image_file,25,16,20);

    // Arial bold 15
    $this->SetFont('Arial','B',18);

    // Move to the right
    $this->Cell(80);

    // Title
    $this->Cell(50,10,$t,0,0,'C');
    $this->Cell(-60,30,$st,0,0,'C');

    $this->Cell(30,10,$title,0,0,'C');
    $this->Cell(-30,30,$subtitle,0,0,'C');
    $this->Cell(26,80,$kop,0,0,'C');
    $this->Cell(-37,50,$alamat,0,0,'C');

    // Line
    $this->SetLineWidth(0.8);
    $this->SetDash('float'); //4mm on, 2mm off

    // Line break
    $this->Ln(40);
}                 

function Footer() {                
     // Position at 1.5 cm from bottom
     $this->SetY(-15);
     // Arial italic 8
     $this->SetFont('Arial','I',8);
     // Page number
     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');   
        
  }  
  
function SetDash($black=null, $white=null)
  {
    if($black!==null)
        $s=sprintf('[%.3F %.3F] 0 d',$black*$this->k,$white*$this->k);
      else
            $s='[] 0 d';
      $this->_out($s);
  }

}