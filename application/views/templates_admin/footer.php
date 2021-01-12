 <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

  <script type="text/javascript">
    $(document).ready(function()
    {
      $('#no_pendaftar').on('input',function()
      {
        var no_pendaftar = $(this).val();
        $.ajax({
          type      : "POST",
          dataType  : "JSON",
          url       : "<?= base_url().'admin/input_pendonor/get_no_pendaftar'; ?>",
          data      : {no_pendaftar: no_pendaftar},
          cache     : false,
          success : function(data)
            {
              $.each(data, function(nama_kgt)
              {
                $('#nama_kgt').val(data.nama_kgt);
              });
            }
        });
        return false;
      });
    });
  </script>

</body>

</html>
