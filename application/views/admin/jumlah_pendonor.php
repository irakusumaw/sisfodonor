<div class="container-fluid">
  <div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/jumlah_pendonor/search') ?>
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
	<h4><center><strong>DAFTAR PENDONOR DITERIMA</strong></center></h4>
	<button onclick="window.print();">Cetak</button>
	<table class="table table-bordered">
		<tr>
<!-- 			<th>ID</th> -->
			<th>NO</th>
			<th>TANGGAL</th>
			<th>NAMA KEGIATAN</th>
			<th>NAMA PENDONOR</th>
			<th>JENIS KELAMIN</th>
			<th>USIA</th>
			<th>GOLONGAN DARAH</th>
		</tr>
		<?php
		$no=1;
		foreach($p as $p) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->tanggal ?></td>
			<td><?php echo $p->nama_kgt ?></td>
			<td><?php echo $p->nama ?></td>
			<td><?php echo $p->jenis_kelamin ?></td>
			<td><?php echo $p->usia ?></td>
			<td><?php echo $p->golongan_darah ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>