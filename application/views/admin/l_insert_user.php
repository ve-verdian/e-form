<div class="clearfix">

<div class="panel panel-info">
	<div class="panel-heading" style="overflow: auto">
		<div class="col-md-2"><h3 style="margin-top: 5px">Input Data</h3></div>
		<div class="col-md-2">
			<a href="<?php echo base_URL(); ?>admin/insert_user/add" class="btn btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form class="navbar-form navbar-left" method="post" action="<?php echo base_URL(); ?>admin/insert_user/cari" style="margin-top: 0px">
				<input type="text" class="form-control" name="q" style="width: 200px" placeholder="Kata kunci pencarian ..." required>
				<button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
			</form>
		</div>
	</div>
</div>

<?php echo $this->session->flashdata("k");?>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="10%">No. Reg</th>
			<th width="27%">Nama Pegawai, NIP</th>
			<th width="20%">Bagian, Jabatan</th>
			<!-- <th width="15%">Email, User Login</th> -->
			<th width="15%">Tgl Input</th>
			<th width="23%">Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php 
		if (empty($data)) {
			echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		} else {
			$no 	= ($this->uri->segment(4) + 1);
			foreach ($data as $b) {
		?>
		<?php  
				if ($b->pengolah == $this->session->userdata('admin_id')) {
				?>
		<tr>
			<td><?php echo $b->no_agenda;?></td>
			<td><?php echo $b->dari. "<br><i>".$b->no_surat; ?></td>
			<td><?php echo $b->kode. "<br><i>" .$b->isi_ringkas; ?></td>
			<!-- <td><?php echo $b->indek_berkas. "<br><i>".$b->keterangan; ?></td> -->
			<td><?php echo tgl_jam_sql($b->tgl_surat); ?></td>
			
			<td class="ctr">
				<div class="btn-group; justify">
					<a href="<?php echo base_URL()?>admin/insert_user/edt/<?php echo $b->id?>" class="btn btn-success btn-sm" title="Edit Data"><i class="icon-edit icon-white"> </i> Edt</a>
					<a href="<?php echo base_URL()?>admin/insert_user/del/<?php echo $b->id?>" class="btn btn-warning btn-sm" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="icon-trash icon-remove">  </i> Del</a>			
					<a href="<?php echo base_URL()?>admin/surat_disposisi/<?php echo $b->id?>" class="btn btn-default btn-sm"  title="Disposisi Surat"><i class="icon-trash icon-list"> </i> Disp</a>
					<a href="<?php echo base_URL()?>admin/user_cetak/<?php echo $b->id?>" class="btn btn-info btn-sm" target="_blank" title="Cetak Disposisi"><i class="icon-print icon-white"> </i> Ctk</a>
				</div>	
				<?php 
				} 
				?>
			</td>
		</tr>
		<?php 
			$no++;
			}
		}
		?>
	</tbody>
</table>
<center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>
