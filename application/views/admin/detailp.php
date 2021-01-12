<div class="content-wrapper">
	<section class="content">
		<h4><center><strong>DATA PENDAFTAR</strong></center></h4>
		<table class="table">
		<?php
		
		foreach($detailp as $detailp) : ?>
			<tr>
				<th>No Pendaftar</th>
				<td><?php echo $detailp->no_daftar ?></td>
			</tr>
			<tr>
				<th>Nama Lengkap</th>
				<td><?php echo $detailp->nama ?></td>
			</tr>
			<tr>
				<th>No KTP</th>
				<td><?php echo $detailp->no_ktp ?></td>
			</tr>
			<tr>
				<th>Usia</th>
				<td><?php echo $detailp->usia ?></td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td><?php echo $detailp->jenis_kelamin ?></td>
			</tr>
			<tr>
				<th>No Telp</th>
				<td><?php echo $detailp->no_telp ?></td>
			</tr>
			<tr>
				<th>Donor Terakhir</th>
				<td><?php echo $detailp->donor_terakhir ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</section>
</div>