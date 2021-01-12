<div class="content-wrapper">
	<section class="content">
		<h4><center><strong>DATA PENDONOR</strong></center></h4>
		<table class="table">
		<?php
		
		foreach($detail as $detail) : ?>
			<tr>
				<th>No Pendaftar</th>
				<td><?php echo $detail->no_daftar ?></td>
			</tr>
			<tr>
				<th>Nama Lengkap</th>
				<td><?php echo $detail->nama ?></td>
			</tr>
			<tr>
				<th>No KTP</th>
				<td><?php echo $detail->no_ktp ?></td>
			</tr>
			<tr>
				<th>Usia</th>
				<td><?php echo $detail->usia ?></td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td><?php echo $detail->jenis_kelamin ?></td>
			</tr>
			<tr>
				<th>No Telp</th>
				<td><?php echo $detail->no_telp ?></td>
			</tr>
			<tr>
				<th>Donor Terakhir</th>
				<td><?php echo $detail->donor_terakhir ?></td>
			</tr>
			<tr>
				<th>Nama Petugas</th>
				<td><?php echo $detail->nama_petugas ?></td>
			</tr>
			<tr>
				<th>Tanggal</th>
				<td><?php echo $detail->tanggal ?></td>
			</tr>
			<tr>
				<th>Hemoglobin</th>
				<td><?php echo $detail->bb ?></td>
			</tr>
			<tr>
				<th>Berat Badan</th>
				<td><?php echo $detail->bb?></td>
			</tr>
			<tr>
				<th>Tekanan Darah</th>
				<td><?php echo $detail->tekanan_darah ?></td>
			</tr>
			<tr>
				<th>Golongan Darah</th>
				<td><?php echo $detail->golongan_darah ?></td>
			</tr>
			<tr>
				<th>Status</th>
				<td><?php echo $detail->status ?></td>
			</tr>
			<tr>
				<th>Keterangan</th>
				<td><?php echo $detail->keterangan ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</section>
</div>