<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('head'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php $this->load->view('web_title'); ?>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
              <?php $this->load->view('menu_profile'); ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
              <?php $this->load->view('sidebar'); ?>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
          <?php $this->load->view('top_navigation'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kriteria</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah Kriteria</h2>
                    <ul class="nav navbar-left panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="<?php echo site_url('admin/con_kriteria/input_kriteria'); ?>" method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Kriteria <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nama_kriteria" name="nama_kriteria" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kriteria</h2>
                    <ul class="nav navbar-left panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <table id="table-kriteria" class="table table-striped table-bordered ">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama Kriteria</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($hasil->result() as $baris ) {
                        ?>
                          <tr>
                            <td><?php echo $baris->id_kriteria;?></td>
                            <td><?php echo $baris->nama_kriteria;?></td>
                            <td align='center'><?php echo "<a class='btn btn-success' href='".site_url()."/admin/con_kriteria/form_edit/".$baris->id_kriteria."'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>";?></td>
                          </tr>
                        <?php
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
          <?php $this->load->view('footer'); ?>
        <!-- /footer content -->
      </div>
    </div>
    <?php $this->load->view('jquery'); ?>
  </body>
</html>
