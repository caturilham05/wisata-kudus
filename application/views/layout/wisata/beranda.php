<!DOCTYPE html>
<html lang="id">

<head>

  <meta name="theme-color" content="#00B754">
  <meta name="msapplication-navbutton-color" content="#00B754">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta http-equiv="refresh" content="3600" />
  <title>Kabupaten Kudus</title>

  <meta name="description" content="wisata pemkab kudus">

  <meta name="keywords" content="wisata pemkab kudus">


  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta property="og:title" content="Kabupaten Kudus" />
  <link rel="shortcut icon" href="<?php echo base_url(); ?>landy/vendor/assets/img/logo/icon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mudik.css">
  <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

  <script>
    var PATH = 'http://mudik.kuduskab.go.id';
  </script>
  <style type="text/css">

 .btn {
  box-sizing: border-box;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
  border: 1px solid #dd2003;
  border-radius: 0.5em;
  color: #e74c3c;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 10px 0px 0px 15px;
  padding: 1em 1em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;

}
.btn:hover, .btn:focus {
  color: #000;
  outline: 0;
}
.third {
  border-color: #dd2003;
  color: #fff;
  box-shadow: 0 0 40px 40px #dd2003 inset, 0 0 0 0 #dd2003;
  transition: all 150ms ease-in-out;
}
.third:hover {
  /* box-shadow: 0 0 10px 0#dd2003 inset, 0 0 10px 4px #dd2003; */
  box-shadow: 0 0 1px 0#dd2003 inset, 0 0 1px 1px #dd2003;
}

.table {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    
    border: 1px solid ;
}
 
.table tr th{
    background: #cc0d06;
    color: #fff;
    font-weight: normal;
}
 
</style>
</head>

<body>
 
<header id="header" class="header mb-4 d-print-none">
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light">
      <a class="header__logo" href="http://mudik.kuduskab.go.id">
        <img src="<?php echo base_url(); ?>gambar/logo.png" alt="logo Kudus Kab">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav" >
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url(''); ?>">Beranda</a>
            </li>
            <!-- <li class="nav-item ">
              <a class="nav-link" href="<?= base_url('C_wisata/form'); ?>">Form wisata</a>
            </li> -->
            <li class="nav-item ">
              <a class="nav-link" href="<?= base_url('C_wisata/list'); ?>">Daftar Wisatawan</a>
            </li>
          </ul>
       </div>
    </nav>
  </div>
</header>
<div class="header-padding"></div>


<section class="section pt-0 position-relative" id="beranda">
  <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
        <div class="rounded-15 shadow bg-white">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-7 col-md-12 text-center mb-2">
                    
                </div> -->
            </div>
             <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-sm-10 mb-lg-5">         

                 <h1 style="padding-left:10%; margin-top: 10%;margin-bottom:-3px;"><b>DATA WISATAWAN</b></h1>
                 <h1 style="padding-left:10%;padding-top: -5%;"><b>KABUPATEN KUDUS</b></h1>
                 <div class="btn-group col-md-8 p-5">
                        <a href="<?php echo base_url('C_wisata/form'); ?>" class="btn third">Form Pengunjung</a> 
                  </div>
                 <!-- <p style="padding-left:10%;">Silahkan baca petunjuk di samping lalu klik tombol dibawah untuk mengisi data wisata</p> -->
                </div>
               <div class="col-lg-6 col-md-10 col-sm-10">
               <div class="container">
                      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="https://placeimg.com/640/480/arch" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://placeimg.com/640/480/nature" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://placeimg.com/640/480/tech" class="d-block w-100" alt="...">
                            </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                      </div>
                    </div>
                </div>
                    <div class="col-md-12 col-sm-10 offset-md-1 pb-5 mb-5">
                      <!-- <div class="btn-group">
                        <a href="<?php echo base_url('C_mudik/formA'); ?>" class="btn third">Form Wisatawan Perorangan</a> 
                      </div> -->
                      <!-- <div class="btn-group">
                        <a href="<?php echo base_url('C_wisata/form'); ?>" class="btn third">Form Rombongan Wisatawan</a> 
                      </div> -->
                  </div>
              
              </div>
        </div>
