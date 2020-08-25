<?php
switch($jenis){

	// Modul admin Home
	case "dashboard"; include("dashboard/dashboard.php"); break;

	// Module Master Program           
  case "pemudik";                   include("pemudik/v_pemudik.php"); break;
  case "Data_pemudik";              include("pemudik/v_data_kecamatan.php"); break;
  case "Detail Pemudik";              include("pemudik/v_detail.php"); break;
  case "Per-Desa";                include("pemudik/v_perdesa.php"); break;


  case "pasien-karantina";              include("pasien/v_pasien.php"); break;
  case "karantina-update";              include("pasien/v_edit.php"); break;

  case "jml-pasien-karantina";			include("karantina/v_jumlah_karantina.php"); break;
  case "jml-karantina-update" ;			include("karantina/v_edit_karantina.php"); break;



}
?>
