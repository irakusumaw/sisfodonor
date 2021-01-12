<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA PETUGAS</h3>

	<?php foreach ($petugas  as $ptg) : ?> 

		<form method="post" action="<?php echo base_url(). 'admin/data_petugas/update' ?>">
              <?php echo form_open_multipart('admin/data_petugas/update');  ?>
              <div class="for-group">
                     <input type="text" name="no" class="form-control" value="<?php echo $ptg->no ?>">
              </div>
			<div class="for-group">
				<label>Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $ptg->nama ?>">
			</div>

			<div class="form-group">
       			<label>Tempat Lahir</label>
       			<input type="text" name="tempatlahir" class="form-control" value="<?php echo $ptg->tempatlahir ?>">
       		</div>
                     <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="text" name="tanggallahir" class="form-control" value="<?php echo $ptg->tanggallahir ?>">
                     </div>

       		<div class="form-group">
       			<label>Jenis Kelamin</label>
       			<input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $ptg->jenis_kelamin ?>">
       		</div>

       		<div class="form-group">
       			<label>Alamat</label>
       			<input type="text" name="alamat" class="form-control" value="<?php echo $ptg->alamat ?>">
       		</div>

       		<div class="form-group">
       			<label>Tugas</label>
       			<input type="text" name="tugas" class="form-control" value="<?php echo $ptg->tugas ?>">
       		</div>

       		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>

		
		</form>	
	
	<?php endforeach; ?>

</div>
	