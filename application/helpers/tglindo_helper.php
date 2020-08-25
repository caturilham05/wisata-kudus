<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('tgl_indo')){

  function tgl_indo($tgl){
    $tanggal = substr($tgl,8,2);
    $bulan = getBulan(substr($tgl,5,2));
    $tahun = substr($tgl,0,4);
    return $tanggal.' '.$bulan.' '.$tahun;
  }

  function getBulan($bln){
    switch ($bln){
      case 1:
	    return "Jan";
	    break;
	  case 2:
	    return "Feb";
	    break;
	  case 3:
	    return "Mar";
	    break;
	  case 4:
	    return "Apr";
	    break;
	  case 5:
	    return "Mei";
	    break;
	  case 6:
	    return "Jun";
	    break;
	  case 7:
	    return "Jul";
	    break;
	  case 8:
	    return "Ags";
	    break;
	  case 9:
	    return "Sep";
	    break;
	  case 10:
	    return "Okt";
	    break;
	  case 11:
	    return "Nov";
	    break;
	  case 12:
	    return "Des";
	    break;
    }
  }
  
  function tgl_str($date){
    $exp = explode('-',$date);
    if(count($exp) == 3) {
	  $date = $exp[2].'-'.$exp[1].'-'.$exp[0];
    }
    return $date;
  }
  
  function nama_hari(){
    $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $hari = date("w");
    $hari_ini = $seminggu[$hari];
    return $hari_ini;
  }

  function rupiah($angka){
	
	$hasil_rupiah = number_format($angka,0,',','.');
	return $hasil_rupiah;
 
  }

  function rprupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
  }

  function rprupiah1($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
	}

}
?>
