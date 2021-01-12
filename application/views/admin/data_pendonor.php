<div class="container-fluid">
  <div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/data_pendonor/search') ?>
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
	<table class="table table-borderred">
		<tr>
			<th>NO</th>
			<th>TANGGAL</th>
			<th>NAMA KEGIATAN</th>
			<th>NAMA PETUGAS</th>
			<th>NO PENDAFTAR</th>
			<th>KADAR HB</th>
			<th>BERAT BADAN</th>
			<th>TEKANAN DARAH</th>
			<th>GOLONGAN DARAH</th>
			<th>STATUS</th>
			<th>KETERANGAN</th>
			<th colspan="2">AKSI</th>
		</tr>

		<?php
		$no=1;
		foreach ($pendonor as $pdr) : ?> 
		
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pdr->tanggal ?></td>
			<td><?php echo $pdr->nama_kgt ?></td>
			<td><?php echo $pdr->nama_petugas ?></td>
			<td><a href="<?=base_url();?>admin/data_pendonor/detail/<?=$pdr->no_pendaftar?>"><?php echo $pdr->no_pendaftar ?></td>
			<td><?php echo $pdr->hb ?></td>
			<td><?php echo $pdr->bb ?></td>
			<td><?php echo $pdr->tekanan_darah ?></td>
			<td><?php echo $pdr->golongan_darah ?></td>
			<td><?php echo $pdr->status ?></td>
			<td><?php echo $pdr->keterangan ?></td>
			<td><?php echo anchor('admin/data_pendonor/edit/' .$pdr->no, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
			<td><?php echo anchor('admin/data_pendonor/hapus/' .$pdr->no, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
		</tr>

	<?php endforeach; ?>

</table>
</div>

