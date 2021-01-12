<div class="container-fluid">
  <div class="navbar-form" class="navbar-right">
  <?php echo form_open('admin/data_pendaftar/search') ?>
  <div class="row">
  <div class="col-md-4">
  <input type="text" name="keyword" class="form-control mb-3" placeholder="search">
  </div>
<div class="col-md-4">
  <button type="submit" class="btn btn-success mb-3">Cari No Pendaftar / KTP</button>
  
</div>
</div>
  <?php echo form_close()?>
</div>
</div>

	
	<table class="table table-borderred">
		<tr>
			<th>NO</th>
			<th>NO PENDAFTAR</th>
			<th>NAMA</th>
			<th>USIA</th>
			<th>JENIS KELAMIN</th>
			<th>ALAMAT</th>
			<th>DONOR TERAKHIR</th>
		</tr>

		<?php
		$no=1;
		foreach ($daftar_donor as $dd) : ?> 
		
		<tr>
			<td><?php echo $no++?></td>
			<td><a href="<?=base_url();?>/admin/data_pendaftar/detail/<?=$dd->no_daftar?>"><?php echo $dd->no_daftar ?></td>
			<td><?php echo $dd->nama ?></td>
			<td><?php echo $dd->usia ?></td>
			<td><?php echo $dd->jenis_kelamin ?></td>
			<td><?php echo $dd->alamat ?></td>
			<td><?php echo $dd->donor_terakhir ?></td>  
			<td><?php echo anchor('admin/data_pendaftar/edit/' .$dd->no_daftar, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
			<td><?php echo anchor('admin/data_pendaftar/hapus/' .$dd->no_daftar, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?> </td>
		</tr>

	<?php endforeach; ?>

</table>


