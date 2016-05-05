
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>plugins/dist/js/app.js"></script>

    <!-- DataTables -->
    <script src="<?php echo base_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $('#example1').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });

      });
      $('#pending').click(function(){
      	 $('#example1').DataTable().search( 'Pending' ).draw();

      }); 
      $('#all').click(function(){
      	 $('#example1').DataTable().search( '' ).draw();

      });
    </script>

  </body>
</html>

