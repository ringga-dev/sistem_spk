<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.2
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/gaya'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/gaya'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/gaya'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/gaya'); ?>/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('assets/gaya'); ?>/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/gaya'); ?>/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/plugins/raphael/raphael.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src=<?= base_url('assets/gaya'); ?>/"plugins/chart.js/Chart.min.js"> </script> <!-- PAGE SCRIPTS -->
    < script src = "<?= base_url('assets/gaya'); ?>/dist/js/pages/dashboard2.js" >
</script>
<script>
    // skrip untuk input file
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>



<script src="<?= base_url('assets/gaya'); ?>/datatables/jquery-3.5.1.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/jszip.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/pdfmake.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/vfs_fonts.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/buttons.print.min.js"></script>
<script src="<?= base_url('assets/gaya'); ?>/datatables/buttons.colVis.min.js"></script>


<script>
    $(document).ready(function() {
        $('#user_prin').DataTable();
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['print', 'excel', 'pdf', 'colvis']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
</script>
</body>

</html>