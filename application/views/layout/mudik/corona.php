
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1834d6">
  <meta name="csrf-token" content="K5LcdgYsGq30M756cGQ8oXwQWrs0Oi544mdmH3hw">


  <title>Kabupaten Karangayar</title><meta property="og:title" content="Kabupaten Karangayar" />

  <link rel="shortcut icon" href="<?php echo base_url();?>landy/vendor/assets/img/logo/icon.png">
  <link rel="stylesheet" type="text/css" href="http://mudik.karanganyarkab.go.id/css/app.css?id=166df14b776f5cdfecaa">

  <script>
    var PATH = 'http://mudik.karanganyarkab.go.id';
  </script>
</head>
<body>

  <header id="header" class="header mb-4 d-print-none">
  <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light">
      <a class="header__logo" href="http://mudik.karanganyarkab.go.id">
        <img src="http://mudik.karanganyarkab.go.id/images/logo.png" alt="logo karanganyar">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="http://mudik.karanganyarkab.go.id">Beranda</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://mudik.karanganyarkab.go.id/form">Form Pemudik</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<div class="header-padding"></div>

  
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="card">
        <div class="card-body">
          <form method="POST">
            <div class="form-row">
                <div class="form-group col-12">
    <h4 class="subtitle">Data Pemudik/ Pendatang</h4>
    <div class="alert alert-primary mb-2" role="alert">
      Silahkan Isi Semua Form Dibawah Lalu Klik Kirim Data
    </div>
    
  </div>

  <div class="form-group col-12">
    <label for="fm-nik">NIK</label>
    <input type="number" class="form-control js-nik no-spinner"
    id="fm-nik" placeholder="No Induk Kependudukan/ No KTP" name="nik" required value="">
    <input type="hidden" id="fm-check-nik" name="check_nik" value="0">
    <div class="nik-validation"></div>
  </div>

  <div class="form-group col-12">
    <label for="fm-nama">Nama</label>
    <input type="text" class="form-control" id="fm-nama" placeholder="Nama Lengkap"
    name="nama" required readonly value="">
  </div>

  <div class="form-group col-12">
    <label for="fm-tgl-lahir">Tanggal Lahir</label>
    <input type="text" class="form-control js-tanggal-lahir" autocomplete="off"
    id="fm-tgl-lahir" placeholder="dd/mm/yyyy" data-toggle="datetimepicker"
    data-target="#fm-tgl-lahir" name="tanggal_lahir" required value="">
  </div>

  <div class="form-group col-12">
    <label for="fm-nama">Jenis Kelamin</label>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-jenis-kelamin-l" name="jenis_kelamin" class="custom-control-input js-jenis-kelamin--l" value="L" required>
      <label class="custom-control-label" for="fm-jenis-kelamin-l">Laki-laki</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-jenis-kelamin-p" name="jenis_kelamin" class="custom-control-input js-jenis-kelamin--p" value="P" required>
      <label class="custom-control-label" for="fm-jenis-kelamin-p">Perempuan</label>
    </div>
  </div>

  <div class="form-group col-12">
    <label for="fm-no-telp">No Telp</label>
    <input type="number" class="form-control no-spinner" id="fm-no-telp"
    placeholder="08xxxxx" name="no_telp" required value="">
  </div>

  <div class="form-group col-12 mt-2">
    <hr>
    <label for="fm-nama-negara">Negara Asal <strong>Mudik</strong></label>
    <select class="form-control lokasi-negara" name="asal_negara_id" id="fm-nama-negara" required>
      <option></option>
      <option value="1">Afganistan

