<?= $header ?>

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
                        <form action="<?= base_url('/admin/cek_list/insert/') ?>" method="post" id="form-cek_list" data-parsley-validate class="form-horizontal form-label-left">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kode Booking <span class="required"></span>
                        </label>



                        <div class="col-md-6 col-sm-6 col-xs-12">

                        <div class="form-group">
                              <!-- <label for="sel1">Select list (select one):</label>
                              <select class="form-control" id="sel1" name="kd_book">

                                <?php 
                                foreach ($listKodeBooking as $key) {
                                    echo "<option value='$key->booking_code'>$key->booking_code</option>
                                    ";
                                }  
                               ?>
                                                                        
                              </select> -->
                        </div>

                            
                            <input type="text" name="kd_book"   class="form-control col-md-7 col-xs-12" id="kd_book">
                        </div>
                            <br>


                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <Label > Item </Label>
                                    </div>
                                    <div class="col-sm">
                                        <Label > QTY  </Label>
                                    </div>
                                    <div class="col-sm">
                                        <Label > Keterangan </Label>
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col-sm">
                                        
                                            <input type="text" name="item1"  class="form-control col-md-7 col-xs-12" value="MINUMAN BOTOL, GELAS PLASTIK DAN KALENG" readonly="">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" name="qty1"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                        <div class="col-sm">
                                            <input type="text" name="keterangan1"  class="form-control col-md-7 col-xs-12">
                                        </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item2"  class="form-control col-md-7 col-xs-12" value="MIE / KERTAS MINYAK" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty2"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan2"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item3"  class="form-control col-md-7 col-xs-12" value="PERALATAN MANDI / SHAMPO, ODOL, DLL " readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty3"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan3"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item4"  class="form-control col-md-7 col-xs-12" value="TRASH BAG / PLASTIK SAMPAH" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty4"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan4"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item5"  class="form-control col-md-7 col-xs-12" value="SNACK / MAKANAN RINGAN" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty5"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan5"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item6"  class="form-control col-md-7 col-xs-12" value="ROKOK" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty6"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan6"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item7"  class="form-control col-md-7 col-xs-12" value="TISSUE" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty7"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan7"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item8"  class="form-control col-md-7 col-xs-12" value="MASKER" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty8"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan8"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item9"  class="form-control col-md-7 col-xs-12" value="SACHEET" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty9"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan9"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item10"  class="form-control col-md-7 col-xs-12" value="PEMBALUT" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty10"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan10"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item11"  class="form-control col-md-7 col-xs-12" value="TEMPAT MAKANAN" readonly="">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty11"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan11"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item12"  class="form-control col-md-7 col-xs-12" >
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty12"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan12"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item13"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty13"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan13"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        
                                        <input type="text" name="item14"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="qty14"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                    <div class="col-sm">
                                        <input type="text" name="keterangan14"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                            </div>






<!--                    <div class="col-12">-->
<!---->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-md-12">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Item <span class="required">*</span>-->
<!--                                        </label>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item1"  class="form-control col-md-7 col-xs-12" value="" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item2"  class="form-control col-md-7 col-xs-12" value="MIE / KERTAS MINYAK" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item3"  class="form-control col-md-7 col-xs-12" value="PERALATAN MANDI / SHAMPO, ODOL, DLL" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item4"  class="form-control col-md-7 col-xs-12" value="TRASH BAG / PLASTIK SAMPAH" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item5"  class="form-control col-md-7 col-xs-12" value="SNACK / MAKANAN RINGAN" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item6"  class="form-control col-md-7 col-xs-12" value="ROKOK" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item7"  class="form-control col-md-7 col-xs-12" value="TISSUE" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item8"  class="form-control col-md-7 col-xs-12" value="MASKER" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item9"  class="form-control col-md-7 col-xs-12" value="SACHEET" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item10"  class="form-control col-md-7 col-xs-12" value="PEMBALUT" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item11"  class="form-control col-md-7 col-xs-12" value="TEMPAT MAKANAN" readonly>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item12" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item13" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="item14" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!---->
<!--                            <div class="row">-->
<!--                                <div class="col-10">-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity <span class="required">*</span>-->
<!--                                        </label>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty1"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty2"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty3"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty4"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty5"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty6"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty7"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty8"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty9"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty10"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty11"  class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty12" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty13" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="col-md-10 col-sm-6 col-xs-12">-->
<!--                                            --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                            <input type="text" name="qty14" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                        <div class="row">-->
<!--                            <div class="col-md-10">-->
<!--                                <div class="form-group">-->
<!--                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Keterangan <span class="required">*</span>-->
<!--                                    </label>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan1"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan2"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan3"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan4"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan5"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan6"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan7"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan8"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan9"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan10"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan11"  class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan12" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan13" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                    <br>-->
<!--                                    <div class="col-md-6 col-sm-6 col-xs-12">-->
<!--                                        --><?php //#echo form_input('id_pelanggan'); ?>
<!--                                        <input type="text" name="keterangan14" required="" class="form-control col-md-7 col-xs-12">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->



                            <div class="form-group">
                                <div class="col-md-4 col-sm-4 col-xs-4 ">
                                    <button type="submit" id="submit_" class="btn btn-success">Proses</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>

                                    <button class="btn btn-danger"  onclick="window.history.back()" >Back</button>
                                </div>

                            </div>

                    </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   
<?= $footer ?>