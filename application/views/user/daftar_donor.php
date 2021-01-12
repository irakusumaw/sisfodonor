<div class="container-fluid">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit">FORM DAFTAR DONOR DARAH</i></h5>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'user/daftar_donor/tambah_aksi'; ?>" method="post">
          
          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label>No Daftar</label>
              </div>
            <div class="col-md-8">
            <input type="text" name="no_daftar" class="form-control" value="<?php echo $no_daftar; ?>" readonly="readonly">
          </div>
          </div>
          </div>

          <div class="form-group">
              <div class="row">
                <div class="col-md-2">
              <label for="sel1">Input Kegiatan</label>
              </div>
                <div class="col-md-10">
                  <select class="form-control" name="nama_kgt" id="rw">
                    <option>Pilih</option>
                    <?php foreach ($kegiatan as $j) : ?>

                      <option value="<?= $j['nama_kgt']; ?>"><?= $j['nama_kgt']; ?></option>

                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label>Nama</label>
              </div>
            <div class="col-md-8">
            <input type="text" name="nama" class="form-control">
          </div>
          </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
                <label>No Identitas/KTP</label>
              </div>
            <div class="col-md-4">
            <input type="text" name="no_ktp" class="form-control">
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
            <label>Usia</label>
            </div>
            <div class="col-md-8">
            <input type="text" name="usia" value=""class="form-control">
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
            <label>No Telp</label>
            </div>
            <div class="col-md-8">
            <input type="text" name="no_telp" class="form-control" value="+62">
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">
            <label>Donor Terakhir</label>
            </div>
            <div class="col-md-3">
            <input type="date" name="donor_terakhir" class="form-control">
            </div>
          </div>
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Daftar</button>
      </div>


    </div>
  </div>
</div>
</div>
</div>