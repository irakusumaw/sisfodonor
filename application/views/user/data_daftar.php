<div class="container-fluid">
	<center><div class="alert alert-danger" role="alert">
  Tunjukan Pada Petugas Saat Anda Akan Mendonor.
</div></center>

	<table class="table table-borderred">
		<tr>
			<th>NO</th>
			<th>NO PENDAFTAR</th>
			<th>NAMA</th>
			<th>NO KTP</th>
			<th>USIA</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>NO HP</th>
			<th>DONOR TERAKHIR</th>
		</tr>

		<?php
		$no=1;
		foreach ($daftar_donor as $dd) : ?> 
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $dd->no_daftar ?></td>
			<td><?php echo $dd->nama ?></td>
			<td><?php echo $dd->no_ktp ?></td>
			<td><?php echo $dd->usia ?></td>
			<td><?php echo $dd->jenis_kelamin ?></td>
			<td><?php echo $dd->alamat ?></td>
			<td><?php echo $dd->no_telp ?></td>
			<td><?php echo $dd->donor_terakhir ?></td>  
		</tr>

	<?php endforeach; ?>

</table>