</option><option value="196">Zimbabwe</option>
    </select>
    <p class="small text-muted">
      Silahkan pilih Negara tempat anda <strong>merantau</strong> atau tempat sebelum anda mudik/ pulang ke Karanganyar
    </p>
  </div>


  <div class="form-group col-12 lokasi-kota-container collapse">
    <label for="fm-kota-asal">Kota/ Kabupaten Asal <strong>Mudik</strong></label>
    <select class="form-control js-lokasi-kota-comp select2-full" name="asal_kota_id" id="fm-kota-asal">
      <option></option>
    </select>
    <p class="small text-muted">
      Silahkan pilih Kota tempat anda <strong>merantau</strong> atau tempat sebelum anda mudik/ pulang ke Karanganyar
    </p>
  </div>

  <div class="form-group col-12">
    <label for="fm-nama">Keperluan/ tujuan</label>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-keperluan-mudik" name="keperluan" class="custom-control-input" value="Mudik" required>
      <label class="custom-control-label" for="fm-keperluan-mudik">Mudik</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-keperluan-liburan" name="keperluan" class="custom-control-input" value="Liburan" required>
      <label class="custom-control-label" for="fm-keperluan-liburan">Liburan</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-keperluan-bisnis" name="keperluan" class="custom-control-input" value="Bisnis" required>
      <label class="custom-control-label" for="fm-keperluan-bisnis">Bisnis</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-keperluan-lainnya" name="keperluan" class="custom-control-input" value="Lainnya" required>
      <label class="custom-control-label" for="fm-keperluan-lainnya">Lainnya</label>
    </div>
  </div>

  <div class="form-group col-12">
    <label for="fm-nama">Alasan</label>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-alasan-phk" name="alasan" class="custom-control-input" value="PHK" required>
      <label class="custom-control-label" for="fm-alasan-phk">PHK</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-alasan-wfh" name="alasan" class="custom-control-input" value="Kerja Dari Rumah" required>
      <label class="custom-control-label" for="fm-alasan-wfh">Kerja Dari Rumah</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-alasan-dirumahkan" name="alasan" class="custom-control-input" value="Dirumahkan" required>
      <label class="custom-control-label" for="fm-alasan-dirumahkan">Dirumahkan</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-alasan-bangkrut" name="alasan" class="custom-control-input" value="Usaha Bangkrut" required>
      <label class="custom-control-label" for="fm-alasan-bangkrut">Usaha Bangkrut</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-alasan-dilarang" name="alasan" class="custom-control-input" value="Tidak Boleh Jualan" required>
      <label class="custom-control-label" for="fm-alasan-dilarang">Tidak Boleh Jualan</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-kuliah-online" name="alasan" class="custom-control-input" value="Kuliah Online" required>
      <label class="custom-control-label" for="fm-kuliah-online">Kuliah Online</label>
    </div>
  </div>

  <div class="form-group col-12">
    <label for="fm-nama-usaha">Nama Usaha/ Nama Perusahaan/ Nama Universitas</label>
    <input type="text" class="form-control" id="fm-nama-usaha" placeholder=""
    name="nama_usaha" required value="">
    <p class="small text-muted">
      Untuk <strong>pelaku usaha</strong> silahkan tulis <strong>nama usaha</strong> anda<br>
      Untuk <strong>pekerja</strong> silahakan tulis <strong>nama perusahaan</strong> tempat anda bekerja<br>
      Untuk <strong>mahasiswa/ siswa</strong> silahakan tulis <strong>nama universitas/ sekolah</strong>
    </p>
  </div>

  <div class="form-group col-12">
    <label for="fm-bidang-usaha">Bidang Usaha/ Bidang Perusahaan/ Nama Jurusan</label>
    <input type="text" class="form-control" id="fm-bidang-usaha" placeholder=""
    name="bidang_usaha" required value="">
    <p class="small text-muted">
      Untuk <strong>pelaku usaha</strong> silahkan tulis <strong>bidang usaha</strong> anda<br>
      Untuk <strong>pekerja</strong> silahakan tulis <strong>bidang perusahaan</strong> tempat anda bekerja<br>
      Untuk <strong>mahasiswa/ siswa</strong> silahakan tulis <strong>nama jurusan anda</strong>
    </p>
  </div>

  <div class="form-group col-12">
    <label for="fm-rencana-kedepan">Rencana Kedepan seperti apa?</label>
    <input type="text" class="form-control" id="fm-rencana-kedepan" placeholder=""
    name="rencana_kedepan" required value="">
  </div>

  <div class="form-group col-12">
    <label for="fm-kota-asal">Alat Transportasi yang Anda gunakan saat menuju Kabupaten Karanganyar</label>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="fm-transport-bus" name="transportasi" value="Bus" required>
      <label class="custom-control-label" for="fm-transport-bus">Bus</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="fm-transport-pesawat" name="transportasi" value="Pesawat Terbang" required>
      <label class="custom-control-label" for="fm-transport-pesawat">Pesawat Terbang</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="fm-transport-kereta" name="transportasi" value="Kereta Api" required>
      <label class="custom-control-label" for="fm-transport-kereta">Kereta Api</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="fm-transport-roda4" name="transportasi" value="Kendaraan Roda 4" required>
      <label class="custom-control-label" for="fm-transport-roda4">Kendaraan Roda 4</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" class="custom-control-input" id="fm-transport-roda2" name="transportasi" value="Kendaraan Roda 2" required>
      <label class="custom-control-label" for="fm-transport-roda2">Kendaraan Roda 2</label>
    </div>
  </div>

  <div class="form-group col-12 col-sm-6">
    <label for="fm-estimasi-sampai">Waktu Kedatangan</label>
    <input type="text" class="form-control js-datepicker" autocomplete="off"
    id="fm-estimasi-sampai" placeholder="dd/mm/yyyy" data-toggle="datetimepicker"
    data-target="#fm-estimasi-sampai" name="estimasi_sampai" value="">
  </div>

  <div class="form-group col-12 col-sm-6">
    <label for="fm-lama-mudik">Berapa Lama Di Karanganyar</label>
    <div class="input-group">
      <input type="number" class="form-control" id="fm-lama-mudik"
      placeholder="" name="lama_mudik" required value="">
      <div class="input-group-append">
        <span class="input-group-text">Hari</span>
      </div>
    </div>
  </div>

                <div class="form-group mt-4 col-12">
    <h4 class="subtitle">Data Tujuan</h4>
  </div>

  <div class="form-group col-12">
    <label for="fm-nama">Hubungan dengan tujuan</label>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-hubungan-orang-tua" name="hubungan_tujuan" class="custom-control-input" value="Orang Tua" required>
      <label class="custom-control-label" for="fm-hubungan-orang-tua">Orang Tua</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-hubungan-saudara" name="hubungan_tujuan" class="custom-control-input" value="Saudara" required>
      <label class="custom-control-label" for="fm-hubungan-saudara">Saudara</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-hubungan-teman" name="hubungan_tujuan" class="custom-control-input" value="Teman" required>
      <label class="custom-control-label" for="fm-hubungan-teman">Teman</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" id="fm-hubungan-lainnya" name="hubungan_tujuan" class="custom-control-input" value="Lainnya" required>
      <label class="custom-control-label" for="fm-hubungan-lainnya">Lainnya</label>
    </div>
  </div>

  <div class="form-group col-12">
    <label for="fm-nama-tujuan">Nama yang dituju</label>
    <input type="text" class="form-control" id="fm-nama-tujuan" placeholder="Nama Lengkap"
    name="tujuan_nama" required value="">
  </div>

  <div class="form-group col-12">
    <label for="fm-no-telp-tujuan">No Telp</label>
    <input type="number" class="form-control no-spinner" id="fm-no-telp-tujuan"
    placeholder="08xxxxx" name="tujuan_no_telp" required value="">
  </div>

  <div class="form-group col-12">
    <label for="fm-kelurahan-tujuan">Desa/ Kelurahan</label>
    <select class="form-control js-kelurahan-tujuan" name="tujuan_kelurahan_id" id="fm-kelurahan-tujuan" required>
      <option></option>
    </select>
  </div>

  <div class="form-group col-12">
    <label for="fm-dusun-tujuan">Nama Dusun</label>
    <select class="form-control js-dusun-tujuan" name="tujuan_dusun_id" id="fm-dusun-tujuan" required>
      <option value="" disabled selected>Pilih Desa/ Kelurahan Dahulu</option>
    </select>
  </div>

  <div class="form-group col-12">
    <label for="fm-nama-jalan-tujuan">Nama Jalan, No Rumah</label>
    <input type="text" class="form-control" id="fm-nama-jalan-tujuan" name="tujuan_nama_jalan" required
    value="">
  </div>

  <div class="form-group col-6">
    <label for="fm-no-rt-tujuan">No RT</label>
    <input type="number" class="form-control" id="fm-no-rt-tujuan" name="tujuan_no_rt" value="">
  </div>
  <div class="form-group col-6">
    <label for="fm-no-rw-tujuan">No RW</label>
    <input type="number" class="form-control" id="fm-no-rw-tujuan" name="tujuan_no_rw" value="">
  </div>

                <div class="form-group mt-4 col-12">
    <h4 class="subtitle">Data Kesehatan</h4>
  </div>

  <div class="form-group mt-2 col-12">
    <strong>Gejala Yang Dirasakan</strong>
  </div>

  <div class="form-group col-12">
    <label>Saat ini saya sedang merasakan demam</label>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-demam-0"
    name="kesehatan_demam"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-demam-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-demam-1"
    name="kesehatan_demam"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-demam-1">Ya</label>
