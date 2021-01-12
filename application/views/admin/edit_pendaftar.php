<div class="container-fluid">
  <h3><i class="fas fa-edit"></i>EDIT DATA PENDONOR</h3>

  <?php foreach ($daftar_donor  as $dd) : ?> 

    <form method="post" action="<?php echo base_url(). 'admin/data_pendaftar/update' ?>">
      <?php echo form_open_multipart('admin/data_pendaftar/update');  ?>
      <div class="for-group">
          <input type="text" name="no_daftar" class="form-control" value="<?php echo $dd->no_daftar ?>">
      </div>
      <div class="for-group">
        <label>Nama Pendaftar</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $dd->nama ?>">
      </div>

      <div class="form-group">
            <label>No KTP</label>
            <input type="text" name="no_ktp" class="form-control" value="<?php echo $dd->no_ktp ?>">
          </div>

          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempatlahir" class="form-control" value="<?php echo $dd->tempatlahir ?>">
          </div>

          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggallahir" class="form-control" value="<?php echo $dd->tanggallahir ?>">
          </div>

          <div class="form-group">
            <label>Usia</label>
            <input type="text" name="usia" class="form-control" value="<?php echo $dd->usia ?>">
          </div>

          <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $dd->jenis_kelamin ?>">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $dd->alamat ?>">
          </div>
          <div class="form-group">
            <label>No Telp</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo $dd->no_telp ?>">
          </div>
          <div class="form-group">
            <label>Donor Terakhir</label>
            <input type="text" name="donor_terakhir" class="form-control" value="<?php echo $dd->donor_terakhir ?>">
          </div>


          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

    
    </form> 
  
  <?php endforeach; ?>

</div>
  