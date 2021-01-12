</table>
<div class="container-fluid">
  <div class="container">
    <div class="card card-register mx-auto mt-1">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i>FORM INPUT PENDONOR</h5>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url(). 'admin/input_pendonor/tambah_aksi'; ?>" method="post">

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>No Pendaftar</label>
                </div>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="no_pendaftar" id="no_pendaftar" placeholder="Entry No Pendaftar" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
              <label for="sel1">Input Kegiatan</label>
              </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nama_kgt" id="nama_kgt">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Tanggal</label>
                </div>
                <div class="col-md-10">
                  <input type="date" class="form-control" name="tanggal" >
                </div>
              </div>
            </div>            

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Nama Petugas</label>
                </div>
                <div class="col-md-10">
                  <select class="form-control" name="nama_petugas" id="rw">
                    <option>Pilih</option>
                    <?php foreach ($petugas as $p) : ?>

                      <option value="<?= $p['nama']; ?>"><?= $p['nama']; ?></option>

                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Kadar HB</label>
                </div>
                <div class="col-md-10">
                  <input type="text" name="hb" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Berat Badan</label>
                </div>
                <div class="col-md-10">
                  <input type="text" name="bb" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Tekanan Darah</label>
                </div>
                <div class="col-md-10">
                  <input type="text" name="tekanan_darah" class="form-control">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Golongan Darah</label>
                </div>
                <div class="col-md-10">
                  <select class="form-control" name="golongan_darah">
                      <option disabled="" selected="">Pilih Golongan Darah</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Status</label>
                </div>
                <div class="col-md-10">
                  <select class="form-control" name="status">
                      <option disabled="" selected="">Diterima/Ditolak</option>
                      <option value="Diterima">Diterima</option>
                      <option value="Ditolak">Ditolak</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-2">
                  <label>Keterangan</label>
                </div>
                <div class="col-md-10">
                  <input type="text" name="keterangan" class="form-control">
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