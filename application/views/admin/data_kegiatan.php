<div class="container-fluid">
	<div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/data_kegiatan/search') ?>
  <div class="row">
  <div class="col-md-4">
  <input type="text" name="keyword" class="form-control mb-3" placeholder="search">
</div>
<div class="col-md-4">
  <button type="submit" class="btn btn-success mb-3">Cari Nama Kegiatan</button>
</div>
</div>
  <?php echo form_close()?>
</div>
</div>

<div class="container-fluid">
	<div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/data_kegiatan/searchtgl') ?>
  <div class="row">
  <div class="col-md-4">
  <input type="text" name="keywordtgl" class="form-control mb-3" placeholder="search">
</div>
<div class="col-md-4">
  <button type="submit" class="btn btn-success mb-3">Cari Tanggal Kegiatan</button>
</div>
</div>
  <?php echo form_close()?>
</div>
</div>
  
	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>TEMPAT</th>
			<th>ALAMAT</th>
			<th>TANGGAL</th>
			<th>WAKTU</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php
		$no=1;
		foreach($kegiatan as $kg) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $kg->nama_kgt ?></td>
			<td><?php echo $kg->tempat ?></td>
			<td><?php echo $kg->alamat ?></td>
			<td><?php echo $kg->tanggal ?></td>
			<td><?php echo $kg->waktu ?></td>
			
			<td><?php echo anchor('admin/data_kegiatan/edit/' .$kg->no, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
			<td><?php echo anchor('admin/data_kegiatan/hapus/' .$kg->no, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<!-- Modal -->
