<div class="container-fluid">
  <div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/laporan/search') ?>
  <div class="row">
  <div class="col-md-4">
  <input type="text" name="keyword" class="form-control mb-3" placeholder="search">
  </div>
<div class="col-md-4">
  <button type="submit" class="btn btn-success mb-3">Cari Data Darah</button>
  
</div>
</div>
  <?php echo form_close()?>
</div>
</div>
<div class="container-fluid">
	<h4><center><strong>DATA DARAH</strong></center></h4>
	<button onclick="window.print();">Cetak</button>
	<table class="table table-bordered">
		<tr>
<!-- 			<th>ID</th> -->
			<th>NO</th>
			<th>NAMA PENDONOR</th>
			<th>NAMA KEGIATAN</th>
			<th>NAMA PETUGAS</th>
			<th>TANGGAL</th>
			<th>HEMOGLOBIN</th>
			<th>BERAT BADAN</th>
			<th>TEKANAN DARAH</th>
			<th>GOLONGAN DARAH</th>
		</tr>
		<?php
		$no=1;
		foreach($j as $j) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $j->nama ?></td>
			<td><?php echo $j->nama_kgt ?></td>
			<td><?php echo $j->nama_petugas ?></td>
			<td><?php echo $j->tanggal ?></td>
			<td><?php echo $j->hb ?></td>
			<td><?php echo $j->bb ?></td>
			<td><?php echo $j->tekanan_darah ?></td>
			<td><?php echo $j->golongan_darah ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>