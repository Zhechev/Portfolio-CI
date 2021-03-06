﻿<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php echo $head; ?>
<?php echo $left_column; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Контакти
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body pad">
                <?php echo form_open('admin/about/edit'); ?>

                <div class="box-body">
                <div class="form-group">
                  <label for="contacts-email">Подзаглавие:</label>
                   <?php echo form_input($formSubtitle); ?>
                </div>
                <div class="form-group">
                    <label for="content_blog">Съдържание:</label>
                    <?php echo form_textarea($formContent); ?>
                </div>
                <div class="col-xs-12 col-md-3 pull-right">
                    <?php echo form_button($formButton); ?>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
