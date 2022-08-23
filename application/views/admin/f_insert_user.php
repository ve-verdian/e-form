

<?php
$mode		= $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
	$act		= "act_edt";
	$idp		= $datpil->id;
	$no_agenda	= $datpil->no_agenda; 		// No. Registrasi
	$indek_berkas= $datpil->indek_berkas; 	// Email
	$kode		= $datpil->kode; 			// Bagian
	$dari		= $datpil->dari; 			// Nama Pegawai
	$no_surat	= $datpil->no_surat; 		// N I P
	$tgl_surat	= $datpil->tgl_surat; 		// Tanggal Input
	$uraian		= $datpil->isi_ringkas; 	// Jabatan
	$ket		= $datpil->keterangan; 		// User Login SIM-RS
	$nomor_hp	= $datpil->nomor_hp;
	$akses_menu = $datpil->akses_menu;

} else {
	$act		= "act_add";
	$idp		= "";
	$no_agenda	= $nomer_terakhir;
	$indek_berkas="";
	$kode		= "";
	$dari		= "";
	$no_surat	= "";
	$tgl_surat	= "";
	$uraian		= "";
	$ket		= "";
	$nomor_hp	= "";
	$akses_menu = "";
}
?>

	<div class="panel panel-info">
		<div class="panel-heading"><h3 style="margin-top: 5px">Input Data</h3></div>
	</div>

	<form action="<?php echo base_URL(); ?>admin/insert_user/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="idp" value="<?php echo $idp; ?>">
	
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td width="20%">No. Reg</td><td><b><input type="text" name="no_agenda" autofocus tabindex="1" required value="<?php echo $no_agenda; ?>" style="width: 100px" class="form-control"></b></td></tr>
		<tr><td width="20%">Nama Pegawai</td><td><b><input type="text" name="dari" tabindex="2" required value="<?php echo $dari; ?>" id="dari" style="width: 300px" class="form-control"></b></td></tr>	
		<tr><td width="20%">NIP</td><td><b><input type="text" name="no_surat" tabindex="3" required value="<?php echo $no_surat; ?>" id="no_surat" style="width: 100px" class="form-control"></td></tr>	
		<tr><td width="20%">Bagian</td><td><b><input type="text" name="kode" tabindex="4" required value="<?php echo $kode; ?>" id="kode" style="width: 150px" class="form-control"></b></td></tr>
		<tr><td width="20%">Jabatan</td><td><b><input type="text" name="uraian"  tabindex="5" required value="<?php echo $uraian; ?>" id="uraian" style="width: 150px" class="form-control"></b></td></tr> 
		</table>
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="11" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>admin/insert_user" class="btn btn-success" tabindex="12" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
	</div>
	
	<div class="col-lg-6">	
		<table  class="table-form">
		<tr><td width="20%">Email</td><td><b><input type="text" name="indek_berkas" tabindex="7" value="<?php echo $indek_berkas; ?>" style="width: 300px" class="form-control"></b></td></tr>
		<!-- <tr><td width="20%">No. HP</td><td><b><input type="text" name="nomor_hp" tabindex="8" value="<?php echo $nomor_hp; ?>" style="width: 180px" class="form-control"></b></td></tr>	 -->
		<!-- <tr><td width="20%">File Surat (Scan)</td><td><b><input type="file" name="file_surat" tabindex="8" class="form-control" style="width: 200px"></b></td></tr> -->
		<tr><td width="20%">User Account</td><td><b><input type="text" name="ket" value="<?php echo strip_tags ($ket); ?>" tabindex="9" style="width: 150px" class="form-control"></b></td></tr>
		<tr><td width="20%">Akses Menu</td><td><b><input type="text" class="form-control" name="akses_menu" id="akses_menu" tabindex="10" row="3" value="<?php echo $akses_menu; ?>"></tr>
		<tr><td width="20%">Tanggal Input</td><td><b><input type="text" name="tgl_surat" tabindex="6" required value="<?php echo $tgl_surat; ?>" id="tgl_surat" style="width: 100px" class="form-control"></b></td></tr>
		</table>	
	</div>

	</div>
	
	</form>
