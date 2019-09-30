
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Cek List</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> For Cek List</div>
            <div class="card-body">
                <div class="table-responsive">

                    <div class="container">
                        <div class="form-group">
                            <form action="<?= base_url('/admin/cek_list/update/') ?>" method="post" id="form-cek_list" data-parsley-validate class="form-horizontal form-label-left">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Kode Booking <h2><?php echo $cek_list[0]->kd_book; ?> </h2>  <span class="required"></span>
                                </label>






                                <div class="col-12">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Item <span>*</span>
                                                </label>

                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">QTY <span>*</span>
                                                </label>
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">KETERANGAN <span>*</span>
                                                </label>
                                                <?php

                                                   $i=1;
                                                foreach ($cek_list as $row) :

                                                ?>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm">

                                                                <input type="hidden" name="<?php echo "id".$i; ?>" class="form-control col-md-7 col-xs-12" value="<?php echo $row->id ?>"/>

                                                                <input type="text" name="<?php echo "item".$i; ?>" class="form-control col-md-7 col-xs-12" value="<?php echo $row->item ?>"/>



                                                                <br>
                                                            </div>
                                                            <div class="col-sm">
                                                                <input type="text" name="<?php echo "qty".$i; ?>" class="form-control col-md-7 col-xs-12" value="<?php echo $row->qty ?>"/>
                                                            </div><br>
                                                            <div class="col-sm">
                                                                <input type="text" name="<?php echo "keterangan".$i; ?>" lass="form-control col-md-7 col-xs-12" value="<?php echo $row->keterangan ?>"/>
                                                            </div><br>
                                                        </div>
                                                    </div>




                                                <?php
                                                    $i++;
                                                endforeach;

                                                ?>

                                            </div>
                                        </div>
                                    </div>








                                </div>

                        </div>





                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" id="submit_" class="btn btn-success">Proses</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button onclick="window.history.back()" class="btn btn-danger pull-right">Kembali</button>
                            </div>

                        </div>



                    </div>

                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->