</div>


  </div>

  <div class="form-group col-12">
    <label>Saat ini saya sedang merasakan batuk / pilek</label>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-batuk-0"
    name="kesehatan_batuk"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-batuk-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-batuk-1"
    name="kesehatan_batuk"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-batuk-1">Ya</label>
</div>


  </div>

  <div class="form-group col-12">
    <label>Saat ini saya merasa kesulitan bernafas atau sesak nafas</label>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-sesak-0"
    name="kesehatan_sesak"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-sesak-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-sesak-1"
    name="kesehatan_sesak"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-sesak-1">Ya</label>
</div>


  </div>

  <div class="form-group col-12">
    <label>Saat ini saya sedang mengalami nyeri tenggorokan</label>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-nyeri-tenggorokan-0"
    name="kesehatan_nyeri_tenggorokan"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-nyeri-tenggorokan-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-nyeri-tenggorokan-1"
    name="kesehatan_nyeri_tenggorokan"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-nyeri-tenggorokan-1">Ya</label>
</div>


  </div>

  <div class="form-group col-12">
    <label>Lama penyakit kurang dari 14 hari</label>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-lama-kurang-dari-0"
    name="kesehatan_lama_kurang_dari"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-lama-kurang-dari-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-lama-kurang-dari-1"
    name="kesehatan_lama_kurang_dari"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-lama-kurang-dari-1">Ya</label>
