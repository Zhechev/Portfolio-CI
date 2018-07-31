<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php echo $head; ?>
<?php echo $left_column; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        БЛОГ
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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title col-xs-6 col-md-10"><b>Всички постове:</b></h3>
              <a href="<?php echo site_url('admin/blog/add'); ?>" class="btn btn-info col-xs-6 col-md-2">Добави</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Заглавие</th>
                  <th>Съдържание</th>
                  <th>Действие</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post) { ?>
                <tr>
                  <td><?php echo $post['id']; ?></td>
                  <td><?php echo $post['title']; ?></td>
                  <td><?php echo $post['content']; ?></td>
                  <td><div class="btn-group">
                      <a href="<?php echo site_url('admin/blog/edit/'.$post['id']); ?>" class="btn btn-success">Редактирай</a>
                      <a href="<?php echo site_url('admin/blog/delete/'.$post['id']); ?>" class="btn btn-danger">Изтрий</a>
                    </div></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
