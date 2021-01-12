<div class="container-fluid">
	<center><div class="alert alert-info" role="alert">
  JADWAL DONOR DARAH. SIAPKAN DIRI ANDA!
</div></center>
	<table class="table table-bordered">
		<tr>
<!-- 			<th>ID</th> -->
			<th>NAMA</th>
			<th>TEMPAT</th>
			<th>ALAMAT</th>
			<th>TANGGAL</th>
			<th>WAKTU</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php
		foreach($kegiatan as $kg) : ?>
		<tr>
<!-- 			<td><?php echo $id++ ?></td> -->
			<td><?php echo $kg->nama_kgt ?></td>
			<td><?php echo $kg->tempat ?></td>
			<td><?php echo $kg->alamat ?></td>
			<td><?php echo $kg->tanggal ?></td>
			<td><?php echo $kg->waktu ?></td>
			<td><a class="collapse-item" href="<?php echo base_url('user/daftar_donor')?>"><i class="fas fa-edit fa-sm"></i> Daftar</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

