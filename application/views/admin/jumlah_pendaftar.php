<div class="container-fluid">
  <div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/data_pendaftar/search') ?>
  <div class="row">
  <div class="col-md-4">
  <input type="text" name="keyword" class="form-control mb-3" placeholder="search">
  </div>
<div class="col-md-4">
  <button type="submit" class="btn btn-success mb-3">Cari Nama Pendaftar</button>
</div>
</div>
  <?php echo form_close()?>
</div>
</div>
	<button onclick="window.print();">Cetak</button>
	<table class="table table-borderred">
		<tr>
			<th>NO</th>
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


