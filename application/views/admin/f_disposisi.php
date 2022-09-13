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
	<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $q_instansi->alamat; ?>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $q_instansi->telp; ?></p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $q_instansi->fax; ?>	 -->
	</td>
	</tr>
	<section>
	<tr><td colspan="3" align="center"><b style="font-size: 18px;">PERMINTAAN PENAMBAHAN USER</b></td></tr>
	</section>
	
	<section>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAMA LENGKAP PEGAWAI <td width="50%">: <?php echo $datpil1->dari; ?></td></tr>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIK / NIP <td width="10%">:</b> <?php echo $datpil1->no_surat; ?></td></tr>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BAGIAN / DEPT / UNIT <td width="10%">:</b> <?php echo $datpil1->kode; ?></td></tr>
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JABATAN / POSISI <td width="10%">:</b> <?php echo $datpil1->isi_ringkas; ?></td></tr>
	<!-- <tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;POSISI <td width="10%">:</b> <?php echo $datpil1->indek_berkas; ?></td></tr> -->
	<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOKASI <td width="10%">: </b><input class="form-check-input" type="checkbox" id="Ya" value="">
		<label class="form-check-label" for="Ya"><b>RSIA FAMILY</label>&nbsp;
		<input class="form-check-input" type="checkbox" id="family" value="">
		<label class="form-check-label" for="grand"><b>RSIA GRAND FAMILY</label></td></tr>
	<!-- <tr><td colspan="3" align="left"><b style="font-size: 14px;">II. RINCIAN KEJADIAN</b></td></tr>
	<tr><td><b>N I P <td width="10%">:</b> <?php echo $datpil1->no_surat; ?></td></tr> -->	
	<!-- <tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jabatan <td width="10%">:</b> <?php echo $datpil1->isi_ringkas; ?></td></tr> -->
	<tr><td colspan="3" style="line-height: 20px"><p align="justify">Selanjutnya disebut sebagai <b><i>USER,</i></b> dengan ini ingin diberikan : </p>
	<tr><td colspan="3" style="line-height: 20px"><p align="justify"><b><i>User Account :</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<input class="form-check-input" type="checkbox" id="Ya" value="">
		<label class="form-check-label" for="Ya"><b>SIMRS</label>&nbsp;&nbsp;&nbsp;
		<input class="form-check-input" type="checkbox" id="simrs" value="">
		<label class="form-check-label" for="grand"><b>RSCLOUD</label>&nbsp;&nbsp;&nbsp;
		<input class="form-check-input" type="checkbox" id="rscloud" value="">
		<label class="form-check-label" for="Ya"><b>PC</label>&nbsp;&nbsp;&nbsp;
		<input class="form-check-input" type="checkbox" id="pc" value="">
		<label class="form-check-label" for="grand"><b>EMAIL</label>&nbsp;&nbsp;&nbsp;
		<input class="form-check-input" type="checkbox" id="internet" value="">
		<label class="form-check-label" for="Ya"><b>INTERNET</label>
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" type="checkbox" id="lainnya" value="">
		<label class="form-check-label" for="grand"><b>LAINNYA ...</label>
		</td></tr>
		<tr><td colspan="3" style="line-height: 20px"><p align="justify">Pada Sistem Informasi Manajemen Rumah Sakit (SIMRS) untuk menjalankan pekerjaan sesuai dengan tanggung jawab yang diberikan. Adapun tanggung jawab yang diberikan adalah sebagai berikut :</p>
		<center><b><?php echo $datpil1->akses_menu; ?></b></center>
		</td>
		</tr>
		<td colspan="3" style="line-height: 20px"><p align="justify">Maka dengan ini ingin meminta persetujuan oleh Direktur Rumah Sakit untuk diberikan 
			Akses Account untuk menyelesaikan Perkerjaan dan Tanggung Jawab yang diberikan.
			Petugas terkait akan membantu melakukan proses Penambahan User dengan Persetujuan Direktur Rumah Sakit.</p>
		</td>
		<tr>
		<td valign="top" colspan="3" style="text-align: right;">
		Jakarta, <?php echo tgl_jam_sql($datpil1->tgl_surat) ?>
	</td>
	<tr>
	<td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Pemohon<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User,<br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		(_____________________)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i>Nama Lengkap & TTD
	</td>
	<td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 Mengetahui<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Atasan Langsung,<br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 (_____________________)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i>Nama Lengkap & TTD
	</td>
	</tr>
	<tr>
	<td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Mengetahui<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Direktur RS,<br><br><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(_____________________)<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i>Nama Lengkap & TTD		
	</td>
	<td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		Menyetujui / Tidak Menyetujui <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chief Finance Officer,<br><br><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(_____________________)<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<i>Nama Lengkap & TTD	
	</td>
    </tr>
</table>
</body>
</html>
