<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA PENDONOR</h3>

	<?php foreach ($pendonor  as $pdr) : ?> 

		<form method="post" action="<?php echo base_url(). 'admin/data_pendonor/update' ?>">
                     <?php echo form_open_multipart('admin/data_pendonor/update');  ?>
                     <div class="for-group">
                      <input type="text" name="no" class="form-control" value="<?php echo $pdr->no ?>">
                      </div>
                     <div class="for-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" value="<?php echo $pdr->tanggal ?>">
                     </div>
			<div class="for-group">
				<label>Nama Petugas</label>
				<input type="text" name="nama_petugas" class="form-control" value="<?php echo $pdr->nama_petugas ?>">
			</div>

			<div class="form-group">
       			<label>No Pendaftar</label>
       			<input type="text" name="no_pendaftar" class="form-control" value="<?php echo $pdr->no_pendaftar ?>">
       		</div>

       		<div class="form-group">
       			<label>Kadar HB</label>
       			<input type="text" name="hb" class="form-control" value="<?php echo $pdr->hb ?>">
       		</div>

       		<div class="form-group">
       			<label>Berat Badan</label>
       			<input type="text" name="bb" class="form-control" value="<?php echo $pdr->bb ?>">
       		</div>

       		<div class="form-group">
       			<label>Tekanan Darah</label>
       			<input type="text" name="tekanan_darah" class="form-control" value="<?php echo $pdr->tekanan_darah ?>">
       		</div>

       		<div class="form-group">
       			<label>Golongan Darah</label>
                            <select name="golongan_darah">
              			<option><?php echo $pdr->golongan_darah ?></option>
                                   <option value="A">A</option>
                                   <option value="B">B</option>
                                   <option value="AB">AB</option>
                                   <option value="O">O</option>
                            </select>
       		</div>

       		<div class="form-group">
       			<label>Status</label>
       			<input type="text" name="status" class="form-control" value="<?php echo $pdr->status ?>">
       		</div>
                     <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $pdr->keterangan ?>">
                     </div>

       		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>

		
		</form>	
	
	<?php endforeach; ?>

</div>
	