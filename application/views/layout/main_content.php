<?php
switch($jenis)
{
	// Modul public Home
    case "Home"; include("frontend/beranda.php"); break;
    case "Detail"; include("frontend/detail.php"); break;
    case "ModalDetail"; include("frontend/modaldetail.php"); break;

    // Modul public List DAftar Nomor HP RT
    case "Nomor Hp"; include("rt/v_nomorhp.php"); break;

	// Modul public buat surat
    case "List-Surat"; include("buatsurat/v_buatsurat.php"); break;
    case "Form-Surat-Public"; include("buatsurat/v_formsurat.php"); break;

    // Modul Galery
    case "Galery"; include("galery/v_galery.php"); break;
    case "Detail-Galery"; include("galery/v_detail.php"); break;
    case "Hasil-Galery"; include("galery/v_hasilkat.php"); break;

    // Modul public Komentar
    case "Komentar"; include("komentar/v_komentar.php"); break;

     // Modul public Informasi
     case "Berita"; include("informasi/v_informasi.php"); break;
     case "Detail-Berita"; include("informasi/v_detail.php"); break;
     case "Hasil-Berita"; include("informasi/v_hasilkat.php"); break;

    // Modul Public Profile Lurah Mlati Kidul
    case "Profil-Lurah"; include("profil_lurah/v_profil.php"); break;

    // modul public visi misi kelurahan mlati kidul
    case "Visi-Misi"; include("visimisi/v_visimisi.php"); break;

    // modul public Selayang Pandang
    case "Selayang-Pandang"; include("selayang/v_selayang.php"); break;

    // modul public Sejarah
    case "Sejarah"; include("selayang/v_sejarah.php"); break;


}
?>