</div>


  </div>

  <div class="form-group mt-2 col-12">
    <strong>Riwayat Kontak</strong>
  </div>

  <div class="form-group col-12">
    <label>Memiliki riwayat kontak erat dengan penderita terkonfirmasi COVID-19 atau probabel COVID-19</label>
    <p class="small text-muted">Melakukan kontak fisik, atau berada dalam satu ruangan, atau berkunjung (berada dalam radius 1 meter dengan kasus pasien dalam pengawasan, probable atau konformasi) dalam 2 hari sebelum kasus timbul gejala dan hingga 14 hari setelah kasus timbul gejala</p>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-kontak-covid-0"
    name="kesehatan_kontak_covid"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-kontak-covid-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-kontak-covid-1"
    name="kesehatan_kontak_covid"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-kontak-covid-1">Ya</label>
</div>


  </div>

  <div class="form-group mt-2 col-12">
    <strong>Riwayat Mobilitas</strong>
  </div>

  <div class="form-group col-12">
    <label>Memiliki riwayat perjalanan atau tinggal diluar negeri yang melakukan penularan lokal</label>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-perjalanan-luarnegeri-0"
    name="kesehatan_perjalanan_luarnegeri"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-perjalanan-luarnegeri-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-perjalanan-luarnegeri-1"
    name="kesehatan_perjalanan_luarnegeri"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-perjalanan-luarnegeri-1">Ya</label>
</div>


  </div>

  <div class="form-group col-12">
    <label>Memiliki riwayat perjalanan atau tinggal diarea penularan lokal di Indonesia</label>
    <div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-perjalanan-lokal-0"
    name="kesehatan_perjalanan_lokal"
    class="custom-control-input"
    value="0"
    
    >
  <label class="custom-control-label" for="kesehatan-perjalanan-lokal-0">Tidak</label>
</div>

<div class="custom-control custom-radio">
  <input type="radio"
    id="kesehatan-perjalanan-lokal-1"
    name="kesehatan_perjalanan_lokal"
    class="custom-control-input"
    value="1"
    
    >
  <label class="custom-control-label" for="kesehatan-perjalanan-lokal-1">Ya</label>
</div>


  </div>

              <div class="form-group">
                <input type="hidden" name="_token" value="K5LcdgYsGq30M756cGQ8oXwQWrs0Oi544mdmH3hw">
                <button type="submit" class="btn btn-primary">Kirim Data</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <footer class="web-footer mt-3 py-4 text-center d-print-none">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Kabupaten Kudus</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Crafted by <a href="http://diskominfo.kuduskab.go.id">Kominfo</a>
    </div>
  </div>
</footer>

  <script src="http://mudik.karanganyarkab.go.id/js/manifest.js?id=7999d63793f040b855fb"></script>
  <script src="http://mudik.karanganyarkab.go.id/js/vendor.js?id=404a7825463eeac65bed"></script>
  <script src="http://mudik.karanganyarkab.go.id/js/app.js?id=183a2eaeea4625f333ea"></script>
</body>
</html>
