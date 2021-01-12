<div class="container-fluid">
	<div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/data_petugas/search') ?>
  <div class="row">
  <div class="col-md-4">
  <input type="text" name="keyword" class="form-control mb-3" placeholder="search">
</div>
<div class="col-md-4">
  <button type="submit" class="btn btn-success mb-3">Cari Nama Petugas</button>
</div>
</div>
  <?php echo form_close()?>
</div>
</div>

  
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>TUGAS</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php
		$no=1;
		foreach($petugas as $ptg) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $ptg->nama ?></td>
			<td><?php echo $ptg->tempatlahir ?></td>
			<td><?php echo $ptg->tanggallahir ?></td>
			<td><?php echo $ptg->jenis_kelamin ?></td>
			<td><?php echo $ptg->alamat ?></td>
			<td><?php echo $ptg->tugas ?></td>
			<td><?php echo anchor('admin/data_petugas/edit/' .$ptg->no, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
			<td><?php echo anchor('admin/data_petugas/hapus/' .$ptg->no, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<!-- Modal -->