</section>
<div class="clear-fix"></div>
<br>
<!-- <section class="section pt-0 position-relative" id="data">
    <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2">
    <div class="rounded-15 shadow bg-white">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 mb-12 text-center p-4">
                    <h3 class="font-hotline font-weight-bold p-3 mb-3">Rekapitulasi WISATAWAN / ROMBONGAN di Kabupaten Kudus</h3>
                    <div class="table-responsive" style="box-shadow: 2px 2px 3px 2px #888888;box-shadow: 2px 2px 3px 2px #888888;border-radius:15px">

                       <table class="table table-hover">
                        <thead>
                          <th><b>NO</b></th>
                          <th><b>KABUPATEN / KOTA</b></th>
                          <th><b>JUMLAH WISATAWAN / ROMOBONGAN</b></th>
                        </thead>
                        <tbody> -->
                          <?php
                          // $i = 1; $jum = 0;
                          //   foreach ($jml as $row) {
                          //     $kec = $row['kecamatan'];
                          //     $jtot = $row['jml'];
                          //     $jum = $jum + $jtot;
                          //      var_dump($k['name']);die();
                          ?>
                          <!-- <tr>
                            <td><center><?php echo $i;?></center></td>
                            <td><center><?php echo htmlentities($kec, ENT_QUOTES, 'UTF-8');?></center></td>
                            <td><center><?php echo htmlentities($jtot, ENT_QUOTES, 'UTF-8');?></center></td>
                          </tr> -->
                          <?php
                          // $i++;
                            // }
                          ?>
                        <!-- </tbody>
                        <thead>
                          <th><b>Total</b></th>
                          <th></th> -->
                          <!-- <th><center><?php echo $jum;?></center></th>
                        </thead>
                      </table>
                    </div>
                   
                </div>
            </div>
      </div>
    </div>
</section> -->

<!-- start popup -->
    <!-- <div id="close">
        <div class="container-popup">
            <form action="#" method="post" class="popup-form">
              <br>
              <hr>
                <h1><center>SELAMAT DATANG</center></h1>
                <p><center>Silahkan baca petunjuk di layar lalu klik tombol dibawah untuk mengisi data wisata</center></p>
                <p><center>Dimohon untuk mengisi data dengan sebenar - benarnya</center></p>
                <br>
                <hr>
                <p><center>Terima Kasih</center></p>
            </form>
            <a class="close" href="#close" style="margin-top: 2px;">&times; Tutup</a>
        </div>
    </div> -->
<!-- end popup -->
<div class="clear-fix"></div>
<br>
 <div class="clear-fix"></div>
