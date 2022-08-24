<!-- <?php 
$q_instansi	= $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
?> -->

<html>
<head>
<title>Cetak User Baru</title>
<link rel="shortcut icon" href="<?=base_url('aset/img/rsia_family.jpeg')?>">
<style type="text/css" media="print">
	/* table {border: solid 1px #000; border-collapse: collapse; width: 100%} */
	tr { border: solid 1px #000}
	td { padding: 7px 5px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; border-collapse: collapse; width: 60%}
	tr { border: solid 1px #000}
	td { padding: 7px 5px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
</head>

<body onload="window.print()">
<table>
	<tr><td colspan="3" ><img src="http://192.168.100.66/e-form/aset/img/fam.png" style="width:155px;height:90px;" align="left">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $q_instansi->alamat; ?>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $q_instansi->telp; ?></p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $q_instansi->fax; ?>	
	</td>
	</tr>
	<section>
	<tr><td colspan="3" align="center"><b style="font-size: 18px;">PERMINTAAN PENAMBAHAN USER ACCOUNT</b></td></tr>
	</section>
	
	<section>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Pegawai <td width="50%">: <?php echo $datpil1->dari; ?></td></tr>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N I P <td width="10%">:</b> <?php echo $datpil1->no_surat; ?></td></tr>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian <td width="10%">:</b> <?php echo $datpil1->kode; ?></td></tr>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan <td width="10%">:</b> <?php echo $datpil1->isi_ringkas; ?></td></tr>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email <td width="10%">:</b> <?php echo $datpil1->indek_berkas; ?></td></tr>
	<!-- <tr><td><b>No. HP <td width="10%">:</b> </td></tr> -->
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Account  <td width="10%">:</b> <?php echo $datpil1->keterangan; ?></td></tr>
	<!-- <tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Account  <td width="10%">: </b></td></tr> -->
	<!-- <tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal  <td width="10%">:</b> </td><td><b>Pukul :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>WIB</b></td></tr>
	</section>
	<section> -->
	<!-- <tr><td colspan="3" align="left"><b style="font-size: 14px;">II. RINCIAN KEJADIAN</b></td></tr>
	<tr><td colspan="3" align="left"><b style="font-size: 14px;">1. Tanggal dan Waktu Insiden</b></td></tr>		
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal  <td width="10%">:</b> </td><td><b>Pukul :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>WIB</b></td></tr>
	<tr><td><b>N I P <td width="10%">:</b> <?php echo $datpil1->no_surat; ?></td></tr> -->
	<!-- <tr><td colspan="3" align="left"><b style="font-size: 14px;">2. Insiden :</b></td></tr>	
	<!-- <tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan <td width="10%">:</b> <?php echo $datpil1->isi_ringkas; ?></td></tr> -->
	
	<tr><td colspan="3" style="line-height: 30px"><p align="justify">Selanjutnya disebut sebagai <b><i>USER,</i></b> dengan ini ingin diberikan user account pada Sistem Informasi Manajemen 
		Rumah Sakit ( SIM - RS ) untuk menjalankan pekerjaan sesuai dengan tanggung jawab yang diberikan. Adapun tanggung jawab 
		yang diberikan adalah sebagai berikut :</p>
		<center><b><?php echo $datpil1->akses_menu; ?></b></center>
	</td></tr>
	<td colspan="3" style="line-height: 30px"><p align="justify">Maka dengan ini ingin meminta persetujuan oleh Direktur untuk diberikan menu – menu pada
		SIM – RS yang digunakan untuk menyelesaikan perkerjaan dan tanggung jawab yang diberikan.</p>
		<span>Diberikan Akses RS Cloud &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span> 
		<input class="form-check-input" type="checkbox" id="Ya" value="">
		<label class="form-check-label" for="Ya">Ya</label>
		<input class="form-check-input" type="checkbox" id="Tidak" value="">
		<label class="form-check-label" for="Tidak">Tidak</label>
		<br>
		<span>Data yang di Akses &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span>
		<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		<label class="form-check-label" for="inlineCheckbox1">Indikator Mutu</label>
		<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		<label class="form-check-label" for="inlineCheckbox2">Akreditasi</label>
		<br>
		<span>User Account & Password RS Cloud &nbsp;&nbsp;:</span>
		<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
		<label class="form-check-label" for="inlineCheckbox1">Disamakan</label>
		<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
		<label class="form-check-label" for="inlineCheckbox2">Berbeda&nbsp;&nbsp;&nbsp;________________</label>
		<br>
		IT akan membantu untuk melakukan proses pembuatan user dengan persetujuan Direktur.<br>
	</td>
	<tr>
		<td valign="top" colspan="3" style="text-align: right;">
		Jakarta, <?php echo tgl_jam_sql($datpil1->tgl_surat) ?>
	</td>
	<tr>
	<td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Pemohon,<br><br><br><br>
		(_____________________)<br>&nbsp; 
		<i>Nama dan Tanda Tangan
	</td>
	<td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 Mengetahui,<br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 (_____________________)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i>Atasan Langsung
	</td>
	<td valign="top">
		Menyetujui / Tidak Menyetujui,<br><br><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(_____________________)<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i>Direktur
	</td>
    </tr>
</table>
</body>
</html>
