<div class="container-fluid">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit">FORM INPUT JADWAL</i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<form action="<?php echo base_url(). 'admin/input_kegiatan/tambah_aksi'; ?>" method="post">

       		<div class="form-group">
            <div class="row">
              <div class="col-md-2">
       			<label>Nama Kegiatan</label>
            </div>
            <div class="col-md-10">
       			<input type="text" name="nama_kgt" class="form-control">
            </div>
          </div>
       		</div>

       		<div class="form-group">
            <div class="row">
              <div class="col-md-2">
       			<label>Tempat</label>
             </div>
            <div class="col-md-10">
       			<input type="text" name="tempat" class="form-control">
            </div>
          </div>
       		</div>

       		<div class="form-group">
            <div class="row">
              <div class="col-md-2">
       			<label>Alamat</label>
            </div>
            <div class="col-md-10">
       			<input type="text" name="alamat" class="form-control">
            </div>
          </div>
       		</div>

       		<div class="form-group">
            <div class="row">
              <div class="col-md-2">
       			<label>Tanggal</label>
            </div>
            <div class="col-md-10">
       			<input type="date" name="tanggal" class="form-control">
            </div>
          </div>
       		</div>

       		<div class="form-group">
            <div class="row">
              <div class="col-md-2">
       			<label>Waktu</label>
            </div>
            <div class="col-md-10">
       			<input type="text" name="waktu" class="form-control">
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