<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php echo $head; ?>
<?php echo $left_column; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Умения
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
            <div class="box-header">
              <h3 class="box-title"><b>Добави умение:</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <?php echo form_open_multipart($action); ?>

                <div class="box-body">
                <div class="form-group">
                  <label for="name-skill">Име:</label>
                   <?php echo form_input($formName); ?>
                </div>
                <div class="form-group">
                    <label for="link-skill">Линк:</label>
                    <?php echo form_input($formLink); ?>
                </div>
                <div class="image-upload">
                    <label for="image-input-skill">
                        <img src="<?php echo base_url('assets/img/skills/' . $formImage); ?>" alt="" class="img-thumbnail" id="image-skill"/>
                    </label>
                    <input type="file" id="image-input-skill" name="image" onchange="readPathSkill(this);"/>
                </div>
                <div class="col-xs-12 col-md-3 pull-right">
                    <?php echo form_button($formButton); ?>
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

<script>
    function readPathSkill(input) {
        console.log('skill');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-skill').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image-input-skill").change(function(){
        readPath(this);
    });
</script>
