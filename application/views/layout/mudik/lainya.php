<html>

<head></head>

<body>
	<form>
		Radio: <input type="radio" name="rad" id="rad1" value="1" class="rad" /> Form1
		<input type="radio" name="rad" id="rad2" value="2" class="rad" /> Form2
		<!-- form yang mau ditampilkan-->
		<div id="form1" style="display:none">
			Input1: <input name="input" type="text" />
		</div>
		<div id="form2" style="display:none">
			Input2: <input name="input" type="text" />
		</div>
	</form>
	<!-- tambahkan jquery-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$(":radio.rad").click(function() {
				$("#form1, #form2").hide()
				if ($(this).val() == "1") {
					$("#form1").show();
				} else {
					$("#form2").show();
				}
			});
		});
	</script>
</body>

</html>

<div class="form-group col-12">
	<label for="fm-nama-tujuan">Nama yang dituju</label>
	<input type="text" class="form-control" id="fm-nama-tujuan" placeholder="Nama Lengkap" name="tujuan_nama" required value="">
</div>

<div class="form-group col-12">
	<label for="fm-no-telp-tujuan">No Telp</label>
	<input type="number" class="form-control no-spinner" id="fm-no-telp-tujuan" placeholder="08xxxxx" name="tujuan_no_telp" required value="">
</div>

<div class="form-group col-12">
	<label for="fm-tgl-lahir">Provinsi</label>
	<select class='form-control select21' id='provinsi' name='provinsi' data-width="100%">
		<option value='0'>Pilih Provinsi</option>
		<?php
		foreach ($provinsi as $prov) {
			echo "<option value='$prov[id]'>$prov[name]</option>";
		}
		?>
	</select>
</div>

<div class='form-group col-12'>
	<label>Kabupaten/Kota</label>
	<select class='form-control' id='kabupaten-kota' name="kabupaten">
		<option value='0'>Pilih Kabupaten/Kota</option>
	</select>
</div>

<div class='form-group col-12'>
	<label>Kecamatan</label>
	<select class='form-control' id='kecamatan' name="kecamatan">
		<option value='0'>Pilih Kecamatan</option>
	</select>
</div>

<div class='form-group col-12'>
	<label>Kelurahan/Desa</label>
	<select class='form-control' id='kelurahan-desa' name="kelurahan">
		<option value='0'>Pilih Kelurahan/Desa</option>
	</select>
</div>


<div class="form-group col-12">
	<label>Kondisi Saat ini</label>
	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-demam-0" name="kesehatan_demam" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-demam-0">Sehat</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-demam-1" name="kesehatan_demam" class="custom-control-input" value="1">
		<label class="custom-control-label" for="kesehatan-demam-1">Sakit</label>
	</div>


</div>

<div class="form-group col-12">
	<label>Saat ini saya sedang merasakan batuk / pilek</label>
	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-batuk-0" name="kesehatan_batuk" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-batuk-0">Tidak</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-batuk-1" name="kesehatan_batuk" class="custom-control-input" value="1">
		<label class="custom-control-label" for="kesehatan-batuk-1">Ya</label>
	</div>


</div>

<div class="form-group col-12">
	<label>Saat ini saya merasa kesulitan bernafas atau sesak nafas</label>
	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-sesak-0" name="kesehatan_sesak" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-sesak-0">Tidak</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-sesak-1" name="kesehatan_sesak" class="custom-control-input" value="1">
		<label class="custom-control-label" for="kesehatan-sesak-1">Ya</label>
	</div>


</div>

<div class="form-group col-12">
	<label>Saat ini saya sedang mengalami nyeri tenggorokan</label>
	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-nyeri-tenggorokan-0" name="kesehatan_nyeri_tenggorokan" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-nyeri-tenggorokan-0">Tidak</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-nyeri-tenggorokan-1" name="kesehatan_nyeri_tenggorokan" class="custom-control-input" value="1">
		<label class="custom-control-label" for="kesehatan-nyeri-tenggorokan-1">Ya</label>
	</div>


</div>

<div class="form-group col-12">
	<label>Lama penyakit kurang dari 14 hari</label>
	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-lama-kurang-dari-0" name="kesehatan_lama_kurang_dari" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-lama-kurang-dari-0">Tidak</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-lama-kurang-dari-1" name="kesehatan_lama_kurang_dari" class="custom-control-input" value="1">
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
		<input type="radio" id="kesehatan-kontak-covid-0" name="kesehatan_kontak_covid" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-kontak-covid-0">Tidak</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-kontak-covid-1" name="kesehatan_kontak_covid" class="custom-control-input" value="1">
		<label class="custom-control-label" for="kesehatan-kontak-covid-1">Ya</label>
	</div>


</div>

<div class="form-group mt-2 col-12">
	<strong>Riwayat Mobilitas</strong>
</div>

<div class="form-group col-12">
	<label>Memiliki riwayat perjalanan atau tinggal diluar negeri yang melakukan penularan lokal</label>
	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-perjalanan-luarnegeri-0" name="kesehatan_perjalanan_luarnegeri" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-perjalanan-luarnegeri-0">Tidak</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-perjalanan-luarnegeri-1" name="kesehatan_perjalanan_luarnegeri" class="custom-control-input" value="1">
		<label class="custom-control-label" for="kesehatan-perjalanan-luarnegeri-1">Ya</label>
	</div>


</div>

<div class="form-group col-12">
	<label>Memiliki riwayat perjalanan atau tinggal diarea penularan lokal di Indonesia</label>
	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-perjalanan-lokal-0" name="kesehatan_perjalanan_lokal" class="custom-control-input" value="0">
		<label class="custom-control-label" for="kesehatan-perjalanan-lokal-0">Tidak</label>
	</div>

	<div class="custom-control custom-radio">
		<input type="radio" id="kesehatan-perjalanan-lokal-1" name="kesehatan_perjalanan_lokal" class="custom-control-input" value="1">
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
<div class='form-group col-12'>
	<label>Kabupaten/Kota</label>
	<select class='form-control select2' id='kabupaten-kota' name="kabtujuan" required3>
		<option value='0'>Pilih Kabupaten/Kota</option>
		<?php
		foreach ($provinsi as $prov) {
			echo "<option value='$prov[id]'>$prov[name]</option>";
		}
		?>
	</select>
</div>
