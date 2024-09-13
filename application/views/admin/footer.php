<?php
	foreach($idsekolah as $load) {}
?>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
<?php } ?>
</div><!--/fluid-row-->
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<footer style="padding-top: 20px; padding-bottom: 20px; background-color: #fff; padding-left: 10px; padding-right: 10px;">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Versi 1.3
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo DATE("Y");?> SMK NEGERI 1 TOTIKUM </strong> | developer by <a href='#' title='StokCoding.com' target='_blank'>Alifbima</a>

  </footer>
</div>
<?php } ?>
<!-- Control Sidebar -->

  <!-- /.control-sidebar -->
<script src="<?php echo base_url(); ?>asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/adminlte.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>



</body>
</html>
