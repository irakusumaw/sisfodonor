<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT JADWAL DONOR</h3>

	<?php foreach ($kegiatan  as $kg) : ?> 

		<form method="post" action="<?php echo base_url(). 'admin/data_kegiatan/update' ?>">
              <?php echo form_open_multipart('admin/data_kegiatan/update');  ?>
              <div class="for-group">
                     <input type="text" name="no" class="form-control" value="<?php echo $kg->no ?>">
              </div>
			<div class="for-group">
				<label>Nama Kegiatan</label>
				<input type="text" name="nama_kgt" class="form-control" value="<?php echo $kg->nama_kgt ?>">
			</div>

			<div class="form-group">
       			<label>Tempat</label>
       			<input type="text" name="tempat" class="form-control" value="<?php echo $kg->tempat ?>">
       		</div>

       		<div class="form-group">
       			<label>Alamat</label>
       			<input type="text" name="alamat" class="form-control" value="<?php echo $kg->alamat ?>">
       		</div>

       		<div class="form-group">
       			<label>Tanggal</label>
       			<input type="text" name="tanggal" class="form-control" value="<?php echo $kg->tanggal ?>">
       		</div>

       		<div class="form-group">
       			<label>Waktu</label>
       			<input type="text" name="waktu" class="form-control" value="<?php echo $kg->waktu ?>">
       		</div>

       		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>

		
		</form>	
	
	<?php endforeach; ?>

</div>
	