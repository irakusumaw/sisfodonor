<div class="container-fluid">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit">FORM INPUT PEGAWAI</i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/input_petugas/tambah_aksi'; ?>" method="post">

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label>No Petugas</label>
              </div>
            <div class="col-md-8">
            <input type="text" name="no" class="form-control" value="<?php echo $no; ?>" readonly="readonly">
          </div>
          </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
            <label>Nama Lengkap</label>
            </div>
            <div class="col-md-8">
            <input type="text" name="nama" class="form-control">
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
            <label>Tempat Tanggal Lahir</label>
             </div>
            <div class="col-md-4">
            <input type="text" name="tempatlahir" class="form-control">
            </div>
            <div class="col-md-3">
            <input type="date" name="tanggallahir" class="form-control">
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
            <label>Jenis Kelamin</label>
            </div>
            <div class="col-md-3">
            <select class="form-control" name="jenis_kelamin">
                      <option disabled="" selected="">Pilih Jenis Kelamin</option>
                      <option value="Perempuan">Perempuan</option>
                      <option value="Laki-laki">Laki-laki</option>
            </select>
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
            <label>Alamat</label>
            </div>
            <div class="col-md-8">
            <input type="text" name="alamat" class="form-control">
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
            <label>Tugas</label>
            </div>
            <div class="col-md-8">
            <input type="text" name="tugas" class="form-control">
            </div>
          </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      
    </div>
  </div>

</div>
</div>
</div>