<br>
<section class="section pt-0 position-relative" id="karantina" >
    <div class="container-fluid pl-lg-5 pr-lg-5 pl-md-3 pr-md-3 pl-sm-2 pr-sm-2" >
    <div class="rounded-15 shadow bg-white" >
            <div class="row justify-content-center" style="background: #dd2003;">
                <div class="col-lg-12 col-md-12 mb-12 text-center p-4">
                    <h3 class="font-hotline font-weight-bold p-3 mb-3" style="color:white;">DATA WISATAWAN</h3>
                    <?php
                      $date = $upd[0]['tgl'];
                      $time = date("H:i", strtotime($date));
                   ?>
                    <h4 style="color:white;">Terakhir diupdate : <?php
                      
                    echo tgl_indo($upd[0]['tgl']);?> | <?php echo $time;?>  WIB</h4>

                    <br><br>
                    <!-- carousel -->
                    <div>
                       <div class="card-body" style="background: white;">
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                      <!-- content carousel -->
                                      <div class="feature-icon">
                                        <img src="<?php echo base_url();?>gambar/1.png" alt="" width="250px">
                                      </div>
                                      <!-- end carousel -->
                                      <!-- Content Table -->
                                      <div class="kotak" style="border:3px solid #dd2003; margin-top:40px; width: auto; height: auto;  border-radius: 10px;">
                                  <table style="text-align: left;margin-top: 20px;padding-bottom: 10px;line-height: 50px;">
                                    <tr>
                                      <td style="padding-left: 10px;"><strong>Jumlah Anak-Anak&nbsp;</strong></td>
                                     <td style="width: 20px;"></td>
                                      <td><strong> :</strong></td>
                                      <td style="width:40px;"></td>
                                       <!--<td><?=$sebelum2->jum?></td>-->
                                       <td style="text-align: center;"><?php echo $grh[0]['jml_before'];?></td>
                                    </tr>
                                    <tr>
                                      <td style="padding-left: 10px;"><strong>Jumlah Orang Dewasa&nbsp;</strong></td>
                                     <td style="width: 20px;"></td>
                                      <td><strong> :</strong></td>
                                      <td style="width:40px;"></td>
                                       <!--<td><?=$sebelum2->jum?></td>-->
                                       <td style="text-align: center;"><?php echo $grh[0]['jml_tambah'];?></td>
                                    </tr>
                                    <tr>
                                      <td style="padding-left: 10px;"><strong>Jumlah Keseluruhan&nbsp;</strong></td>
                                      <td style="width: 20px;"></td>
                                      <td><strong> :</strong></td>
                                      <td style="width:40px;"></td>
                                      
                                      <td style="text-align: center;"><?php echo $grh[0]['jml_now'];?></td>
                                    </tr>
                                  </table>
                                  <!-- end content taabel -->
                                </div>
                                </div>
                                <div class="carousel-item">
                                      <!-- content carousel -->
                                      <div class="feature-icon">
                                        <img src="<?php echo base_url();?>gambar/2.png" alt="" width="250px">
                                      </div>
                                      <div class="kotak" style="border:3px solid #dd2003; margin-top:40px; width: auto; height: auto;  border-radius: 10px;">
                                        <table style="text-align: left;margin-top: 20px;padding-bottom: 10px;line-height: 50px;">
                                          <tr>
                                            <td style="padding-left: 10px;"><strong>Jumlah Anak-Anak&nbsp;</strong></td>
                                            <td style="width: 20px;"></td>
                                            <td><strong> :</strong></td>
                                            <td style="width:40px;"></td>
                                            <!--<td><?=$sebelum->jum?></td>-->
                                            <!--<td>10</td>-->
                                            <td><?php echo $krn[0]['jml_before'];?>
                                          </tr>
                                          <tr>
                                            <td style="padding-left: 10px;"><strong>Jumlah Orang Dewasa&nbsp;</strong></td>
                                            <td style="width: 20px;"></td>
                                            <td><strong> :</strong></td>
                                            <td style="width:40px;"></td>
                                            <!--<td><?=$sebelum->jum?></td>-->
                                            <!--<td>10</td>-->
                                            <td><?php echo $krn[0]['jml_tambah'];?>
                                          </tr>
                                          <tr>
                                            <td style="padding-left: 10px;"><strong>Jumlah Keseluruhan&nbsp;</strong></td>
                                            <td style="width: 20px;"></td>
                                            <td><strong> :</strong></td>
                                            <td style="width:40px;"></td>
                                            <!--<td>12</td>-->
                                            <td><?php echo $krn[0]['jml_now'];?>
                                            <!--<td><?php echo $krn[0]['karantina'];?></td>-->
                                          </tr>
                                        </table>
                                      
                                      </div>
                                    </div>
                                <div class="carousel-item">
                                      <!-- content carousel -->
                                      <div class="feature-icon">
                                        <img src="<?php echo base_url();?>gambar/3.png" alt="" width="250px">
                                      </div>
                                      <div class="kotak" style="border:3px solid #dd2003; margin-top:40px; width: auto; height: auto;  border-radius: 10px;">
                                        <table style="text-align: left;margin-top: 20px;padding-bottom: 10px;line-height: 50px;">
                                          <tr>
                                            <td style="padding-left: 10px;"><strong>Jumlah Anak-Anak&nbsp;</strong></td>
                                            <td style="width: 20px;"></td>
                                            <td><strong> :</strong></td>
                                            <td style="width:40px;"></td>
                                            <!--<td><?=$sebelum3->jum?></td>-->
                                            <!--<td>38</td>-->
                                            <td><?php echo $rsn[0]['jml_before'];?></center></td>
                                          </tr>
                                          <tr>
                                            <td style="padding-left: 10px;"><strong>Jumlah Orang Dewasa&nbsp;</strong></td>
                                            <td style="width: 20px;"></td>
                                            <td><strong> :</strong></td>
                                            <td style="width:40px;"></td>
                                            <!--<td><?=$sebelum3->jum?></td>-->
                                            <!--<td>38</td>-->
                                            <td><?php echo $rsn[0]['jml_tambah'];?></center></td>
                                          </tr>
                                          <tr>
                                            <td style="padding-left: 10px;"><strong>Jumlah Keseluruhan&nbsp;</strong></td>
                                            <td style="width: 20px;"></td>
                                            <td><strong> :</strong></td>
                                            <td style="width:40px;"></td>
                                            <!--<td><center><?php echo $rsn[0]['rusun'];?></center></td>-->
                                            <!--<td>39</td>-->
                                            <td><?php echo $rsn[0]['jml_now'];?></center></td>
                                          </tr>
                                        </table>
                                      </div>
                                </div>
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                              </a>
                            </div>
                    <!-- end carousel -->
                          
                            </div>
                      </div>

                    </div>

                   
                </div>
              </div>
            </div>
          </section>
<footer class="web-footer mt-3 py-4 text-center d-print-none">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kabupaten Kudus</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Crafted by <a href="http://diskominfo.kuduskab.go.id" target="_blank">Diskominfo Kabupaten Kudus</a> 
        <!-- Support by 
        <a href="http://gramaya.org" target="_blank">
          <img src="<?php echo base_url();?>gambar/gramaya.png" alt="" width="90px">
      </a> -->
      </div>
    </div>
  </footer>



  <script src="<?php echo base_url(); ?>assets/js/manifest.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/vendor.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
	

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

  <?php if ($this->session->flashdata('msg')) : ?>
    <script>
      swal("Berhasil", "Data Berhasil Tersimpan", "success");
    </script>
  <?php endif ?>

 
</body>

</html>
