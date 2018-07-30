<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <b>ЖЕЧЕВ</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Вход</p>

        <?php echo form_open('admin/user/login'); ?>
            <div class="form-group has-feedback">
                <?php echo form_input($formUsername); ?>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                 <?php echo form_input($formPassword); ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <?php echo form_button($formButton); ?>
                </div>
                <!-- /.col -->
            </div>
        <?php form_close(); ?>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/bower_components/chart.js/Chart.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/pages/dashboard2.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
<!-- CK Editor -->
<script src="<?php echo base_url('assets/bower_components/ckeditor/ckeditor.js'); ?>"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('content-blog')
    })
</script>
</body>
</html>
